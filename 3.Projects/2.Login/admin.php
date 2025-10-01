<?php
require_once __DIR__ . '/auth.php';
requireRole('admin');
$user = currentUser();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Dashboard - Beach Logging</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="assets/styles.css">
</head>
<body class="min-h-screen bg-slate-50">
	<header class="bg-white shadow">
		<div class="mx-auto max-w-6xl px-4 py-4 flex items-center justify-between">
			<h1 class="text-xl font-semibold text-slate-800">Admin Dashboard</h1>
			<nav class="flex items-center gap-4">
				<span class="text-slate-600">Signed in as <strong><?= htmlspecialchars($user['username']) ?></strong></span>
				<a href="logout.php" class="text-red-600 hover:text-red-700 font-medium">Logout</a>
			</nav>
		</div>
	</header>
	<main class="mx-auto max-w-6xl px-4 py-8">
		<section class="grid gap-6 md:grid-cols-2">
			<div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
				<h2 class="text-lg font-semibold text-slate-800">Overview</h2>
				<p class="mt-2 text-slate-600 text-sm">This area is restricted to administrators. From here, manage users, settings, and reports.</p>
			</div>
			<div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
				<h2 class="text-lg font-semibold text-slate-800">Quick Actions</h2>
				<ul class="mt-3 list-disc pl-5 text-slate-700 text-sm">
					<li>Review activity logs</li>
					<li>Manage beach access roles</li>
					<li>Configure project settings</li>
				</ul>
			</div>
		</section>
	</main>
</body>
</html>


