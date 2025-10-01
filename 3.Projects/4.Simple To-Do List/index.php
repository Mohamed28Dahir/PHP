<?php
session_start();

// Initialize task list in session
if (!isset($_SESSION['tasks']) || !is_array($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

// Helper: sanitize text
function sanitize_text(string $text): string {
    $text = trim($text);
    // Collapse internal whitespace and strip control chars
    $text = preg_replace('/[\x00-\x1F\x7F]/u', '', $text);
    return $text;
}

// Helper: redirect (Post/Redirect/Get)
function redirect_self(): void {
    header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?'));
    exit;
}

// Handle POST actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    // Ensure tasks structure
    if (!isset($_SESSION['tasks']) || !is_array($_SESSION['tasks'])) {
        $_SESSION['tasks'] = [];
    }

    // Add a task
    if ($action === 'add') {
        $text = sanitize_text($_POST['text'] ?? '');
        if ($text !== '') {
            $task = [
                'id' => uniqid('t_', true),
                'text' => $text,
                'completed' => false,
            ];
            // Prepend new tasks to the top
            array_unshift($_SESSION['tasks'], $task);
        }
        redirect_self();
    }

    // Toggle complete
    if ($action === 'toggle') {
        $id = $_POST['id'] ?? '';
        foreach ($_SESSION['tasks'] as &$task) {
            if ($task['id'] === $id) {
                $task['completed'] = !$task['completed'];
                break;
            }
        }
        unset($task);
        redirect_self();
    }

    // Delete a single task
    if ($action === 'delete') {
        $id = $_POST['id'] ?? '';
        $_SESSION['tasks'] = array_values(array_filter(
            $_SESSION['tasks'],
            function ($task) use ($id) { return $task['id'] !== $id; }
        ));
        redirect_self();
    }

    // Clear completed tasks
    if ($action === 'clear_completed') {
        $_SESSION['tasks'] = array_values(array_filter(
            $_SESSION['tasks'],
            function ($task) { return empty($task['completed']); }
        ));
        redirect_self();
    }

    // Clear all tasks
    if ($action === 'clear_all') {
        $_SESSION['tasks'] = [];
        redirect_self();
    }

    // Reorder via drag-and-drop (AJAX)
    if ($action === 'reorder') {
        $order = $_POST['order'] ?? '';
        $ids = is_string($order) ? explode(',', $order) : [];
        $idToTask = [];
        foreach ($_SESSION['tasks'] as $task) { $idToTask[$task['id']] = $task; }
        $new = [];
        foreach ($ids as $id) {
            if (isset($idToTask[$id])) { $new[] = $idToTask[$id]; unset($idToTask[$id]); }
        }
        // Append any tasks not included (fallback safety)
        foreach ($idToTask as $remaining) { $new[] = $remaining; }
        $_SESSION['tasks'] = $new;

        header('Content-Type: application/json');
        echo json_encode(['ok' => true]);
        exit;
    }

    // Set filter
    if ($action === 'set_filter') {
        $filter = $_POST['filter'] ?? 'all';
        if (!in_array($filter, ['all', 'active', 'completed'], true)) { $filter = 'all'; }
        $_SESSION['filter'] = $filter;
        redirect_self();
    }
}

$tasks = $_SESSION['tasks'];
$filter = $_SESSION['filter'] ?? 'all';

// Apply filter for rendering
$visibleTasks = array_values(array_filter($tasks, function ($task) use ($filter) {
    if ($filter === 'active') { return empty($task['completed']); }
    if ($filter === 'completed') { return !empty($task['completed']); }
    return true;
}));

// Counts
$activeCount = 0; $completedCount = 0;
foreach ($tasks as $task) { if (!empty($task['completed'])) { $completedCount++; } else { $activeCount++; } }
?>
<!doctype html>
<html lang="en" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Simple To‑Do — Polished</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <!-- Tailwind CSS CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                darkMode: 'class',
                theme: {
                    extend: {
                        fontFamily: { sans: ['Inter', 'system-ui', 'sans-serif'] },
                        colors: {
                            brand: {
                                50: '#eff6ff', 100: '#dbeafe', 200: '#bfdbfe', 300: '#93c5fd',
                                400: '#60a5fa', 500: '#3b82f6', 600: '#2563eb', 700: '#1d4ed8',
                                800: '#1e40af', 900: '#1e3a8a'
                            }
                        }
                    }
                }
            }
        </script>
        <link rel="stylesheet" href="assets/styles.css">
        <script>
            // theme boot
            (function(){
                try {
                    var theme = localStorage.getItem('theme');
                    if (theme === 'dark' || (!theme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                        document.documentElement.classList.add('dark');
                    }
                } catch (e) {}
            })();
        </script>
    </head>
    <body class="min-h-screen bg-gradient-to-br from-slate-50 via-white to-slate-100 dark:from-slate-900 dark:via-slate-950 dark:to-black text-slate-800 dark:text-slate-100 antialiased">
        <div class="absolute inset-0 -z-10 overflow-hidden">
            <div class="pointer-events-none select-none bg-[radial-gradient(1000px_600px_at_10%_-10%,rgba(59,130,246,0.12),transparent),radial-gradient(800px_500px_at_90%_30%,rgba(16,185,129,0.10),transparent)] w-full h-full"></div>
        </div>

        <header class="max-w-3xl mx-auto px-6 pt-10 pb-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="size-10 rounded-xl bg-gradient-to-br from-brand-500 to-emerald-500 shadow-lg shadow-brand-500/30 grid place-items-center text-white font-extrabold">✓</div>
                <div>
                    <h1 class="text-2xl sm:text-3xl font-extrabold tracking-tight">Your To‑Do Studio</h1>
                    <p class="text-sm text-slate-500 dark:text-slate-400">Session‑based, elegant, and fast.</p>
                </div>
            </div>
            <button id="themeToggle" class="inline-flex items-center gap-2 px-3 py-2 rounded-lg text-sm font-medium bg-white/70 dark:bg-white/10 backdrop-blur border border-slate-200/50 dark:border-white/10 shadow-sm hover:shadow transition">
                <span class="i">🌗</span>
                <span>Theme</span>
            </button>
        </header>

        <main class="max-w-3xl mx-auto px-6 pb-16">
            <section class="glass-panel rounded-2xl p-5 sm:p-6">
                <form method="post" class="flex flex-col sm:flex-row gap-3" autocomplete="off">
                    <input type="hidden" name="action" value="add">
                    <input type="text" name="text" placeholder="Add a new task..." class="flex-1 input text-base" maxlength="160" required>
                    <button type="submit" class="btn-primary">Add Task</button>
                </form>

                <div class="mt-5 flex flex-wrap items-center gap-2">
                    <form method="post">
                        <input type="hidden" name="action" value="set_filter">
                        <input type="hidden" name="filter" value="all">
                        <button class="chip <?= $filter==='all'?'chip-active':'' ?>">All</button>
                    </form>
                    <form method="post">
                        <input type="hidden" name="action" value="set_filter">
                        <input type="hidden" name="filter" value="active">
                        <button class="chip <?= $filter==='active'?'chip-active':'' ?>">Active</button>
                    </form>
                    <form method="post">
                        <input type="hidden" name="action" value="set_filter">
                        <input type="hidden" name="filter" value="completed">
                        <button class="chip <?= $filter==='completed'?'chip-active':'' ?>">Completed</button>
                    </form>

                    <div class="ms-auto flex gap-2">
                        <form method="post" onsubmit="return confirm('Clear completed tasks?')">
                            <input type="hidden" name="action" value="clear_completed">
                            <button class="btn-ghost">Clear Completed (<?= $completedCount ?>)</button>
                        </form>
                        <form method="post" onsubmit="return confirm('Clear ALL tasks?')">
                            <input type="hidden" name="action" value="clear_all">
                            <button class="btn-ghost text-rose-600 dark:text-rose-400">Clear All</button>
                        </form>
                    </div>
                </div>

                <div class="mt-4 text-sm text-slate-500 dark:text-slate-400"><?= $activeCount ?> active • <?= $completedCount ?> completed</div>

                <ul id="taskList" class="mt-4 divide-y divide-slate-200/70 dark:divide-white/10" aria-live="polite">
<?php if (count($visibleTasks) === 0): ?>
                    <li class="py-10 text-center text-slate-500 dark:text-slate-400">No tasks to show. Add something inspiring ✨</li>
<?php else: foreach ($visibleTasks as $task): ?>
                    <li class="task-row group" draggable="true" data-id="<?= htmlspecialchars($task['id']) ?>">
                        <div class="flex items-center gap-3 flex-1 min-w-0">
                            <form method="post">
                                <input type="hidden" name="action" value="toggle">
                                <input type="hidden" name="id" value="<?= htmlspecialchars($task['id']) ?>">
                                <button class="check <?= !empty($task['completed']) ? 'checked' : '' ?>" title="Toggle complete" aria-label="Toggle complete"></button>
                            </form>
                            <div class="flex-1 min-w-0">
                                <div class="truncate <?= !empty($task['completed']) ? 'line-through text-slate-400 dark:text-slate-500' : '' ?>">
                                    <?= htmlspecialchars($task['text']) ?>
                                </div>
                            </div>
                        </div>
                        <div class="opacity-0 group-hover:opacity-100 transition">
                            <form method="post" onsubmit="return confirm('Delete this task?')">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="id" value="<?= htmlspecialchars($task['id']) ?>">
                                <button class="icon-btn" title="Delete" aria-label="Delete">🗑️</button>
                            </form>
                        </div>
                    </li>
<?php endforeach; endif; ?>
                </ul>

                <p class="mt-6 text-xs text-slate-400 dark:text-slate-500">Data is stored in PHP session only (temporary). Refresh or close may reset depending on server config.</p>
            </section>
        </main>

        <script src="assets/app.js"></script>
    </body>
</html>


