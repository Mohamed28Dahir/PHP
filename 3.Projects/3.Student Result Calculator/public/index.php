<?php
declare(strict_types=1);
require_once __DIR__ . '/../includes/layout.php';

render_header('Home — Student Result Calculator');
render_container_start('Welcome to ResultPro', 'Register or login to calculate your results.');
render_card_start();
?>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
	<div>
		<h2 class="text-xl font-semibold text-slate-900">About</h2>
		<p class="mt-2 text-slate-600 leading-7">
			Enter marks for up to seven subjects, calculate total, percentage, grade,
			and pass/fail instantly. Your session keeps results until you log out.
		</p>
		<div class="mt-4 flex gap-3">
			<a href="<?= base_url('/register.php') ?>" class="inline-flex items-center rounded-md bg-slate-900 px-4 py-2 text-white hover:bg-slate-800">Get Started</a>
			<a href="<?= base_url('/login.php') ?>" class="inline-flex items-center rounded-md bg-brand-600 px-4 py-2 text-white hover:bg-brand-700">Login</a>
		</div>
	</div>
	<div class="hidden md:block">
		<div class="rounded-lg border bg-gradient-to-br from-brand-50 to-white p-6">
			<ul class="list-disc list-inside text-slate-700 leading-7">
				<li>Secure registration and login</li>
				<li>Up to seven subjects</li>
				<li>Clean, responsive UI</li>
				<li>Instant calculations</li>
			</ul>
		</div>
	</div>
</div>
<?php
render_card_end();
render_container_end();
render_footer();




