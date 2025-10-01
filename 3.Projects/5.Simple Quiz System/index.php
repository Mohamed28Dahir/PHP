<?php
// Quiz configuration: Somali questions

$questions = [
	[
		'type' => 'mcq',
		'id' => 'q1',
		'text' => '1. Caasimadda Soomaaliya waa?',
		'options' => [
			'a' => 'Hargeysa',
			'b' => 'Muqdisho',
			'c' => 'Kismaayo',
			'd' => 'Baydhabo',
		],
		'answer' => 'b',
		'explanation' => 'Muqdisho waa caasimadda Soomaaliya.'
	],
	[
		'type' => 'mcq',
		'id' => 'q2',
		'text' => '2. Luqadda rasmiga ah ee Soomaaliya waa?',
		'options' => [
			'a' => 'Carabi iyo Ingiriisi',
			'b' => 'Soomaali iyo Carabi',
			'c' => 'Soomaali iyo Faransiis',
			'd' => 'Soomaali oo kaliya',
		],
		'answer' => 'd',
		'explanation' => 'Luqadda rasmiga ah waa Soomaaliga; Carabigu waa luqad labaad/bar lagu barto.'
	],
	[
		'type' => 'mcq',
		'id' => 'q3',
		'text' => '3. Webiga ugu dheer Soomaaliya waa?',
		'options' => [
			'a' => 'Webiga Shabeelle',
			'b' => 'Webiga Jubba',
			'c' => 'Webiga Tana',
			'd' => 'Webiga Niilka',
		],
		'answer' => 'a',
		'explanation' => 'Webiga Shabeelle waa mid ka mid ah kuwa ugu dheer gudaha dalka.'
	],
	[
		'type' => 'mcq',
		'id' => 'q4',
		'text' => '4. Badda ku hareeraysan xeebta Soomaaliya waa?',
		'options' => [
			'a' => 'Badda Cas iyo Badweynta Hindiya',
			'b' => 'Badweynta Atlaantik',
			'c' => 'Badweynta Baasifig',
			'd' => 'Harada Victoria',
		],
		'answer' => 'a',
		'explanation' => 'Soomaaliya waxay leedahay xeeb dheer oo Badweynta Hindiya iyo Badda Cas.'
	],
	[
		'type' => 'mcq',
		'id' => 'q5',
		'text' => '5. Calanka Soomaaliya wuxuu leeyahay ... midab iyo ... xiddig?',
		'options' => [
			'a' => 'Buluug; hal xiddig cad',
			'b' => 'Cagaar; shan xiddig madow',
			'c' => 'Casaan; laba xiddig caddaan ah',
			'd' => 'Jaalle; xiddigo badan',
		],
		'answer' => 'a',
		'explanation' => 'Calanka Soomaaliya waa buluug oo leh hal xiddig cad oo shan gees leh.'
	],
	[
		'type' => 'mcq',
		'id' => 'q6',
		'text' => '6. Soomaaliya waxay ku taallaa qaybtee adduunka?',
		'options' => [
			'a' => 'Waqooyiga Ameerika',
			'b' => 'Galbeedka Yurub',
			'c' => 'Geeska Afrika',
			'd' => 'Koonfurta Aasiya',
		],
		'answer' => 'c',
		'explanation' => 'Soomaaliya waxay ku taallaa Geeska Afrika.'
	],
	[
		'type' => 'boolean',
		'id' => 'q7',
		'text' => '7. Shilin Soomaali waa lacagta rasmiga ah ee Soomaaliya.',
		'answer' => 'true',
		'explanation' => 'Haa, lacagta dalka waa Shilin Soomaaliyeed (SOS).'
	],
	[
		'type' => 'mcq',
		'id' => 'q8',
		'text' => '8. Gobolka ugu weyn dhulka ee Soomaaliya waa?',
		'options' => [
			'a' => 'Banaadir',
			'b' => 'Bari',
			'c' => 'Nugaal',
			'd' => 'Shabeellaha Hoose',
		],
		'answer' => 'b',
		'explanation' => 'Gobolka Bari ayaa ka mid ah kuwa ugu ballaaran dhul ahaan.'
	],
	[
		'type' => 'short',
		'id' => 'q9',
		'text' => '9. Qor magaca caasimadda Soomaaliya (hal eray).',
		'answer' => 'muqdisho',
		'aliases' => ['mogadishu'],
		'explanation' => 'Caasimadda waa Muqdisho (Mogadishu).'
	],
	[
		'type' => 'number',
		'id' => 'q10',
		'text' => '10. Qor tirada: 234',
		'answer' => 234,
		'explanation' => 'Jawaabta saxda ah waa 234 (tusaale su’aal tiro ah).'
	],
];

