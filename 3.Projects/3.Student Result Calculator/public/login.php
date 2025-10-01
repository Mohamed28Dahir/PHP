<?php
declare(strict_types=1);
require_once __DIR__ . '/../includes/layout.php';
require_once __DIR__ . '/../includes/auth.php';

if (is_logged_in()) {
	header('Location: ' . base_url('/calculator.php'));
	exit;
}

$error = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$username = $_POST['username'] ?? '';
	$password = $_POST['password'] ?? '';
	$result = attempt_login($username, $password);
	if ($result['ok']) {
		header('Location: ' . base_url('/calculator.php'));
		exit;
	}
	$error = $result['error'] ?? 'Login failed';
}

render_header('Login — ResultPro');
render_container_start('Welcome back');
render_card_start();
?>
<?php if ($error): ?>
<div class="mb-4 rounded-md bg-red-50 p-3 text-red-700 ring-1 ring-inset ring-red-200">
	<?= html_escape($error) ?>
</div>
<?php endif; ?>

<form method="post" class="space-y-4 max-w-md">
	<div>
		<label class="block text-sm font-medium text-slate-700">Username</label>
		<input name="username" value="<?= html_escape($_POST['username'] ?? '') ?>" class="mt-1 w-full rounded-md border-slate-300 focus:border-brand-500 focus:ring-brand-500" required />
	</div>
	<div>
		<label class="block text-sm font-medium text-slate-700">Password</label>
		<input type="password" name="password" class="mt-1 w-full rounded-md border-slate-300 focus:border-brand-500 focus:ring-brand-500" required />
	</div>
	<div class="pt-2">
		<button class="inline-flex items-center rounded-md bg-brand-600 px-4 py-2 text-white hover:bg-brand-700">Login</button>
		<a class="ml-3 text-slate-600 hover:text-slate-900" href="<?= base_url('/register.php') ?>">Create account</a>
	</div>
</form>

<?php
render_card_end();
render_container_end();
render_footer();




