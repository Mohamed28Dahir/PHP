<?php
// Chapter 2 – PHP Fundamentals Assignment

// 1. Display Hello World and Welcome
echo "Hello World!<br>";
echo "Welcome to PHP.<br><br>";

// 2. Print name, class, and today’s date
$name = "Your Name";
$class = "Your Class";
$date = date("Y-m-d");
echo "Name: $name<br>";
echo "Class: $class<br>";
echo "Today’s Date: $date<br><br>";

// 3. Arithmetic operations with variables
$a = 12;
$b = 8;
echo "a = $a, b = $b<br>";
echo "Sum: " . ($a + $b) . "<br>";
echo "Difference: " . ($a - $b) . "<br>";
echo "Product: " . ($a * $b) . "<br>";
echo "Division Result: " . ($a / $b) . "<br>";
echo "Modulus (Remainder): " . ($a % $b) . "<br><br>";

// 4. Single vs Double Quotes
$var = "PHP";
echo 'Single quotes: $var<br>';  // variable not parsed
echo "Double quotes: $var<br><br>"; // variable parsed

// 5. String length and word count
$str = "The quick brown fox jumps over the lazy dog.";
echo "String: $str<br>";
echo "Length of string: " . strlen($str) . "<br>";
echo "Number of words: " . str_word_count($str) . "<br><br>";

// 6. Constant PI and area of circle
define("PI", 3.14159);
$radius = 7;
$area = PI * $radius * $radius;
echo "Radius = $radius<br>";
echo "Area of Circle = $area<br><br>";

// 7. Logical operators (check if number > 10 and < 100)
$num = 55;
if ($num > 10 && $num < 100) {
    echo "$num is greater than 10 and less than 100.<br><br>";
} else {
    echo "$num is NOT in the range (10,100).<br><br>";
}

// 8. Increment and Decrement
$x = 5;
echo "Initial value of x: $x<br>";
echo "Post-increment (x++): " . $x++ . "<br>";
echo "After post-increment, x = $x<br>";
echo "Pre-increment (++x): " . ++$x . "<br>";
echo "Post-decrement (x--): " . $x-- . "<br>";
echo "After post-decrement, x = $x<br>";
echo "Pre-decrement (--x): " . --$x . "<br>";
?>
