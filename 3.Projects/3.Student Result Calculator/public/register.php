<?php
declare(strict_types=1);
require_once __DIR__ . '/../includes/layout.php';
require_once __DIR__ . '/../includes/auth.php';

$errors = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$username = $_POST['username'] ?? '';
	$password = $_POST['password'] ?? '';
	$result = register_user($username, $password);
	if ($result['ok']) {
		$success = true;
	} else {
		$errors = $result['errors'] ?? [];
	}
}

render_header('Register — ResultPro');
render_container_start('Create your account');
render_card_start();
?>
<?php if ($success): ?>
<div class="mb-4 rounded-md bg-green-50 p-3 text-green-800 ring-1 ring-inset ring-green-200">
	Account created successfully. <a class="underline" href="<?= base_url('/login.php') ?>">Login now</a>.
</div>
<?php endif; ?>

<form method="post" class="space-y-4 max-w-md">
	<div>
		<label class="block text-sm font-medium text-slate-700">Username</label>
		<input name="username" value="<?= html_escape($_POST['username'] ?? '') ?>" class="mt-1 w-full rounded-md border-slate-300 focus:border-brand-500 focus:ring-brand-500" required />
		<?php if (isset($errors['username'])): ?>
		<p class="mt-1 text-sm text-red-600"><?= html_escape($errors['username']) ?></p>
		<?php endif; ?>
	</div>
	<div>
		<label class="block text-sm font-medium text-slate-700">Password</label>
		<input type="password" name="password" class="mt-1 w-full rounded-md border-slate-300 focus:border-brand-500 focus:ring-brand-500" required />
		<?php if (isset($errors['password'])): ?>
		<p class="mt-1 text-sm text-red-600"><?= html_escape($errors['password']) ?></p>
		<?php endif; ?>
	</div>
	<div class="pt-2">
		<button class="inline-flex items-center rounded-md bg-slate-900 px-4 py-2 text-white hover:bg-slate-800">Create account</button>
		<a class="ml-3 text-slate-600 hover:text-slate-900" href="<?= base_url('/login.php') ?>">Have an account? Login</a>
	</div>
</form>

<?php
render_card_end();
render_container_end();
render_footer();




