<?php
declare(strict_types=1);
require_once __DIR__ . '/../includes/layout.php';
require_once __DIR__ . '/../includes/auth.php';

require_login();
start_session_if_needed();
$result = $_SESSION['result'] ?? null;

render_header('Result — ResultPro');
render_container_start('Your Result');
render_card_start();
?>

<?php if (!$result): ?>
<div class="text-slate-600">
	No result found. Please calculate first.
	<a class="ml-2 text-brand-600 underline" href="<?= base_url('/calculator.php') ?>">Go to calculator</a>
</div>
<?php else: ?>
	<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
		<div>
			<h2 class="text-xl font-semibold text-slate-900">Summary</h2>
			<dl class="mt-3 space-y-2">
				<div class="flex justify-between">
					<dt class="text-slate-600">Subjects taken</dt>
					<dd class="font-medium text-slate-900"><?= (int)$result['subjectsTaken'] ?></dd>
				</div>
				<div class="flex justify-between">
					<dt class="text-slate-600">Total marks</dt>
					<dd class="font-medium text-slate-900"><?= (int)$result['total'] ?></dd>
				</div>
				<div class="flex justify-between">
					<dt class="text-slate-600">Percentage</dt>
					<dd class="font-medium text-slate-900"><?= number_format((float)$result['percentage'], 2) ?>%</dd>
				</div>
				<div class="flex justify-between">
					<dt class="text-slate-600">Grade</dt>
					<dd class="font-medium text-slate-900"><?= htmlspecialchars((string)$result['grade']) ?></dd>
				</div>
				<div class="flex justify-between">
					<dt class="text-slate-600">Status</dt>
					<dd class="font-semibold <?= $result['pass'] ? 'text-green-700' : 'text-red-700' ?>"><?= $result['pass'] ? 'PASS' : 'FAIL' ?></dd>
				</div>
			</dl>
			<div class="mt-6">
				<a href="<?= base_url('/calculator.php') ?>" class="inline-flex items-center rounded-md bg-brand-600 px-4 py-2 text-white hover:bg-brand-700">Recalculate</a>
			</div>
		</div>
		<div>
			<h2 class="text-xl font-semibold text-slate-900">Marks</h2>
			<div class="mt-3 grid grid-cols-2 gap-3">
				<?php for ($i = 1; $i <= 7; $i++): $m = $result['marks'][$i] ?? null; ?>
					<div class="rounded-md border p-3 text-sm">
						<div class="text-slate-600">Subject <?= $i ?></div>
						<div class="mt-1 font-medium text-slate-900"><?= $m === null ? '-' : (int)$m ?></div>
					</div>
				<?php endfor; ?>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php
render_card_end();
render_container_end();
render_footer();




