<?php

declare(strict_types=1);

require_once __DIR__ . '/storage.php';

function start_session_if_needed(): void {
	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}
}

function is_logged_in(): bool {
	start_session_if_needed();
	return isset($_SESSION['user']);
}

function current_username(): ?string {
	start_session_if_needed();
	return $_SESSION['user']['username'] ?? null;
}

function require_login(): void {
	if (!is_logged_in()) {
		header('Location: /PHP/2.Projects/3.Student%20Result%20Calculator/public/login.php');
		exit;
	}
}

function register_user(string $username, string $password): array {
	$username = trim($username);
	$errors = [];
	if ($username === '') {
		$errors['username'] = 'Username is required';
	}
	if (strlen($password) < 6) {
		$errors['password'] = 'Password must be at least 6 characters';
	}
	if (!empty($errors)) {
		return ['ok' => false, 'errors' => $errors];
	}
	if (find_user_by_username($username)) {
		return ['ok' => false, 'errors' => ['username' => 'Username already exists']];
	}
	$hash = password_hash($password, PASSWORD_DEFAULT);
	create_user($username, $hash);
	return ['ok' => true];
}

function attempt_login(string $username, string $password): array {
	$user = find_user_by_username($username);
	if (!$user || !password_verify($password, $user['password'])) {
		return ['ok' => false, 'error' => 'Invalid username or password'];
	}
	start_session_if_needed();
	$_SESSION['user'] = ['username' => $user['username']];
	return ['ok' => true];
}

function logout(): void {
	start_session_if_needed();
	$_SESSION = [];
	if (ini_get('session.use_cookies')) {
		$params = session_get_cookie_params();
		setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
	}
	session_destroy();
}




