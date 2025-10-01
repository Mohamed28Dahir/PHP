<?php
require_once __DIR__ . '/auth.php';

// If already logged in, redirect to appropriate dashboard
redirectIfAuthenticated();

$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$username = isset($_POST['username']) ? trim((string)$_POST['username']) : '';
	$password = isset($_POST['password']) ? (string)$_POST['password'] : '';
	if ($username === '' || $password === '') {
		$errorMessage = 'Please enter both username and password.';
	} else {
		if (authenticate($username, $password)) {
			$user = currentUser();
			if ($user && $user['role'] === 'admin') {
				header('Location: admin.php');
				exit;
			}
			header('Location: user.php');
			exit;
		} else {
			$errorMessage = 'Invalid credentials.';
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Beach Logging - Login</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="assets/styles.css">
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-50 to-cyan-100 flex items-center justify-center p-4">
	<main class="w-full max-w-md">
		<div class="bg-white/80 backdrop-blur shadow-xl rounded-2xl p-8">
			<h1 class="text-2xl font-bold text-slate-800 text-center">Beach Logging</h1>
			<p class="mt-1 text-center text-slate-500">Sign in to your dashboard</p>
			<?php if ($errorMessage !== ''): ?>
				<div class="mt-4 rounded border border-red-200 bg-red-50 text-red-700 p-3 text-sm">
					<?= htmlspecialchars($errorMessage) ?>
				</div>
			<?php endif; ?>
			<form class="mt-6 space-y-4" action="" method="POST" autocomplete="off">
				<div>
					<label class="block text-sm font-medium text-slate-700" for="username">Username</label>
					<input id="username" name="username" type="text" required class="mt-1 block w-full rounded-lg border-slate-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500" placeholder="Enter username" />
				</div>
				<div>
					<label class="block text-sm font-medium text-slate-700" for="password">Password</label>
					<input id="password" name="password" type="password" required class="mt-1 block w-full rounded-lg border-slate-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500" placeholder="Enter password" />
				</div>
				<button type="submit" class="w-full inline-flex items-center justify-center rounded-lg bg-cyan-600 px-4 py-2.5 text-white font-medium hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2">Sign In</button>
			</form>
			<div class="mt-6 text-xs text-slate-500">
				<p><span class="font-semibold">Demo</span>: admin/admin123, user/user123</p>
			</div>
		</div>
	</main>
</body>
</html>


