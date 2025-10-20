<?php
//Multi-dimensional array
$students = array(
    array(
        "Name" => "Amina Yusuf",
        "Age" => 21,
        "Major" => "Business Administration"
    ),
    array(
        "Name" => "Hassan Mohamed",
        "Age" => 23,
        "Major" => "Engineering"
    ),
    array(
        "Name" => "Fatima Ali",
        "Age" => 20,
        "Major" => "Medicine"
    )
);

foreach ($students as $student) {
    echo "Name: " . $student["Name"] . "<br>";
    echo "Age: " . $student["Age"] . "<br>";
    echo "Major: " . $student["Major"] . "<br><br>";
}

// Array function
$Ages = array_column($students, 'Age');

echo "<br>";


echo "<table border='1'>
<tr>
    <th>Name</th>
    <th>Age</th>
    <th>Major</th>
</tr>";

foreach ($students as $student) {
    echo "<tr>
        <td>" . $student["Name"] . "</td>
        <td>" . $student["Age"] . "</td>
        <td>" . $student["Major"] . "</td>
    </tr>";
}

echo "</table>";

echo "<br>";

$numbers = array(10,5,8,3,2 ,6,7,4,9,1);
print_r($numbers);

sort($numbers);
echo"<br>";
print_r($numbers);

echo"<br>";

echo"Max" . Max($numbers);
echo"<br>";
echo"Min" . Min($numbers);

?> 