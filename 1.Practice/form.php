<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>

<h1>Contact Form</h1>

<form method="get" action="">

Name: <input type="text" name="fullname" /> <br><br>
Email: <input type="email" name="email" /> <br><br>
Phone: <input type="number" name="phone" > <br><br>
Gender: <input type="radio" name="gender" value="male" > Male
<input type="radio" name="gender" value="female"> Female <br><br>
Message: <textarea name="message" cols="30" rows="3"></textarea><br><br>

<input type="submit" name="submit" value="Send Message">
<input type="reset" value="Clear">

</form>

<h2>Submitted Data</h2>

<?php

// if (!empty($_POST["submit"])) {
// echo "Name: " . $_POST["fullname"] . "<br>";
// echo "Email: " . $_POST["email"] . "<br>";
// echo "Phone: " . $_POST["phone"] . "<br>";

// if (!empty($_POST["gender"]))
// echo "Gender: " . $_POST["gender"] . "<br>";

// echo "Message: " . $_POST["message"] . "<br>";
// }


if (!empty($_GET["submit"])) {

echo "Name: " . $_GET["fullname"] . "<br>";
echo "Email: " . $_GET["email"] . "<br>";
echo "Phone: " . $_GET["phone"] . "<br>";

if (!empty($_GET["gender"]))
echo "Gender: " . $_GET["gender"] . "<br>";

echo "Message: " . $_GET["message"] . "<br>";
}


?>
    
</body>
</html>