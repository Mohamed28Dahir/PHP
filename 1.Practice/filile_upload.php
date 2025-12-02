<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $file = $_FILES['file'];

    // Validate file upload
    if($file['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($file['name']);

        // Check if the upload directory exists, if not create it
        if(!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Move the uploaded file to the desired directory
        if(move_uploaded_file($file['tmp_name'], $uploadFile)) {
            echo "File uploaded successfully: " . htmlspecialchars($uploadFile);
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "File upload error: " . $file['error'];
    }
    

   
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>student resgistration</h1>
    <form action="" method="post" enctype="multipart/form-data"></form>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="email">Email:</label>   
    <input type="email" id="email" name="email" required><br>

    <label for="file">File:</label>
    <input type="file" id="file" name="file" required><br>
    <input type="submit" name="submit" value="Upload">
</form>

    
</body>
</html>