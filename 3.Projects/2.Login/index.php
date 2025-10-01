<?php
session_start();

// Redirect based on authentication and role
if (isset($_SESSION['user'])) {
	$user = $_SESSION['user'];
	if (!empty($user['role']) && $user['role'] === 'admin') {
		header('Location: admin.php');
		exit;
	}
	header('Location: user.php');
	exit;
}

// Not authenticated → go to login
header('Location: login.php');
exit;
?>