$submitted = ($_SERVER['REQUEST_METHOD'] === 'POST');
$responses = $submitted ? ($_POST['answers'] ?? []) : [];
$totalQuestions = count($questions);
$correctCount = 0;
$details = [];

if ($submitted) {
	foreach ($questions as $q) {
		$qid = $q['id'];
		$type = $q['type'] ?? 'mcq';
		$user = $responses[$qid] ?? null;
		$isCorrect = false;
		$correctDisplay = '';
		switch ($type) {
			case 'mcq':
				$isCorrect = ($user === $q['answer']);
				$correctDisplay = isset($q['options'][$q['answer']]) ? $q['answer'] : $q['answer'];
				break;
			case 'boolean':
				$expected = ($q['answer'] === true || $q['answer'] === 'true') ? 'true' : 'false';
				$userNorm = is_string($user) ? strtolower($user) : ($user ? 'true' : 'false');
				$isCorrect = ($userNorm === $expected);
				$correctDisplay = $expected === 'true' ? 'Run' : 'Been';
				break;
			case 'short':
				$norm = function ($s) {
					$s = is_string($s) ? $s : '';
					$s = strtolower(trim(preg_replace('/\s+/', ' ', $s)));
					return $s;
				};
				$expected = $norm($q['answer']);
				$userNorm = $norm($user);
				$aliases = isset($q['aliases']) && is_array($q['aliases']) ? array_map($norm, $q['aliases']) : [];
				$isCorrect = ($userNorm === $expected) || in_array($userNorm, $aliases, true);
				$correctDisplay = $q['answer'];
				break;
			case 'number':
				$expected = is_numeric($q['answer']) ? (0 + $q['answer']) : null;
				$userNum = is_numeric($user) ? (0 + $user) : null;
				$isCorrect = ($userNum !== null && $expected !== null && (string)$userNum === (string)$expected);
				$correctDisplay = (string)$q['answer'];
				break;
			default:
				$isCorrect = ($user === $q['answer']);
				$correctDisplay = (string)$q['answer'];
		}
		if ($isCorrect) { $correctCount++; }
		$details[$qid] = [
			'user' => $user,
			'correct' => $correctDisplay,
			'isCorrect' => $isCorrect,
			'explanation' => $q['explanation']
		];
	}
}

$passThresholdPercent = 60; // pass if >= 60%
$scorePercent = $totalQuestions > 0 ? round(($correctCount / $totalQuestions) * 100) : 0;
$isPass = $scorePercent >= $passThresholdPercent;
?>
<!DOCTYPE html>
<html lang="so">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Imtixaan Kooban - Soomaaliya</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/styles.css" />
	<meta name="description" content="Multiple Choice Quiz - Somali Questions" />
