<!DOCTYPE html>
<html>
<head>
    <title>PHP Assignment Mohammed Dahir Osman</title>
</head>
<body>


<!-- Student Information Table -->
<table border="1" cellpadding="6" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
    <tr>
        <td>C1220104</td>
        <td>Mohammed Dahir Osman</td>
    </tr>
</table>
<br>

<?php
echo "<h3>1. Greatest and Smallest of Three Numbers</h3>";
$a = 12; $b = 7; $c = 20;
$greatest = $a;
$smallest = $a;

if($b > $greatest) $greatest = $b;
if($c > $greatest) $greatest = $c;

if($b < $smallest) $smallest = $b;
if($c < $smallest) $smallest = $c;

echo "Numbers: $a, $b, $c<br>";
echo "Greatest: $greatest<br>";
echo "Smallest: $smallest<br><br>";


// Question 2
echo "<h3>2. Divisible by 3, 5, both, or none</h3>";
$num = 15;
if($num % 3 == 0 && $num % 5 == 0)
    echo "$num is divisible by both 3 and 5<br>";
elseif($num % 3 == 0)
    echo "$num is divisible by 3<br>";
elseif($num % 5 == 0)
    echo "$num is divisible by 5<br>";
else
    echo "$num is not divisible by 3 or 5<br><br>";


// Question 3
echo "<h3>3. Odd numbers from 2 to 20, and even numbers from 35 to 7</h3>";
echo "Odd numbers (2 to 20): ";
for($i = 2; $i <= 20; $i++){
    if($i % 2 != 0) echo "$i ";
}
echo "<br>Even numbers (35 to 7): ";
for($i = 35; $i >= 7; $i--){
    if($i % 2 == 0) echo "$i ";
}
echo "<br><br>";


// Question 4
echo "<h3>4. Numbers divisible by 2 and 5 from 50 to 2</h3>";
for($i = 50; $i >= 2; $i--){
    if($i % 2 == 0 && $i % 5 == 0) echo "$i ";
}
echo "<br><br>";


// Question 5
echo "<h3>5. Reverse a number (no strrev)</h3>";
$num = 12345;
$rev = 0;
$temp = $num;
while($temp > 0){
    $digit = $temp % 10;
    $rev = $rev * 10 + $digit;
    $temp = (int)($temp / 10);
}
echo "Number: $num<br>Reverse: $rev<br><br>";


// Question 6
echo "<h3>6. LCM of two numbers</h3>";
$a = 8; $b = 12;
$max = ($a > $b) ? $a : $b;
while(true){
    if($max % $a == 0 && $max % $b == 0){
        echo "LCM of $a and $b is $max<br><br>";
        break;
    }
    $max++;
}


// Question 7
echo "<h3>7. HCF of two numbers</h3>";
$a = 18; $b = 24;
for($i = 1; $i <= $a && $i <= $b; $i++){
    if($a % $i == 0 && $b % $i == 0)
        $hcf = $i;
}
echo "HCF of $a and $b is $hcf<br><br>";


// Question 8
echo "<h3>8. Multiplication Table (1 to 12)</h3>";
echo "<table border='1' cellpadding='4'>";
for($i = 1; $i <= 12; $i++){
    echo "<tr>";
    for($j = 1; $j <= 12; $j++){
        echo "<td>".$i * $j."</td>";
    }
    echo "</tr>";
}
echo "</table><br>";


// Question 9
echo "<h3>9. Hubi Number Hadu Yahay prime Number Iyo Haduu Duu Ahay prime Number</h3>";
$num = 17;
$isPrime = true;
if($num <= 1) $isPrime = false;
else{
    for($i = 2; $i <= $num/2; $i++){
        if($num % $i == 0){
            $isPrime = false;
            break;
        }
    }
}
if($isPrime)
    echo "$num Waa Prime Number<br><br>";
else
    echo "$num is not a Prime Number<br><br>";


// Question 10
echo "<h3>10. Prime Numbers Kujira 10 Ilaa 50</h3>";
for($num = 10; $num <= 50; $num++){
    $isPrime = true;
    if($num <= 1) $isPrime = false;
    for($i = 2; $i <= $num/2; $i++){
        if($num % $i == 0){
            $isPrime = false;
            break;
        }
    }
    if($isPrime) echo "$num ";
}
?>

</body>
</html>
