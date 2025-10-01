<?php

// Simple in-memory user store with roles.
// For a real app, replace this with a database and hashed passwords.

function getUserStore(): array {
	return [
		// username => [password (demo only), role]
		'admin' => [
			'password' => 'admin123',
			'role' => 'admin',
		],
		'user' => [
			'password' => 'user123',
			'role' => 'user',
		],
	];
}

?>


