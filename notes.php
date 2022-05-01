<?php
echo "Hello world! \n";

// Concatenation
$first_name = "Shahriar";
$last_name = "Rhythm";

$full_name = $first_name . " " . $last_name;
echo $full_name . "\n";

// PHP Variables
// Constant variables - define(name, value, true/false(true for case-insensitive))

// Data Types
var_dump($first_name);

// Arithmetic operators (+, -, *, **, /, %, ++, --)
$result = 2 + 2 - 2 * 2 ** 2 / 2 % 2;
echo $result . "\n";

++$result;
echo $result . "\n";

// Assignment operators
$a = 5;
$b = 4;
echo $a += $b;

echo "\n";

// Comparison operators

// Logical operators
$age = 20;

if ($age >= 30 xor $age >= 40) {
    echo "You are eligible";
} else {
    echo "You are not eligible";
}

echo "\n";

// If elseif else statement
$marks = 45;

if ($marks >= 80 && $marks <= 100) {
    echo "Marks: " . $marks . " " . "Grade: A+ " . "GPA: 4.00";
} elseif ($marks >= 70 && $marks < 80) {
    echo "Marks: " . $marks . " " . "Grade: A " . "GPA: 3.75";
} elseif ($marks >= 60 && $marks < 70) {
    echo "Marks: " . $marks . " " . "Grade: A- " . "GPA: 3.50";
} elseif ($marks >= 50 && $marks < 60) {
    echo "Marks: " . $marks . " " . "Grade: B " . "GPA: 3.00";
} elseif ($marks >= 40 && $marks < 50) {
    echo "Marks: " . $marks . " " . "Grade: C " . "GPA: 2.75";
} elseif ($marks >= 00 && $marks < 40) {
    echo "Marks: " . $marks . " " . "Grade: F " . "GPA: 0.00";
} else {
    echo "Please provide a valid marks";
}

echo "\n";

// Switch case
$weekday = 5;

switch ($weekday) {
    case 1:
        echo "Today is Monday";
        break;
    case 2:
        echo "Today is Tuesday";
        break;
    case 3:
        echo "Today is Wednesday";
        break;
    case 4:
        echo "Today is Thursday";
        break;
    case 5:
        echo "Today is Friday";
        break;
    case 6:
        echo "Today is Saturday";
        break;
    case 7:
        echo "Today is Sunday";
        break;

    default:
        echo "Please provide a valid weekday";
        break;
}

echo "\n";

// Conditional ternary operator ((Condition) ? True Statement : False Statement)
$x = 10;
echo ($x > 20) ? "Value of x is Larger" : "Value of x is Smaller";
echo "\n";

$y = "Value of x is " . ($x < 20 ? "Larger" : "Smaller");
echo $y;

echo "\n";

// String operator
$a = "Hello,";
$a .= " world!";

echo $a;
echo "\n";

// PHP loops
// While loop
// Do while loop
// For loop
// Nested loops
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j <= 5; $j++) {
        echo $i . " x " . $j . " = " . $i * $j . "\n";
    }
    echo "\n";
}

for ($row = 0; $row < 4; $row++) {
    for ($col = 0; $col <= $row; $col++) {
        echo " " . $col;
    }
    echo "\n";
}
// Foreach loop