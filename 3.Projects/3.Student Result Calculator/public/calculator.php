<?php
declare(strict_types=1);
require_once __DIR__ . '/../includes/layout.php';
require_once __DIR__ . '/../includes/auth.php';

require_login();
start_session_if_needed();

$subjectCount = 7;
$errors = [];
$marks = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	for ($i = 1; $i <= $subjectCount; $i++) {
		$val = $_POST['s' . $i] ?? '';
		$val = trim((string)$val);
		if ($val === '') {
			$marks[$i] = null; // empty fields are allowed; treated as not taken
			continue;
		}
		if (!is_numeric($val)) {
			$errors['s' . $i] = 'Enter a number between 0 and 100';
			continue;
		}
		$intVal = (int)$val;
		if ($intVal < 0 || $intVal > 100) {
			$errors['s' . $i] = 'Enter a number between 0 and 100';
		} else {
			$marks[$i] = $intVal;
		}
	}

	if (empty($errors)) {
		// Calculate results
		$validMarks = array_values(array_filter($marks, fn($m) => $m !== null));
		$subjectsTaken = count($validMarks);
		$total = array_sum($validMarks);
		$percentage = $subjectsTaken > 0 ? round(($total / ($subjectsTaken * 100)) * 100, 2) : 0.0;
		$failedSubjects = array_values(array_filter($validMarks, fn($m) => $m < 33));
		$pass = $subjectsTaken > 0 && count($failedSubjects) === 0;
		$grade = 'F';
		if ($pass) {
			if ($percentage >= 80) $grade = 'A+';
			elseif ($percentage >= 70) $grade = 'A';
			elseif ($percentage >= 60) $grade = 'A-';
			elseif ($percentage >= 50) $grade = 'B';
			elseif ($percentage >= 40) $grade = 'C';
			elseif ($percentage >= 33) $grade = 'D';
		}

		$_SESSION['result'] = [
			'marks' => $marks,
			'subjectsTaken' => $subjectsTaken,
			'total' => $total,
			'percentage' => $percentage,
			'grade' => $grade,
			'pass' => $pass,
		];

		header('Location: ' . base_url('/result.php'));
		exit;
	}
}

render_header('Calculator — ResultPro');
render_container_start('Enter your marks', 'Leave fields blank for subjects not taken.');
render_card_start();
?>

<form method="post" class="grid grid-cols-1 md:grid-cols-2 gap-4">
	<?php for ($i = 1; $i <= $subjectCount; $i++): ?>
		<div>
			<label class="block text-sm font-medium text-slate-700">Subject <?= $i ?> (0–100)</label>
			<input name="s<?= $i ?>" value="<?= html_escape($_POST['s' . $i] ?? '') ?>" class="mt-1 w-full rounded-md border-slate-300 focus:border-brand-500 focus:ring-brand-500" />
			<?php if (isset($errors['s' . $i])): ?>
			<p class="mt-1 text-sm text-red-600"><?= html_escape($errors['s' . $i]) ?></p>
			<?php endif; ?>
		</div>
	<?php endfor; ?>
	<div class="md:col-span-2 pt-2">
		<button class="inline-flex items-center rounded-md bg-brand-600 px-4 py-2 text-white hover:bg-brand-700">Calculate Result</button>
	</div>
</form>

<?php
render_card_end();
render_container_end();
render_footer();




