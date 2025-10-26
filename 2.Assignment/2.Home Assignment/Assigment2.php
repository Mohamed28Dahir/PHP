<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>PHP Assignment - Arrays</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f5f8;
      padding: 40px;
      color: #333;
    }
    h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #0078D4;
    }
    table.info {
      margin: 0 auto 40px auto;
      border-collapse: collapse;
      background: white;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      border-radius: 10px;
      overflow: hidden;
      width: 60%;
    }
    table.info th, table.info td {
      padding: 12px 15px;
      border: 1px solid #ddd;
      text-align: left;
    }
    table.info th {
      background: #0078D4;
      color: white;
      width: 30%;
    }
    .question {
      background: white;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      margin-bottom: 15px;
      overflow: hidden;
    }
    .question button {
      background: #0078D4;
      color: white;
      border: none;
      width: 100%;
      text-align: left;
      padding: 15px;
      font-size: 18px;
      cursor: pointer;
    }
    .question button:hover {
      background: #005ea2;
    }
    .content {
      display: none;
      padding: 15px;
      background: #fafafa;
    }
    pre {
      background: #eee;
      padding: 10px;
      border-radius: 6px;
      overflow-x: auto;
    }
    .output {
      background: #fff;
      border-left: 4px solid #0078D4;
      padding: 10px;
      margin-top: 10px;
      border-radius: 5px;
    }
  </style>
  <script>
    function toggleContent(id) {
      const content = document.getElementById(id);
      content.style.display = (content.style.display === "block") ? "none" : "block";
    }
  </script>
</head>
<body>
  <h1>PHP Assignment (Arrays)</h1>

  <!-- STUDENT INFORMATION TABLE -->
  <table class="info">
    <tr><th>ID</th><td>C1220104</td></tr>
    <tr><th>Name</th><td>Mohamed Dahir Osman</td></tr>
    <tr><th>Class</th><td>C1220104</td></tr>
    <tr><th>Course</th><td>PHP</td></tr>
    <tr><th>Assignment</th><td>2</td></tr>
  </table>

  <!-- QUESTION 1 -->
  <div class="question">
    <button onclick="toggleContent('q1')">Question 1</button>
    <div id="q1" class="content">
      <pre>
&lt;?php
$nums = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];
echo "All elements: " . implode(", ", $nums) . "&lt;br&gt;";
echo "Total: " . array_sum($nums) . "&lt;br&gt;";

$even = array_filter($nums, fn($n) => $n % 2 == 0);
$odd = array_filter($nums, fn($n) => $n % 2 != 0);

echo "Even total: " . array_sum($even) . "&lt;br&gt;";
echo "Odd total: " . array_sum($odd) . "&lt;br&gt;";
echo "Min: " . min($nums) . " at positions: ";
foreach ($nums as $i => $n) if ($n == min($nums)) echo $i . " ";
echo "&lt;br&gt;Max: " . max($nums) . " at positions: ";
foreach ($nums as $i => $n) if ($n == max($nums)) echo $i . " ";
?&gt;
      </pre>
      <div class="output">
        <?php
          $nums = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];
          echo "All elements: " . implode(", ", $nums) . "<br>";
          echo "Total: " . array_sum($nums) . "<br>";
          $even = array_filter($nums, fn($n) => $n % 2 == 0);
          $odd = array_filter($nums, fn($n) => $n % 2 != 0);
          echo "Even total: " . array_sum($even) . "<br>";
          echo "Odd total: " . array_sum($odd) . "<br>";
          echo "Min: " . min($nums) . " at positions: ";
          foreach ($nums as $i => $n) if ($n == min($nums)) echo $i . " ";
          echo "<br>Max: " . max($nums) . " at positions: ";
          foreach ($nums as $i => $n) if ($n == max($nums)) echo $i . " ";
        ?>
      </div>
    </div>
  </div>

  <!-- QUESTION 2 -->
  <div class="question">
    <button onclick="toggleContent('q2')">Question 2</button>
    <div id="q2" class="content">
      <pre>
