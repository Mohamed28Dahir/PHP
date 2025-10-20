<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chapter3</title>
</head>
<body>
    <?php
/*

Student ID: 
Name: Abdihakiin gedi mohamed
Class: CA224
Assignment: PHP Programs

*/

// ----------------------------------------
// 1. Check divisibility by 3, 5, both, or none
// ----------------------------------------
echo "<h3>1. Divisibility Check</h3>";
$number = 15;

if ($number % 3 == 0 && $number % 5 == 0) {
    echo "$number is divisible by both 3 and 5.<br>";
} elseif ($number % 3 == 0) {
    echo "$number is divisible by 3.<br>";
} elseif ($number % 5 == 0) {
    echo "$number is divisible by 5.<br>";
} else {
    echo "$number is not divisible by 3 or 5.<br>";
}

// ----------------------------------------
// 2. Prime factors using while loop
// ----------------------------------------
echo "<h3>2. Prime Factors</h3>";
$num = 42;
$i = 2;

echo "Prime factors of $num are: ";
while ($num > 1) {
    if ($num % $i == 0) {
        echo $i . " ";
        $num /= $i;
    } else {
        $i++;
    }
}
echo "<br>";

// ----------------------------------------
// 3. Numbers divisible by 5 from 1 to 50 using for loop
// ----------------------------------------
echo "<h3>3. Numbers Divisible by 5 (1–50)</h3>";
for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0) {
        echo $i . " ";
    }
}
echo "<br>";

// ----------------------------------------
// 4. Fibonacci series using while loop
// ----------------------------------------
echo "<h3>4. Fibonacci Series</h3>";
$a = 0;
$b = 1;
$count = 0;
$limit = 10; // number of terms

while ($count < $limit) {
    echo $a . " ";
    $next = $a + $b;
    $a = $b;
    $b = $next;
    $count++;
}
echo "<br>";

// ----------------------------------------
// 5. Prime or non-prime using do...while loop
// ----------------------------------------
echo "<h3>5. Prime or Non-prime</h3>";
$number = 17;
$isPrime = true;
$i = 2;

do {
    if ($number % $i == 0 && $i != $number) {
        $isPrime = false;
        break;
    }
    $i++;
} while ($i < $number);

if ($isPrime && $number > 1)
    echo "$number is a prime number.<br>";
else
    echo "$number is not a prime number.<br>";

// ----------------------------------------
// 6. Prime numbers from 60 to 2 using for and do...while loops
// ----------------------------------------
echo "<h3>6. Prime Numbers from 60 to 2</h3>";

for ($n = 60; $n >= 2; $n--) {
    $isPrime = true;
    $i = 2;
    do {
        if ($n % $i == 0 && $i != $n) {
            $isPrime = false;
            break;
        }
        $i++;
    } while ($i < $n);

    if ($isPrime)
        echo $n . " ";
}
?>

</body>
</html>