</head>
<body class="bg-slate-50 text-slate-800">
	<div class="min-h-screen flex flex-col">
		<header class="border-b border-slate-200 bg-white/80 backdrop-blur supports-[backdrop-filter]:bg-white/60">
			<div class="container mx-auto px-4 py-4 flex items-center justify-between">
				<div class="flex items-center gap-3">
					<div class="h-10 w-10 rounded-xl bg-blue-600/10 flex items-center justify-center">
						<span class="text-xl font-bold text-blue-700">Q</span>
					</div>
					<div>
						<h1 class="text-lg font-semibold tracking-tight">Imtixaan Kooban</h1>
						<p class="text-sm text-slate-500">Su’aalo ku saabsan Soomaaliya</p>
					</div>
				</div>
				<div class="hidden md:flex items-center gap-3">
					<span class="text-sm text-slate-500">PHP • Tailwind CSS</span>
				</div>
			</div>
		</header>

		<main class="flex-1">
			<div class="container mx-auto px-4 py-8 max-w-5xl">
				<div class="grid lg:grid-cols-3 gap-6">
					<section class="lg:col-span-2">
						<div class="rounded-2xl border border-slate-200 bg-white shadow-sm">
							<div class="px-6 py-5 border-b border-slate-100 flex items-center justify-between">
								<h2 class="text-base font-semibold">Su’aalaha</h2>
								<div class="text-sm text-slate-500">Wadar: <?php echo $totalQuestions; ?> su’aal</div>
							</div>
							<form method="post" class="p-6 space-y-8">
								<?php foreach ($questions as $index => $q): ?>
									<div class="space-y-3">
										<div class="flex items-start gap-3">
											<div class="h-8 w-8 rounded-lg bg-blue-600/10 text-blue-700 font-semibold flex items-center justify-center">
												<?php echo $index + 1; ?>
											</div>
											<p class="font-medium leading-relaxed"><?php echo htmlspecialchars($q['text']); ?></p>
										</div>
										<?php $type = $q['type'] ?? 'mcq'; ?>
										<?php if ($type === 'mcq'): ?>
										<div class="grid sm:grid-cols-2 gap-3">
											<?php foreach ($q['options'] as $key => $label): 
												$inputId = $q['id'] . '_' . $key;
												$checked = isset($responses[$q['id']]) && $responses[$q['id']] === $key;
											?>
											<label for="<?php echo $inputId; ?>" class="group relative cursor-pointer">
												<input type="radio" id="<?php echo $inputId; ?>" name="answers[<?php echo $q['id']; ?>]" value="<?php echo $key; ?>" class="peer sr-only" <?php echo $checked ? 'checked' : ''; ?> />
												<div class="rounded-xl border border-slate-200 bg-white px-4 py-3 shadow-sm transition-all peer-checked:border-blue-600 peer-checked:ring-4 peer-checked:ring-blue-600/10 hover:shadow-md">
													<div class="flex items-center gap-3">
														<div class="h-6 w-6 rounded-md border border-slate-300 flex items-center justify-center text-xs font-semibold text-slate-500 group-[.peer-checked+div]:border-blue-600 group-[.peer-checked+div]:text-blue-700"></div>
														<div class="text-sm font-medium text-slate-700"><?php echo htmlspecialchars($label); ?></div>
													</div>
												</div>
											</label>
											<?php endforeach; ?>
										</div>
										<?php elseif ($type === 'boolean'): ?>
										<div class="grid sm:grid-cols-2 gap-3">
											<?php foreach (['true' => 'Run', 'false' => 'Been'] as $key => $label): 
												$inputId = $q['id'] . '_' . $key;
												$checked = isset($responses[$q['id']]) && strtolower((string)$responses[$q['id']]) === $key;
											?>
											<label for="<?php echo $inputId; ?>" class="group relative cursor-pointer">
												<input type="radio" id="<?php echo $inputId; ?>" name="answers[<?php echo $q['id']; ?>]" value="<?php echo $key; ?>" class="peer sr-only" <?php echo $checked ? 'checked' : ''; ?> />
												<div class="rounded-xl border border-slate-200 bg-white px-4 py-3 shadow-sm transition-all peer-checked:border-blue-600 peer-checked:ring-4 peer-checked:ring-blue-600/10 hover:shadow-md">
													<div class="flex items-center gap-3">
														<div class="h-6 w-6 rounded-md border border-slate-300 flex items-center justify-center text-xs font-semibold text-slate-500 group-[.peer-checked+div]:border-blue-600 group-[.peer-checked+div]:text-blue-700"></div>
														<div class="text-sm font-medium text-slate-700"><?php echo htmlspecialchars($label); ?></div>
													</div>
												</div>
											</label>
											<?php endforeach; ?>
										</div>
										<?php elseif ($type === 'short'): ?>
										<div>
											<input type="text" name="answers[<?php echo $q['id']; ?>]" value="<?php echo isset($responses[$q['id']]) ? htmlspecialchars($responses[$q['id']]) : ''; ?>" class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 shadow-sm focus:outline-none focus:ring-4 focus:ring-blue-600/10 focus:border-blue-600" placeholder="Ku qor jawaabtaada..." />
										</div>
										<?php elseif ($type === 'number'): ?>
										<div>
											<input type="number" name="answers[<?php echo $q['id']; ?>]" value="<?php echo isset($responses[$q['id']]) ? htmlspecialchars($responses[$q['id']]) : ''; ?>" class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 shadow-sm focus:outline-none focus:ring-4 focus:ring-blue-600/10 focus:border-blue-600" placeholder="Ku qor tiro..." />
										</div>
										<?php endif; ?>
										<?php if ($submitted): 
											$d = $details[$q['id']];
											$isCorrect = $d['isCorrect'];
											$explanation = $d['explanation'];
										?>
										<div class="mt-2">
											<div class="rounded-lg px-4 py-2 text-sm <?php echo $isCorrect ? 'bg-emerald-50 text-emerald-700 border border-emerald-200' : 'bg-rose-50 text-rose-700 border border-rose-200'; ?>">
												<?php if ($isCorrect): ?>
													<strong>Jawaab sax ah!</strong>
												<?php else: ?>
													<strong>Jawaab khalad ah.</strong> Saxdu waa: <span class="font-semibold"><?php echo htmlspecialchars($d['correct']); ?></span>
												<?php endif; ?>
												<div class="mt-1 text-slate-600"><?php echo htmlspecialchars($explanation); ?></div>
											</div>
										</div>
										<?php endif; ?>
										<hr class="my-4 border-slate-100" />
									</div>
								<?php endforeach; ?>

								<div class="flex items-center justify-between">
									<a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="text-sm text-slate-500 hover:text-slate-700">Nadiifi xulashooyinka</a>
									<button type="submit" class="inline-flex items-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-white font-medium hover:bg-blue-700 active:bg-blue-800 focus:outline-none focus-visible:ring-4 focus-visible:ring-blue-600/30">
										<span>Gudbi Imtixaanka</span>
									</button>
								</div>
							</form>
						</div>
					</section>

					<aside class="lg:col-span-1">
						<div class="sticky top-6 space-y-6">
							<div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
								<h3 class="text-base font-semibold mb-4">Natiijo</h3>
								<div class="space-y-4">
									<div>
										<div class="flex items-center justify-between text-sm mb-2">
											<span class="text-slate-500">Sax</span>
											<span class="font-semibold"><?php echo $correctCount; ?> / <?php echo $totalQuestions; ?></span>
										</div>
										<div class="h-3 w-full overflow-hidden rounded-full bg-slate-100">
											<div class="h-full bg-blue-600" style="width: <?php echo $scorePercent; ?>%"></div>
										</div>
										<div class="mt-2 text-xs text-slate-500"><?php echo $scorePercent; ?>%</div>
									</div>

									<div class="rounded-xl border <?php echo $isPass ? 'border-emerald-200 bg-emerald-50 text-emerald-700' : 'border-rose-200 bg-rose-50 text-rose-700'; ?> px-4 py-3">
										<div class="text-sm font-semibold">
											<?php echo $isPass ? 'Waa lagu gudbay 🎉' : 'Waa la dhacay'; ?>
										</div>
										<div class="text-xs mt-1 text-slate-600">Xadka gudbista: <?php echo $passThresholdPercent; ?>%</div>
									</div>
								</div>
							</div>

							<div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
								<h3 class="text-base font-semibold mb-3">Tilmaamo</h3>
								<ul class="list-disc pl-5 text-sm text-slate-600 space-y-2">
									<li>Ka jawaab dhammaan su’aalaha ka hor intaadan gudbin.</li>
									<li>Natiijada ayaa si toos ah u muuqan doonta markaad gudbiso.</li>
									<li>Macluumaadka imtixaanka waa ujeeddo waxbarasho.</li>
								</ul>
							</div>
						</div>
					</aside>
				</div>
			</div>
		</main>

		<footer class="border-t border-slate-200 bg-white/70">
			<div class="container mx-auto px-4 py-6 text-center text-sm text-slate-500">
				<span>&copy; <?php echo date('Y'); ?> Imtixaan Kooban - Soomaaliya</span>
			</div>
		</footer>
	</div>
</body>
</html>