&lt;?php
$colors = [
  "Light" => ["Red" => "Light Red", "Green" => "Light Green", "Blue" => "Light Blue"],
  "Normal" => ["Red" => "Normal Red", "Green" => "Normal Green", "Blue" => "Normal Blue"],
  "Dark" => ["Red" => "Dark Red", "Green" => "Dark Green", "Blue" => "Dark Blue"]
];

echo "&lt;table border='1' cellpadding='5'&gt;";
echo "&lt;tr&gt;&lt;th&gt;&lt;/th&gt;&lt;th&gt;Red&lt;/th&gt;&lt;th&gt;Green&lt;/th&gt;&lt;th&gt;Blue&lt;/th&gt;&lt;/tr&gt;";
foreach ($colors as $shade => $values) {
  echo "&lt;tr&gt;&lt;th&gt;$shade&lt;/th&gt;";
  foreach ($values as $color) echo "&lt;td&gt;$color&lt;/td&gt;";
  echo "&lt;/tr&gt;";
}
echo "&lt;/table&gt;";
?&gt;
      </pre>
      <div class="output">
        <?php
        $colors = [
          "Light" => ["Red" => "Light Red", "Green" => "Light Green", "Blue" => "Light Blue"],
          "Normal" => ["Red" => "Normal Red", "Green" => "Normal Green", "Blue" => "Normal Blue"],
          "Dark" => ["Red" => "Dark Red", "Green" => "Dark Green", "Blue" => "Dark Blue"]
        ];
        echo "<table border='1' cellpadding='5'><tr><th></th><th>Red</th><th>Green</th><th>Blue</th></tr>";
        foreach ($colors as $shade => $values) {
          echo "<tr><th>$shade</th>";
          foreach ($values as $color) echo "<td>$color</td>";
          echo "</tr>";
        }
        echo "</table>";
        ?>
      </div>
    </div>
  </div>

  <!-- QUESTION 3 -->
  <div class="question">
    <button onclick="toggleContent('q3')">Question 3</button>
    <div id="q3" class="content">
      <pre>
&lt;?php
$matrix = [
  [2, -6, 8],
  [-6, 1, 6],
  [7, 8, -6]
];
$total = 0;
echo "&lt;table border='1' cellpadding='5'&gt;";
foreach ($matrix as $row) {
  echo "&lt;tr&gt;";
  foreach ($row as $val) {
    echo "&lt;td&gt;$val&lt;/td&gt;";
    $total += $val;
  }
  echo "&lt;/tr&gt;";
}
echo "&lt;/table&gt;";
echo "Total of all elements: $total";
?&gt;
      </pre>
      <div class="output">
        <?php
        $matrix = [
          [2, -6, 8],
          [-6, 1, 6],
          [7, 8, -6]
        ];
        $total = 0;
        echo "<table border='1' cellpadding='5'>";
        foreach ($matrix as $row) {
          echo "<tr>";
          foreach ($row as $val) {
            echo "<td>$val</td>";
            $total += $val;
          }
          echo "</tr>";
        }
        echo "</table>";
        echo "Total of all elements: $total";
        ?>
      </div>
    </div>
  </div>

  <!-- QUESTION 4 -->
  <div class="question">
    <button onclick="toggleContent('q4')">Question 4</button>
    <div id="q4" class="content">
      <pre>
