<?php

// -------- WHILE LOOP: Print numbers 1 to 15 --------
// $count = 1 ilaa $count <= 15, markasta wuu kordhinayaa
$count = 1;
while ($count <= 15) {
    echo "$count, "; // Daabac tirada hadda
    $count++;        // Kordhi tirada hal mar
}

echo "<br>";

// -------- DO WHILE LOOP: 12 Multiplication Table --------
$i = 1;
do {
    echo "$i * 12 = " . $i * 12 . "<br>"; // Daabac 12-jibaarka tirada $i
    $i++; // Kordhi tirada $i
} while ($i <= 12);

echo "<br>";

// -------- FOR LOOP: Factorial of 5! --------
$result = 1;
for ($n = 5; $n >= 1; $n--) {
    $result = $result * $n; // Isku dhufo tirada hadda si loo helo factorial
}

echo "The Factorial of 5! = " . $result;
echo "<br>";

// -------- DO WHILE: Print Factorial with Expression --------
$n = 5;
$result = 1;

do {
    $result = $result * $n; // Isku dhufo tirada hadda

    if ($n == 1){
        echo "$n"; // Haddii $n = 1, daabac $n kaliya oo jooji
        break;
    }
    else {
        echo "$n * "; // Daabac $n iyo calaamadda multiplication
    }   
    $n--;
} while ($n >= 1);

echo "<br>";
echo "The Factorial of 5! = " . $result;
echo "<br>";

// -------- WHILE LOOP with BREAK: Stop at 10 --------
$count = 1;
while ($count <= 15) {
    echo "$count, ";
    if ($count == 10) // Haddii $count = 10, jooji loop-ka
        break;
    $count++;
}

echo "<br>";

// -------- DO WHILE LOOP: Print Odd Numbers 1-15 --------
$count = 0;
do {
    $count++;
    if ($count % 2 == 0) { // Haddii $count lambar siman yahay, sii wad loop-ka (skip)
        continue;
    }
    echo "$count, "; // Daabac kaliya lambarada kakan
} while ($count <= 15);

echo "<br>";

// -------- NESTED LOOP: 3 Weeks and 7 Days --------
$week = 3;
$day = 7;

for ($i = 1; $i <= $week; $i++) {
    echo "Week " . $i . "<br>"; // Daabac week-ka

    for ($j = 1; $j <= $day; $j++) {
        echo "&nbsp; &nbsp; Day " . $j . "<br>"; // Daabac maalin kasta oo hoos timaada week
    }
}

echo "<br>";

// -------- TRIANGLE STARS: Print Pattern --------
$n = 5; // Tirada safafka xiddigaha

for ($i = 1; $i <= $n; $i++) {       // Loop ka shaqeeya safafka
    for ($j = 1; $j <= $i; $j++) {   // Loop ka shaqeeya xiddigaha saf kasta
        echo "*";                     // Daabac xiddig
    }
    echo "<br>";                      // Tag safka cusub
}

?>
