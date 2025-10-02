<?php

// -------- IF Statement --------
// Halkan waxa lagu tijaabinayaa laba variable oo kala ah $a iyo $b
$a = 3;
$b = 4;

if ($a > $b) // Haddii $a ka weyn yahay $b
    echo "$a is greater than $b";

if ($a < $b) // Haddii $a ka yar yahay $b
    echo "$a is less than $b";

echo "<br>";

if ($a >= $b) // Haddii $a ka weyn yahay ama u dhigmo $b
    echo "$a is greater than or equal to $b<br />";

if ($a <= $b) // Haddii $a ka yar yahay ama u dhigmo $b
    echo "$a is less than or equal to $b<br />";


// -------- IF ELSE Statement --------
// Halkan waxaa lagu hubinayaa darajada imtixaanka
$mark = 55;

if ($mark >= 50)  // Haddii darajadu ka weyn tahay ama u dhiganto 50
    echo "PASS";  // Waa guuleystay
else
    echo "FAIL";  // Waa ku dhacay

echo "<br>";

if ($mark >= 50) {
    echo "Your Grade is PASS"; // Halkan waxa lagu sheegayaa guul
}
else {
    echo "Your Grade is FAIL"; // Halkan waxa lagu sheegayaa guuldarro
}
echo "<br>";


// -------- IF ELSEIF Statement --------
// Waxaa lagu sameynayaa nidaam grade
$mark = 84;

if ($mark >= 90) 
    $grade = "A";
elseif ($mark >= 80)
    $grade = "B";
elseif ($mark >= 70)
    $grade = "C";
elseif ($mark >= 60)
    $grade = "D";
elseif ($mark >= 50)
    $grade = "E";
else
    $grade = "F";

echo "Your Grade is $grade"; // Waxaa lagu daabacayaa grade uu helay ardaygu
echo "<br>";


$marks = 87;
if ($marks >= 90) 
    echo "Excellent"; // Haddii 90+ waa heer fiican
else if ($marks >= 80) 
    echo "Very good"; // Haddii 80+ waa wanaagsan
else if ($marks >= 50)
    echo "minimal pass"; // Haddii 50+ waa ugu yaraan gudub
else
    echo "not pass"; // Haddii ka hooseeya 50 waa dhacay

echo "<br>";


// -------- IF ELSEIF Example kale --------
// Halkan waxaa lagu hubinayaa bisha si loo ogaado xilliga
$month = "February";

if ($month == "January")
    echo "It's Winter time!";
elseif ($month == "February")
    echo "It's Winter time!";
elseif ($month == "March")
    echo "It's Winter time!";
elseif ($month == "April")
    echo "It's Spring time!";
elseif ($month == "May")
    echo "It's Spring time!";
elseif ($month == "June")
    echo "It's Spring time!";
elseif ($month == "July")
    echo "It's Summer time!";
else 
    echo "Invalid Month";


// -------- SWITCH Statement --------
// Switch waa hab kale oo lagu sameeyo if-else badan oo fudud
$grade = "C";
switch ($grade) {
    case "A":
        echo "Your GPA is 4.0";
        break;
    case "B":
        echo "Your GPA is 3.0";
        break;
    case "C":
        echo "Your GPA is 2.0";
        break;
    case "D":
        echo "Your GPA is 1.0";
        break;
    default:
        echo "Your GPA is 0"; // Haddii aanu midna la jaanqaadin
}

echo "<br>";


$grade = 'A';
switch ($grade)
{
case 'A':
    echo "The grade point is 4.0.";
    break;
case 'B':
    echo "The grade point is 3.0.";
    break;
case 'C':
    echo "The grade point is 2.0.";
    break;
case 'D':
    echo "The grade point is 1.0.";
    break;
case 'F':
    echo "The grade point is 0.0.";
    break;
default:
    echo "The grade is invalid.";
}


// -------- SWITCH for Months --------
$month = "March";
echo "<br>";
switch ($month) {
    case "January":
    case "February":
    case "March":
        echo "It's Winter time!"; // Bisha waa xilliga jiilaalka
        break;
    case "April":
    case "May":
    case "June":
        echo "It's Spring time!"; // Waa guga
        break;
    case "July":
    case "August":
    case "September":
        echo "It's Summer time!"; // Waa xagaaga
        break;
    case "October":
    case "November":
    case "December":
        echo "It's Autumn time!"; // Waa dayrta
        break;
    default:
        echo "Invalid Month";
        break;
}

echo "<br>";


// -------- Example kale oo Switch --------
$page = "News";

switch ($page)
{
case "Home":
    echo "You selected Home";
    break;
case "About":
    echo "You selected About";
    break;
case "News":
    echo "You selected News";
    break;
case "Login":
    echo "You selected Login";
    break;
case "Contacts":
    echo "You selected Contacts";
    break;
}
echo "<br>";


// Qaab kale oo switch la qoro
switch ($page):
case "Home":
    echo "You selected Home";
    break;
case "About":
    echo "You selected About";
    break;
case "News":
    echo "You selected News";
    break;
case "Login":
    echo "You selected Login";
    break;
case "Contacts":
    echo "You selected Contacts";
    break;
endswitch;


echo "<br>";


// -------- Example kale oo switch leh fall-through --------
$month = "May";

switch ($month) {
    case "January":
        echo "The Month is January<br>";
    case "February":
        echo "The Month is February<br>";
    case "March":
        echo "The Month is March <br>";
        echo "It's Winter";
        break;
    case "April":
        echo "The Month is April<br>";
    case "May":
        echo "The Month is May<br>";
    case "June":
        echo "The Month is June<br>";
        echo "It's Spring";
        break;
    default:
        echo "It's invalid month";    
}


// -------- Switch iyadoo lagu qaybiyo tiro --------
$mark = 5;
echo "<br>";

switch ((int)($mark / 10)) {
    case 9:
        echo "Your grade is A";
        break;
    case 8:
        echo "Your grade is B";
        break;
    case 7:
        echo "Your grade is C";
        break;
    case 6:
        echo "Your grade is D";
        break;
    case 5:
        echo "Your grade is E";
        break;
    case 4:
    case 3:
    case 2:
    case 1:
    case 0:
        echo "Your grade is F"; // Waxaa la siinayaa F haddii ay ka hooseyso 50
        break;
}

echo "<br>";


// -------- Ternary Operator --------
// Hab gaaban oo loo isticmaalo if-else
echo $mark >= 50 ? "PASS" : "FAIL";
echo "<br>";

$grade = ($mark >= 50) ? "PASS" : "FAIL";
echo "Your Grade is $grade";
echo "<br>";

$fuel = 5;
// Halkan waxaa lagu hubinayaa shidaalka
echo $fuel <= 1 ? "Fill tank now" : "There's enough fuel";

?>
