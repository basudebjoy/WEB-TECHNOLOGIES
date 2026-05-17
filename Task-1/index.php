<?php

// Superglobal Variable Input
$name = "";

if(isset($_POST['student_name']))
{
    $name = $_POST['student_name'];
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Web Tech Task</title>
</head>
<body>

<h2>Student Information System</h2>

<!-- Form -->
<form method="POST">
    Enter Student Name:
    <input type="text" name="student_name">
    <input type="submit" value="Submit">
</form>

<hr>

<?php

// Indexed Array
$marks = array(85, 45, 72, 90, 55);

// Display Marks using foreach loop
echo "<h3>Student Marks:</h3>";

foreach($marks as $mark)
{
    echo $mark . "<br>";
}

// Total Calculation
$total = 0;

foreach($marks as $mark)
{
    $total = $total + $mark;
}

// User Defined Function
function calculateAverage($total, $count)
{
    return $total / $count;
}

// Average
$average = calculateAverage($total, count($marks));

// Maximum and Minimum
$max = max($marks);
$min = min($marks);

// Pass and Fail Count
$pass = 0;
$fail = 0;

foreach($marks as $mark)
{
    if($mark >= 50)
    {
        $pass++;
    }
    else
    {
        $fail++;
    }
}

// Output
echo "<h3>Calculation:</h3>";

echo "Total Marks: " . $total . "<br>";
echo "Average Marks: " . $average . "<br>";
echo "Maximum Marks: " . $max . "<br>";
echo "Minimum Marks: " . $min . "<br>";

echo "<br>";

echo "Passed Students: " . $pass . "<br>";
echo "Failed Students: " . $fail . "<br>";

// Associative Array
$student = array(
    "Name" => "Rahim",
    "ID" => "23-12345-1",
    "CGPA" => 3.75
);

echo "<h3>Student Details:</h3>";

foreach($student as $key => $value)
{
    echo $key . " : " . $value . "<br>";
}

// String Operations
echo "<h3>String Operations:</h3>";

echo "Uppercase Name: " . strtoupper($name) . "<br>";

echo "Name Length: " . strlen($name) . "<br>";

// Built-in Array Function
sort($marks);

echo "<h3>Sorted Marks:</h3>";

foreach($marks as $mark)
{
    echo $mark . "<br>";
}

// Type Casting
$cgpa = "3.90";

$cgpaFloat = (float)$cgpa;

echo "<h3>Type Casting:</h3>";

echo "CGPA after Type Casting: " . $cgpaFloat . "<br>";

// Superglobal Output
echo "<h3>Input Student Name:</h3>";

echo $name;

?>

</body>
</html>