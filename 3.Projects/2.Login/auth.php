<?php
require_once __DIR__ . '/users.php';
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}

function authenticate(string $username, string $password): bool {
	$userStore = getUserStore();
	if (!array_key_exists($username, $userStore)) {
		return false;
	}
	$record = $userStore[$username];
	// Demo-only: compare plain text; replace with password_verify when using hashes
	if (!isset($record['password']) || $password !== $record['password']) {
		return false;
	}
	$_SESSION['user'] = [
		'username' => $username,
		'role' => $record['role'],
	];
	return true;
}

function currentUser(): ?array {
	return $_SESSION['user'] ?? null;
}

function requireLogin(): void {
	if (!isset($_SESSION['user'])) {
		header('Location: login.php');
		exit;
	}
}

function requireRole(string $role): void {
	requireLogin();
	$user = $_SESSION['user'];
	if (!isset($user['role']) || $user['role'] !== $role) {
		// If role mismatch, redirect to their dashboard if they are logged in
		if ($user['role'] === 'admin') {
			header('Location: admin.php');
			exit;
		}
		header('Location: user.php');
		exit;
	}
}

function redirectIfAuthenticated(): void {
	if (isset($_SESSION['user'])) {
		$user = $_SESSION['user'];
		if ($user['role'] === 'admin') {
			header('Location: admin.php');
			exit;
		}
		header('Location: user.php');
		exit;
	}
}

function logout(): void {
	$_SESSION = [];
	if (ini_get('session.use_cookies')) {
		$params = session_get_cookie_params();
		setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
	}
	session_destroy();
}

?>


