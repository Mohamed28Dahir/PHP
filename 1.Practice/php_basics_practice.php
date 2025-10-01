<?php

// Waxaa la sameeyay variable $name oo magaca ku jira
$name = "Mohamed Dahir Osman";
// Waxaa la sameeyay variable $age oo da’da lagu keydiyay
$age = 22;

// Labadan isku mid bay yihiin laakiin farqi ayaa jira
// Marka aad isticmaasho " " (double quotes) variables waa la aqoonsadaa
$info = "Hi, My name is $name, I am $age years old";
// Marka aad isticmaasho ' ' (single quotes) variables ma shaqeeyaan
$information = 'Hi, My name is $name, I am $age years old';

// Waxaa la daabacayaa natiijada
echo $info . "<br>";
echo $information . "<br>";


// -------- String Functions --------
$message = "Good Morning";
// Waxay soo qaadaysaa xarafka taagan booska 5 (0 ka bilaabanayo) → "M"
echo "The position of 5 is: " . $message[5] . "<br>";
// strpos waxay hubisaa booska uu ku jiro xaraf ama eray
echo "Check whether the word M contains \"$message\": " . strpos($message, "M");
echo "<br>";
// Haddii "W" laga helo fariinta waa run, haddii kale waa been
echo strpos($message, "W") ? "It's Found" : "Not Found";
echo "<br>";

// strlen waxay tirisaa inta characters ah ee ku jirta fariinta
$count = strlen($message);
echo "This message \"$message\" contain $count characters <br>";

// str_word_count waxay tirisaa inta eray ee fariinta ku jirta
$message = "The quick brown fox jumps over the lazy dog";
$word_count = str_word_count($message);
echo "This message contains $word_count words <br>";

// str_replace waxay eray beddeltaa "dog" → "cat"
echo "Replace dog to cat: " . str_replace("dog", "cat", $message);
echo "<br>";

// Halkan waxay beddeleysaa Morning → Night
$message = "Good Morning";
echo str_replace("Morning", "Night", $message);

echo "<br>";

// Isku darka laba string (concatenation)
echo "Good" . " Morning";

echo "<br>";


// -------- Xisaabinta Aagga Goobaabka (Circle Area) --------
define("PI", 3.14); // Constant PI
$pi = "3.14"; // Variable caadi ah
$radius = 6;
// radius² * pi
$area = $pi * ($radius * $radius);
echo "The area of circle is ", $area;

echo "<br>";

// Tusaale tiro weyn
$num = 12345 * 67890;
echo $num;
echo "<br>";
// substr waxay soo saartaa xaraf (character) meel gaar ah → booska 3
echo substr($num, 3, 1);


echo "<h5>Arithmetic Operators </h5>";

$x = 5;
$y = 4;

// Wadarta
$result = $x + $y;
echo "The sum of $x and $y = ", $result;

echo "<br>";
// Kala duwanaanta
$result = $x - $y;
echo "The difference of $x and $y = ", $result;

echo "<br>";
// Isku dhufashada
$result = $x * $y;
echo "The product of $x and $y = ", $result;

echo "<br>";
// Qaybinta
$result = $x / $y;
echo "The division of $x and $y = ", $result;

echo "<br>";
// Modulus (hadhka ama inta soo hartay marka la qaybinayo)
$result = $x % $y;
echo "The Modolus of $x and $y = ", $result;


// -------- Operator Precedence (Mudnaanta xisaabta) --------
echo "<br>";
$result = 1 + 5 * 3 - 1 * (4/3);
echo "The result is ", $result;
echo "<br>";

// Isbarbardhig isku dhafan (Boolean expressions)
$result = 1 + 5 * 3 - 1 * (6/3) > 10 || 4 / 2 == 2 && !false;
echo "The result is ", $result ? 'True' : 'False';


// -------- Concatenation Operator --------
echo "<h5>Concatenation Operators </h5>";
$a = "Welcome ";
$b = "PHP & ";
$c = "Mysql";
echo $a . $b . $c, "<br>";

$greeting = "Hello, ";
$message = "Its nice to meet you!";
echo $greeting . $message;


// -------- Increment / Decrement --------
echo "<h5>Increment / Decrement Operators </h5>";
$x = 5;
// ++$x → marka hore wuxuu kordhiyaa, kadibna daabacaa
echo ++$x, " First increments then prints <br>";
echo $x, "<br>";
  
$x = 5;
// $x++ → marka hore wuu daabacaa, kadibna kordhiyaa
echo $x++, " First prints then increments <br>";
echo $x, "<br>";
  
$x = 5;
// --$x → marka hore waa dhimaa, kadibna waa daabacaa
echo --$x, " First decrements then prints <br>";
echo $x, "<br>";
  
$x = 5;
// $x-- → marka hore waa daabacaa, kadibna waa dhimaa
echo $x--, " First prints then decrements <br>";
echo $x;
echo "<br>";


// -------- Arithmetic Assignment --------
echo "<h5>Arithmetic Assignment Operators </h5>";
$x = 78;
// x+=1 → x = x+1
echo " x +1 value is : ",$x+=1,"";
// x-=1 → x = x-1
echo " x -1 value is : ",$x-=1,"";
// x/=1 → x = x/1
echo " x / 1 value is : ",$x/=1,"";
// x*=1 → x = x*1
echo " x * 1 value is : ",$x*=1,"";
// x%=1 → x = x%1
echo " x % 1 value is : ",$x%=1,"";

echo "<br>";


// -------- Comparison Operators --------
echo "<h5>Comparison Operators </h5>";
$x = 5;
$y = 4;

// == waa isbarbardhig, waxay hubisaa in ay siman yihiin
echo "Check whether X and Y is equal: " . ($x == $y) . "<br>"; 
// != waa kala duwanaansho, waxay hubisaa inaysan is la mid ahayn
echo "Check whether X and Y is not equal: " . ($x != $y) . "<br>"; 

?>