&lt;?php
$students = [
  "CA221" => ["Name" => "Mohamed Ahmed Ali", "Phone" => "0648440403", "Address" => "Laba Dhagax, Wardhiigley"],
  "CA223" => ["Name" => "Ahmed Abdi Jama", "Phone" => "0647223201", "Address" => "Taleex, Hodan"],
  "CA224" => ["Name" => "Amina Nur Adan", "Phone" => "0646990276", "Address" => "Macmacaanka, Dharkeynley"]
];
echo "&lt;table border='1' cellpadding='5'&gt;&lt;tr&gt;&lt;th&gt;ID&lt;/th&gt;&lt;th&gt;Name&lt;/th&gt;&lt;th&gt;Phone&lt;/th&gt;&lt;th&gt;Address&lt;/th&gt;&lt;/tr&gt;";
foreach ($students as $id => $info) {
  echo "&lt;tr&gt;&lt;td&gt;$id&lt;/td&gt;&lt;td&gt;{$info['Name']}&lt;/td&gt;&lt;td&gt;{$info['Phone']}&lt;/td&gt;&lt;td&gt;{$info['Address']}&lt;/td&gt;&lt;/tr&gt;";
}
echo "&lt;/table&gt;";
?&gt;
      </pre>
      <div class="output">
        <?php
        $students = [
          "CA221" => ["Name" => "Mohamed Ahmed Ali", "Phone" => "0648440403", "Address" => "Laba Dhagax, Wardhiigley"],
          "CA223" => ["Name" => "Ahmed Abdi Jama", "Phone" => "0647223201", "Address" => "Taleex, Hodan"],
          "CA224" => ["Name" => "Amina Nur Adan", "Phone" => "0646990276", "Address" => "Macmacaanka, Dharkeynley"]
        ];
        echo "<table border='1' cellpadding='5'><tr><th>ID</th><th>Name</th><th>Phone</th><th>Address</th></tr>";
        foreach ($students as $id => $info) {
          echo "<tr><td>$id</td><td>{$info['Name']}</td><td>{$info['Phone']}</td><td>{$info['Address']}</td></tr>";
        }
        echo "</table>";
        ?>
      </div>
    </div>
  </div>

  <!-- QUESTION 5 -->
  <div class="question">
    <button onclick="toggleContent('q5')">Question 5</button>
    <div id="q5" class="content">
      <pre>
&lt;?php
$transcript = [
  "Semester 1" => [
    ["subject1", 9, 26, 10, 40, 85, "Pass"],
    ["subject2", 9, 26, 10, 40, 85, "Pass"],
    ["subject3", 9, 26, 10, 40, 85, "Pass"]
  ],
  "Semester 2" => [
    ["subject1", 9, 26, 10, 0, 45, "Fail"],
    ["subject2", 9, 26, 10, 40, 85, "Pass"],
    ["subject3", 9, 26, 10, 40, 85, "Pass"]
  ]
];
foreach ($transcript as $sem => $subjects) {
  echo "&lt;h4&gt;$sem&lt;/h4&gt;";
  echo "&lt;table border='1' cellpadding='5'&gt;&lt;tr&gt;&lt;th&gt;Course&lt;/th&gt;&lt;th&gt;CW1&lt;/th&gt;&lt;th&gt;MidTerm&lt;/th&gt;&lt;th&gt;CW2&lt;/th&gt;&lt;th&gt;Final&lt;/th&gt;&lt;th&gt;Total&lt;/th&gt;&lt;th&gt;Status&lt;/th&gt;&lt;/tr&gt;";
  foreach ($subjects as $sub) {
    echo "&lt;tr&gt;";
    foreach ($sub as $val) echo "&lt;td&gt;$val&lt;/td&gt;";
    echo "&lt;/tr&gt;";
  }
  echo "&lt;/table&gt;";
}
?&gt;
      </pre>
      <div class="output">
        <?php
        $transcript = [
          "Semester 1" => [
            ["subject1", 9, 26, 10, 40, 85, "Pass"],
            ["subject2", 9, 26, 10, 40, 85, "Pass"],
            ["subject3", 9, 26, 10, 40, 85, "Pass"]
          ],
          "Semester 2" => [
            ["subject1", 9, 26, 10, 0, 45, "Fail"],
            ["subject2", 9, 26, 10, 40, 85, "Pass"],
            ["subject3", 9, 26, 10, 40, 85, "Pass"]
          ]
        ];
        foreach ($transcript as $sem => $subjects) {
          echo "<h4>$sem</h4>";
          echo "<table border='1' cellpadding='5'><tr><th>Course</th><th>CW1</th><th>MidTerm</th><th>CW2</th><th>Final</th><th>Total</th><th>Status</th></tr>";
          foreach ($subjects as $sub) {
            echo "<tr>";
            foreach ($sub as $val) echo "<td>$val</td>";
            echo "</tr>";
          }
          echo "</table>";
        }
        ?>
      </div>
    </div>
  </div>
</body>
</html>
