<?php
require_once __DIR__ . '/auth.php';
requireLogin();
$user = currentUser();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Dashboard - Beach Logging</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="assets/styles.css">
</head>
<body class="min-h-screen bg-slate-50">
	<header class="bg-white shadow">
		<div class="mx-auto max-w-6xl px-4 py-4 flex items-center justify-between">
			<h1 class="text-xl font-semibold text-slate-800">User Dashboard</h1>
			<nav class="flex items-center gap-4">
				<span class="text-slate-600">Signed in as <strong><?= htmlspecialchars($user['username']) ?></strong> (<?= htmlspecialchars($user['role']) ?>)</span>
				<a href="logout.php" class="text-red-600 hover:text-red-700 font-medium">Logout</a>
			</nav>
		</div>
	</header>
	<main class="mx-auto max-w-6xl px-4 py-8">
		<section class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
			<h2 class="text-lg font-semibold text-slate-800">Welcome</h2>
			<p class="mt-2 text-slate-600 text-sm">This dashboard is for regular users. Access your logs and personal data here.</p>
		</section>
	</main>
</body>
</html>


