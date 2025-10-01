<?php

declare(strict_types=1);

require_once __DIR__ . '/auth.php';

function html_escape(string $value): string {
	return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function base_url(string $path = ''): string {
	$base = '/PHP/2.Projects/3.Student%20Result%20Calculator/public';
	return $base . $path;
}

function render_header(string $title = 'Student Result Calculator'): void {
	$user = current_username();
	echo '<!DOCTYPE html>';
	echo '<html lang="en">';
	echo '<head>';
	echo '<meta charset="UTF-8" />';
	echo '<meta name="viewport" content="width=device-width, initial-scale=1" />';
	echo '<title>' . html_escape($title) . '</title>';
	// Tailwind CDN (no build)
	echo '<script src="https://cdn.tailwindcss.com"></script>';
	echo '<script>tailwind.config = { theme: { extend: { colors: { brand: { 50: "#eff6ff", 500: "#2563eb", 600: "#1d4ed8", 700: "#1e40af" } } } } };</script>';
	echo '</head>';
	echo '<body class="min-h-screen bg-slate-50 text-slate-800">';
	echo '<header class="border-b bg-white">';
	echo '<div class="mx-auto max-w-5xl px-4 py-4 flex items-center justify-between">';
	echo '<a href="' . base_url('/index.php') . '" class="font-semibold text-xl text-slate-900">Result<span class="text-brand-600">Pro</span></a>';
	echo '<nav class="flex items-center gap-4">';
	echo '<a class="text-slate-600 hover:text-slate-900" href="' . base_url('/index.php') . '">Home</a>';
	if ($user) {
		echo '<a class="text-slate-600 hover:text-slate-900" href="' . base_url('/calculator.php') . '">Calculator</a>';
		echo '<a class="text-slate-600 hover:text-slate-900" href="' . base_url('/result.php') . '">Result</a>';
		echo '<span class="ml-2 text-slate-500">' . html_escape($user) . '</span>';
		echo '<a class="ml-2 inline-flex items-center rounded-md bg-red-50 px-3 py-1.5 text-sm text-red-700 ring-1 ring-inset ring-red-200 hover:bg-red-100" href="' . base_url('/logout.php') . '">Logout</a>';
	} else {
		echo '<a class="inline-flex items-center rounded-md bg-brand-600 px-3 py-1.5 text-sm text-white hover:bg-brand-700" href="' . base_url('/login.php') . '">Login</a>';
		echo '<a class="inline-flex items-center rounded-md bg-slate-900 px-3 py-1.5 text-sm text-white hover:bg-slate-800" href="' . base_url('/register.php') . '">Register</a>';
	}
	echo '</nav>';
	echo '</div>';
	echo '</header>';
}

function render_footer(): void {
	echo '<footer class="mt-16 border-t">';
	echo '<div class="mx-auto max-w-5xl px-4 py-6 text-sm text-slate-500">';
	echo '© ' . date('Y') . ' ResultPro. Built with PHP & Tailwind.';
	echo '</div>';
	echo '</footer>';
	echo '</body></html>';
}

function render_container_start(string $title, string $subtitle = ''): void {
	echo '<main class="mx-auto max-w-5xl px-4">';
	echo '<div class="mt-10 mb-6">';
	echo '<h1 class="text-3xl font-semibold text-slate-900">' . html_escape($title) . '</h1>';
	if ($subtitle !== '') {
		echo '<p class="mt-1 text-slate-600">' . html_escape($subtitle) . '</p>';
	}
	echo '</div>';
}

function render_container_end(): void {
	echo '</main>';
}

function render_card_start(): void {
	echo '<div class="rounded-xl border bg-white shadow-sm">';
	echo '<div class="p-6">';
}

function render_card_end(): void {
	echo '</div></div>';
}




