<?php

// Waxay soo bandhigaysaa cinwaan weyn (heading 1)
echo "<h1>Welcome to PHP & MYSQL </h1>";

// Echo waa statement loo isticmaalo in wax lagu soo daabaco
echo ("This is an Echo Statement");
echo "<br>";
// Print sidoo kale waa statement la mid ah echo
print ("This is Print Statement <br>");

// Echo oo aan la isticmaalin qawaaniinta (parentheses)
echo "Hello World - This is without parentheses";

echo"<br>";
// Echo waxaa lagu daabici karaa dhowr string hal mar
echo"Hello ", "World";

// print kuma shaqayn karo dhowr string isku mar (waa error haddii la furo)
 // print "Hello ", "World";

echo"<br>";
// Waxaa la abuuray laba variable
$x = 5;
$y = 4;

// Ternary Operator (condition ? true : false)
// Haddii $x ka yar yahay $y → daabac "is less than"
// Haddii kale → daabac "is greater than"
($x < $y) ? print "$x is less than $y" : print "$x is greater than $y";

echo"<br>";
$a = 4;
$b = 5;
// Waxaa la sameeyay variable cusub oo isku darka $a iyo $b
$c = $a + $b;

// Daabacaad iyadoo lagu tusayo natiijada variables
echo "Total $a and $b = $c";
echo"<br>";
// Marka lagu qoro single quotes ' ' variables ma shaqeeyaan
echo 'Total $a and $b = $c';


// Waxaa la sameeyay variables kala duwan oo muujinaya noocyada (datatypes)
$student_number = 101;      // Integer
$student_name = "Ali Abdi"; // String
$weight = 60.5;             // Float
$single = true;             // Boolean

echo"<br>";

// Daabaca xogta ardayga
echo "Student No: ", $student_number;
echo"<br>";
echo "Student Name: ", $student_name;
echo"<br>";
echo "Student Weight: ", $weight;
echo"<br>";
echo "Is Single: ", $single;

echo"<br>";

// var_dump → waxay muujisaa datatype iyo qiimaha variable
echo "DataType Student No: ", var_dump($student_number);
echo"<br>";
echo "DataType Student Name: ", var_dump($student_name);
echo"<br>";
echo "DataType Student Weight: ", var_dump($weight);
echo"<br>";
echo "DataType Is Single: ", var_dump($single);


/* 
Tani waa multiline comment
waxna ma shaqaynayso oo ma soo bixi doonto browser-ka
*/

echo"<br>";
// Tani waa single-line comment
echo 'Total of $a and $b = $c'; // Faallo ku jirta isla xariiqda

?>
