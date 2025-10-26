<?php
// Chapter 3 – Control Structures Assignment

echo "<h2>Conditional Statements</h2>";

// 1. Check even or odd
$num = 7;
if ($num % 2 == 0) {
    echo "$num is Even<br>";
} else {
    echo "$num is Odd<br>";
}

// 2. Grade based on marks
$marks = 85;
if ($marks >= 90) {
    echo "Marks: $marks → Excellent<br>";
} elseif ($marks >= 80) {
    echo "Marks: $marks → Very Good<br>";
} elseif ($marks >= 50) {
    echo "Marks: $marks → Pass<br>";
} else {
    echo "Marks: $marks → Fail<br>";
}

// 3. Switch for day of the week
$dayNum = 3;
switch ($dayNum) {
    case 1: echo "Monday<br>"; break;
    case 2: echo "Tuesday<br>"; break;
    case 3: echo "Wednesday<br>"; break;
    case 4: echo "Thursday<br>"; break;
    case 5: echo "Friday<br>"; break;
    case 6: echo "Saturday<br>"; break;
    case 7: echo "Sunday<br>"; break;
    default: echo "Invalid day number<br>";
}

echo "<h2>Loops</h2>";

// 4. While loop (1 to 20)
$i = 1;
echo "Numbers 1–20: ";
while ($i <= 20) {
    echo $i . " ";
    $i++;
}
echo "<br>";

// 5. Do...while factorial of 5
$n = 5;
$fact = 1;
$j = 1;
do {
    $fact *= $j;
    $j++;
} while ($j <= $n);
echo "Factorial of $n = $fact<br>";

// 6. For loop multiplication table of 12
echo "Multiplication Table of 12:<br>";
for ($k = 1; $k <= 10; $k++) {
    echo "12 x $k = " . (12 * $k) . "<br>";
}

// 7. For loop squares of 1–10
echo "Squares of numbers 1–10:<br>";
for ($m = 1; $m <= 10; $m++) {
    echo "$m^2 = " . ($m * $m) . "<br>";
}

echo "<h2>Break and Continue</h2>";

// 8. Stop loop at 10
echo "Numbers 1–15 (stop at 10): ";
for ($n = 1; $n <= 15; $n++) {
    if ($n == 10) break;
    echo $n . " ";
}
echo "<br>";

// 9. Skip even numbers
echo "Numbers 1–15 (skip evens): ";
for ($n = 1; $n <= 15; $n++) {
    if ($n % 2 == 0) continue;
    echo $n . " ";
}
echo "<br>";

echo "<h2>Nested Loops</h2>";

// 10. 5x5 square of stars
echo "5 x 5 Square of Stars:<br>";
for ($row = 1; $row <= 5; $row++) {
    for ($col = 1; $col <= 5; $col++) {
        echo "* ";
    }
    echo "<br>";
}

// 11. 12 x 12 multiplication table
echo "12 x 12 Multiplication Table:<br>";
echo "<table border='1' cellpadding='5'>";
for ($row = 1; $row <= 12; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 12; $col++) {
        echo "<td>" . ($row * $col) . "</td>";
    }
    echo "</tr>";
}
echo "</table><br>";

// 12. Triangle pattern
echo "Triangle Pattern:<br>";
for ($row = 1; $row <= 5; $row++) {
    for ($col = 1; $col <= $row; $col++) {
        echo "* ";
    }
    echo "<br>";
}

?>
