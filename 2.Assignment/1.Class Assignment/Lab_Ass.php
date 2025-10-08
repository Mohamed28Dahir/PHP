<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            /* justify-content: center; */
            /* padding-top: 40px; */
        }
        table {
            border-collapse: collapse;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
         
        td {
            width: 60px;
            height: 60px;
            border: 1px solid #e0e0e0;
            font-weight: 500;
            transition: background-color 0.2s ease;
        }
        td:hover {
            opacity: 0.8;
        }
        .blue {
            background-color: #00aeffff; /* soft green */
            color: #fff;
        }
        .yellow {
            background-color: #50f011ff; /* soft yellow */
            color: #000;
        }
        .GREEN {
            background-color: #ffc800ff; /* soft blue */
            color: #fff;
        }
        .normal {
            background-color: #fafafa;
            color: #333;
        }
        </style>
<body>
    
    <table>
     <?php
    $columns = 10;
    for ($i = 1; $i <= 100; $i++) {
        if (($i - 1) % $columns == 0) {
            echo "<tr>";
        }

        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "<td class='GREEN'>$i</td>";
        } elseif ($i % 3 == 0) {
            echo "<td class='blue'>$i</td>";
        } elseif ($i % 5 == 0) {
            echo "<td class='yellow'>$i</td>";
        } else {
            echo "<td class='normal'>$i</td>";
        }

        if ($i % $columns == 0) {
            echo "</tr>";
        }
    }
    ?>
    </table>
</body>
</html>