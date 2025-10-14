<?php

// Abuuritaanka array adigoo isticmaalaya function-ka array()
$fruits = array("Apple", "Orange", "Banana");

// Daabacitaanka dhammaan waxyaabaha ku jira array-ga fruits
print_r($fruits);
echo "<br>";

// Daabacitaanka walxaha array-ga mid mid iyadoo la isticmaalayo index
echo $fruits[0] . " " .  $fruits[1] . " " . $fruits[2];
echo "<br>";

// Muujin nooca iyo faahfaahinta array-ga fruits
var_dump($fruits);
echo "<br>";

// Abuuritaanka array iyadoo la isticmaalayo index manual ah (si gacanta ah)
$cities[0] = "Mogadishu";
$cities[1] = "Hargeisa";
$cities[2] = "Kismayo";
$cities[5] = "Bosaso";

// Daabacitaanka array-ga cities
print_r($cities);
echo "<br>";

// Daabacida walax gaar ah iyadoo la adeegsanayo index 5
echo "Index of 5: ", $cities[5];
echo "<br>";

// Abuuritaanka array aan lahayn index la cayimay (auto indexing)
$cars[] = 'Mecedes Benz';
$cars[] = 'Hilux';
$cars[] = 'BMW';
$cars[] = 'Toyoto';
$cars[] = 'Nissan';

// Daabacida xogta iyo nooca ee array-ga cars
var_dump($cars);
echo "<br>";

// Array leh qiimayaal kala nooc ah (string, int, float iwm.)
$student_info = array(
    "101",
    "Mohamed Abdi Ali",
    20,
    "single",
    161.5
);

// Muujinta xogta ardayda
var_dump($student_info);
print_r($student_info);
echo "<br>";
echo "<br>";

// Daabacida array fruits iyadoo la isticmaalayo for loop
for ($i = 0; $i < count($fruits); $i++) {
    echo "$fruits[$i], ";
}

echo "<br>";

// Daabacida array cars iyadoo la isticmaalayo foreach loop
foreach ($cars as $car) {
    echo "$car, ";
}

echo "<br>";

// Daabacida xogta ardayda iyadoo la isticmaalayo foreach
foreach ($student_info as $value) {
    echo "$value <br>";
}

echo "<br>";

// Xisaabinta wadarta (sum) ee walxaha ku jira array numbers
$numbers = array(26, 11, 13, -4, 14, 17, 5, 52, 7, 9, 21, 32, 2, 4, 5);

$total = 0;
foreach ($numbers as $n) {
    $total += $n;
}

echo "The Total numbers is ", $total;
echo "<br>";

// Abuuritaanka array cusub oo lagu darayo laba array oo hore
$array1 = array(1, 2, 3, 4, 5);
$array2 = array(6, 7, 8, 9, 10);

// Loop lagu darayo walxaha labada array
for ($i = 0; $i < count($array1); $i++)
    $array3[$i] = $array1[$i] + $array2[$i];

// Daabacida array cusub
echo "Array elements are:<br>";
foreach ($array3 as $item)
    echo ("$item, ");

echo "<br>";
echo "<br>";

// Abuuritaanka associative array (key => value)
$student_info = array(
    "id" => 101,
    "name" => "Mohamed Abdi Ali",
    "age" => 20,
    "address" => "Hodan District",
    "status" => "single",
    "weight" => 161.5
);

// Daabacida associative array-ga
print_r($student_info);
echo "<br>";

// Daabacida qiimaha (values) keliya
foreach ($student_info as $value) {
    echo "$value, ";
}

echo "<br>";

// Daabacida key iyo value labadaba
foreach ($student_info as $key => $value) {
    echo "$key : $value <br>";
}

?>
