<?php

declare(strict_types=1);

/**
 * Simple file-based storage for users.
 * Data file: storage/users.json
 */

const USERS_FILE = __DIR__ . '/../storage/users.json';

function ensure_storage_initialized(): void {
	$dir = dirname(USERS_FILE);
	if (!is_dir($dir)) {
		mkdir($dir, 0777, true);
	}
	if (!file_exists(USERS_FILE)) {
		file_put_contents(USERS_FILE, json_encode([], JSON_PRETTY_PRINT));
	}
}

/**
 * @return array<int, array{username:string,password:string,createdAt:string}>
 */
function load_users(): array {
	ensure_storage_initialized();
	$fp = fopen(USERS_FILE, 'c+');
	if ($fp === false) {
		return [];
	}
	flock($fp, LOCK_SH);
	$contents = stream_get_contents($fp);
	flock($fp, LOCK_UN);
	fclose($fp);
	if ($contents === false || $contents === '') {
		return [];
	}
	$data = json_decode($contents, true);
	return is_array($data) ? $data : [];
}

/**
 * @param array<int, array{username:string,password:string,createdAt:string}> $users
 */
function save_users(array $users): void {
	ensure_storage_initialized();
	$fp = fopen(USERS_FILE, 'c+');
	if ($fp === false) {
		return;
	}
	flock($fp, LOCK_EX);
	ftruncate($fp, 0);
	fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
	flock($fp, LOCK_UN);
	fclose($fp);
}

function find_user_by_username(string $username): ?array {
	$users = load_users();
	foreach ($users as $user) {
		if (strcasecmp($user['username'], $username) === 0) {
			return $user;
		}
	}
	return null;
}

function create_user(string $username, string $passwordHash): bool {
	$users = load_users();
	foreach ($users as $user) {
		if (strcasecmp($user['username'], $username) === 0) {
			return false; // already exists
		}
	}
	$users[] = [
		'username' => $username,
		'password' => $passwordHash,
		'createdAt' => gmdate('c'),
	];
	save_users($users);
	return true;
}




