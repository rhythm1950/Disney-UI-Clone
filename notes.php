<?php
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
echo "\n \n";

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
        echo $col . " ";
    }
    echo "\n";
}

echo "\n";
// Foreach loop

// Break and continue in loop
for ($i = 0; $i < 6; $i++) {
    if ($i == 3) {
        break;
    }
    echo $i . "\n";
}

echo "\n";

for ($i = 0; $i < 6; $i++) {
    if ($i == 3) {
        continue;
    }
    echo $i . "\n";
}

echo "\n";

// Goto statement
for ($i = 0; $i <= 5; $i++) {
    if ($i == 3) {
        echo "\n";
        goto abc;
    }
    echo $i . " ";
}
echo "Test";

abc:
echo "Jumped to abc from the loop";

echo "\n \n";

// PHP functions
function sum($first_number = 5, $second_number = 10)
{
    $total = $first_number + $second_number;
    return $total;
}

function avg($total)
{
    $average = $total / 3;
    echo $average;
}

$result = sum(15, 20);
avg($result);

echo "\n \n";


function price_addition($mobile_price, $laptop_price, $tv_price)
{
    $total_price = $mobile_price + $laptop_price + $tv_price;
    return $total_price;
}

function price_avg($total_price)
{
    $average_price = $total_price / 3;
    echo $average_price;
}

$grand_total = price_addition(8000, 12000, 20000);
price_avg($grand_total);

echo "\n \n";

// Function argument by reference
function testing($string)
{
    $string .= " and something extra.";
}

$str = "This is a string";
testing($str);
echo $str;

echo "\n";

function testing2(&$string)
{
    $string .= " and something extra.";
}

$str = "This is a string";
testing2($str);
echo $str;

echo "\n \n";

// PHP variable function
function wow()
{
    echo "Hello World!";
}

$func = "wow";
$func();

echo "\n";

$sayHello = function ($name) {
    echo "Hello " . $name;
};

$sayHello("Yahoo Baba");

echo "\n \n";

// PHP recursive function
function display($number)
{
    if ($number <= 5) {
        echo "$number \n";
        display($number + 1);
    }
}

display(1);

echo "\n";

function factorial($n)
{
    if ($n == 0) {
        return 1;
    } else {
        return ($n * factorial($n - 1));
    }
}

echo factorial(5);

echo "\n \n";

// Variable scope

// Array
$arr = array(10, 20, 30);
$arr2 = [5, "Rahim", true, 12.5];
$arr2[4] = "Karim";

print_r($arr);

echo "\n";

echo $arr2[0] . "\n";
echo $arr2[1] . "\n";
echo $arr2[2] . "\n";
echo $arr2[3] . "\n";
echo $arr2[4] . "\n";

echo "\n";

for ($i = 0; $i <= 4; $i++) {
    echo $arr2[$i] . "\n";
}

echo "\n";

// Associative array
$age = [
    "Khaled" => "26",
    "Hera" => 23,
    "Kabir" => 20.5
];

$age["Hera"] = 21;
echo $age["Khaled"] . "\n";
echo $age["Kabir"] . "\n";

echo "\n";

var_dump($age);

echo "\n";

// Foeach loop for array
$colors = ["red", "green", "blue"];

foreach ($colors as $value) {
    echo $value . "\n";
}

echo "\n";

$age2 = [
    "mahtab" => 17,
    "ragib"  => 14,
    "raiyan" => 12.5
];

foreach ($age2 as $key => $value) {
    echo $key . " = " . $value . "\n";
}

echo "\n";

// Muti-dimensional indexed array
$multi_arr = [
    [1, "Sabit", "Manager", 5000],
    [2, "Mahmud", "Salesman", 2000],
    [3, "Fahim", "Driver", 4000]
];

print_r($multi_arr);
echo "\n";

echo $multi_arr[1][2];
echo "\n \n";

for ($row = 0; $row < 3; $row++) {
    for ($col = 0; $col < 3; $col++) {
        echo $multi_arr[$row][$col] . " ";
    }
    echo "\n";
}

echo "\n";

foreach ($multi_arr as $v1) {
    foreach ($v1 as $v2) {
        echo $v2 . " ";
    }
    echo "\n";
}
echo "\n \n";

// Muti-dimensional indexed array
$exam_marks = [
    "Rezuan" => [
        "Phy" => 85,
        "Chem" => 78,
        "Bio" => 89,
    ],

    "Salman" => [
        "Phy" => 68,
        "Chem" => 73,
        "Bio" => 79,
    ],

    "Mansib" => [
        "Phy" => 62,
        "Chem" => 67,
        "Bio" => 92,
    ]
];

print_r($exam_marks);

echo "\n";

foreach ($exam_marks as $key => $value1) {
    echo $key . " ";
    foreach ($value1 as $value2) {
        echo $value2 . " ";
    }
    echo "\n";
}

echo "\n";

// Multi-dimensional array with list()
$arr3 = [
    [1, 2],
    [30, 40]
];

foreach ($arr3 as list($m, $n)) {
    echo $m . "\n" . $n . "\n";
}

echo "\n";

$multi_arr = [
    [1, "Sabit", "Manager", 5000],
    [2, "Mahmud", "Salesman", 2000],
    [3, "Fahim", "Driver", 4000]
];

foreach ($multi_arr as list($sl, $name, $post, $sal)) {
    echo "$sl $name $post $sal \n";
}
echo "\n";

$exam_marks2 = [
    [
        "Phy" => 85,
        "Chem" => 78,
        "Bio" => 89,
    ],

    [
        "Phy" => 68,
        "Chem" => 73,
        "Bio" => 79,
    ],

    [
        "Phy" => 62,
        "Chem" => 67,
        "Bio" => 92,
    ]
];

foreach ($exam_marks2 as list("Phy" => $Phy, "Chem" => $Chem, "Bio" => $Bio)) {
    echo "$Phy $Chem $Bio \n";
}

echo "\n";

// PHP array: count() & sizeof() - both of them are used for same purpose; array_count_values
$food = ["orange", "banana", "apple"];
echo count($food) . "\n";
echo sizeof($food);

echo "\n \n";

$food2 = [
    'fruits' => ["orange", "banana", "apple"],
    'veggie' => ["tomato", "carrot", "collard"]
];

echo count($food2) . "\n";
echo sizeof($food2) . "\n";

echo count($food2, 1) . "\n"; //default of 2nd parameter is 0

echo count($food2['fruits'], 1);

echo "\n \n";

$len = count($food);
for ($i = 0; $i < $len; $i++) {
    echo $food[$i] . "\n";
}

echo "\n";

$food3 = ["orange", "banana", "apple", "banana"];

print_r(array_count_values($food3));
echo "\n";

// PHP array: in_array & array_search function
$food = ["orange", "banana", "apple", 55];
if (in_array("55", $food, true)) {
    echo "Found it successfully";
} else {
    echo "Couldn't find it";
}

echo "\n";

echo array_search("apple", $food);
echo "\n";

$food4 = [
    ["orange", "banana", "apple"],
    ["tomato", "carrot", "collard"]
];

if (in_array(["orange", "banana", "apple"], $food4)) {
    echo "Found it successfully";
} else {
    echo "Couldn't find it";
}

echo "\n";

$food5 = [
    'fruits' => "orange",
    'veggie' => "tomato"
];

echo array_search("tomato", $food5);
echo "\n \n";

// array_replace() used with index and associative array & array_replace_recursive() used with multi-dimensional associative array

$food = ["orange", "banana", "apple", "grapes"];
$vegie = ["carrot", "pea"];
$colors = ["red", "green", "blue"];

$new_array = array_replace($food, $vegie, $colors);
print_r($new_array);

$food6 = ['a' => ["red"], 'b' => ["green", "pink"]];
$food7 = ['a' => ["yellow"], 'b' => ["black"]];

$new_arr2 = array_replace_recursive($food6, $food7);
print_r($new_arr2);

echo "\n";

// PHP array: array_pop() & array_push()
$colors = ["red", "green", "blue"];
array_pop($colors);
print_r($colors);

echo "\n";

array_push($colors, "orange", "purple");
print_r($colors);

echo "\n \n";

// PHP array: array_shift() & array_unshift()
$colors = ["red", "green", "blue"];
array_shift($colors);
print_r($colors);

echo "\n";

array_unshift($colors, "orange", "purple");
print_r($colors);

echo "\n";

// PHP array: array_merge(), array_merge_recursive() & array_combine() - used only with index array
$food = ["orange", "banana", "apple", "grapes"];
$vegie = ["carrot", "pea"];
$colors = ["red", "green", "blue"];

$new_array3 = array_merge($food, $vegie, $colors);
print_r($new_array3);

echo "\n";

$food6 = ['a' => ["red"], 'b' => ["green", "pink"]];
$food7 = ['b' => ["yellow"], 'e' => ["black"]];

$new_array4 = array_merge($food6, $food7);
print_r($new_array4);

echo "\n";

$new_arr5 = $food6 + $food7;
print_r($new_arr5);

echo "\n";

$new_array4 = array_merge_recursive($food6, $food7);
print_r($new_array4);

echo "\n";

$food6 = ['a' => ["red"], 'b' => ["green", "pink"]];
$food7 = ['b' => ["fruits" => ["orange", "banana", "apple"]], 'e' => ["black"]];

$new_array4 = array_merge_recursive($food6, $food7);
print_r($new_array4);

echo "\n";

$food = ["orange", "banana", "apple"];
$colors = ["red", "green", "blue"];

$new_array4 = array_combine($food, $colors);
print_r($new_array4);

echo "\n";

// array_slice(array, start, length, true)
$colors = ["red", "green", "blue"];

$new_arr =  array_slice($colors, 1, 2);
print_r($new_arr);
echo "\n";

$new_arr =  array_slice($colors, 1, 2, true);
print_r($new_arr);
echo "\n";

//array_splice(array, start, length, array-2)
$colors = ["red", "green", "blue", "purple"];
$food = ["orange", "banana"];

array_splice($colors, 2, count($colors), $food);
print_r($colors);
echo "\n";

array_splice($colors, 0, 0, $food);
print_r($colors);
echo "\n";

// key functions
$colors = ["14" => "red", "27" => "green", "32" => "blue", "49" => "purple"];

$new_arr = array_keys($colors);
print_r($new_arr);
echo "\n";

$new_arr = array_key_first($colors);
print_r($new_arr);
echo "\n";

$new_arr = array_key_last($colors);
print_r($new_arr);
echo "\n";

$new_arr = array_key_exists("14", $colors);
if ($new_arr) {
    echo "key exists!";
} else {
    echo "key doesn't exist!";
}

echo "\n \n";

// intersect functions
$colors2 = ['a' => "Red", 'b' => "green", 'c' => "blue"];
$colors3 = ['a' => "red", 'b' => "green", 'e' => "black"];

$new_arr = array_intersect($colors2, $colors3); // checks only the matching of values
print_r($new_arr);
echo "\n";

$new_arr2 = array_intersect_key($colors2, $colors3); // checks only the matching of keys
print_r($new_arr2);
echo "\n";

$new_arr3 = array_intersect_assoc($colors2, $colors3); // checks both the matching of keys & values
print_r($new_arr3);
echo "\n";

// diff functions
$colors2 = ['a' => "Red", 'b' => "green", 'c' => "blue"];
$colors3 = ['a' => "red", 'b' => "green", 'e' => "black"];

$new_arr = array_diff($colors2, $colors3); // checks only the matching of values
print_r($new_arr);
echo "\n";

$new_arr2 = array_diff_key($colors2, $colors3); // checks only the matching of keys
print_r($new_arr2);
echo "\n";

$new_arr3 = array_diff_assoc($colors2, $colors3); // checks both the matching of keys & values
print_r($new_arr3);
echo "\n";

// array_values & array_unique
$colors2 = ['a' => "Red", 'b' => "green", 'c' => "blue"];

$new_arr = array_values($colors2);
print_r($new_arr);
echo "\n";

$colors3 = ['a' => "Red", 'b' => "green", 'c' => "blue", 'd' => "Red"];

$new_arr2 = array_unique($colors3);
print_r($new_arr2);
echo "\n";

// array_column(array, value, key) & array_chunk(array, value, true)
$multi_arr = [
    [
        "id" => 1,
        "name" => "Sabit",
        "post" =>  "Manager",
        "salary" => 5000
    ],

    [
        "id" => 2,
        "name" => "Mahmud",
        "post" => "Salesman",
        "salary" => 2000
    ],

    [
        "id" => 3,
        "name" => "Fahim",
        "post" => "Driver",
        "salary" => 4000
    ]
];

$new_arr = array_column($multi_arr, "name", "post");
print_r($new_arr);
echo "\n";

$colors = ["red", "green", "blue", "purple", "yellow"];

$new_arr2 = array_chunk($colors, 2);
print_r($new_arr2);
echo "\n";

$colors3 = ['a' => "Red", 'b' => "green", 'c' => "blue", 'd' => "Red", 'e' => "black"];

$new_arr3 = array_chunk($colors3, 2, true);
print_r($new_arr3);
echo "\n";

// array_flip(array) & array_change_key_case(array, case)
$colors = ['a' => "Red", 'b' => "green", 'c' => "blue"];

$new_arr = array_flip($colors);
print_r($new_arr);
echo "\n";

$colors = ['A' => "Red", 'b' => "green", 'c' => "blue"];

$new_arr = array_change_key_case($colors, CASE_LOWER);
print_r($new_arr);
echo "\n";

// array_sum(array) & array_product(array)
$numbers = [10, 20, 30, 40, 50];
echo array_sum($numbers);
echo "\n";

$numbers = ["a" => 10, "b" => 20, "c" => 30, "d" => 40];
echo array_sum($numbers);
echo "\n";

$numbers2 = [10, 20, 30, 40, 50];
echo array_product($numbers2);
echo "\n";

$numbers2 = ["a" => 10, "b" => 20, "c" => 30, "d" => 40];
echo array_product($numbers2);
echo "\n";

// array_rand(array, number) & shuffle(array)
$numbers = [10, 20, 30, 40, 50];
$new_arr = array_rand($numbers, 2);
echo "\n";

echo $numbers[$new_arr[0]] . "\n";
echo $numbers[$new_arr[1]] . "\n";

$numbers2 = ["a" => 10, "b" => 20, "c" => 30, "d" => 40];
$new_arr2 = array_rand($numbers2, 2);
echo "\n";

echo $numbers2[$new_arr2[0]] . "\n";
echo $numbers2[$new_arr2[1]] . "\n";
echo "\n";

$numbers = [10, 20, 30, 40, 50];
shuffle($numbers);
print_r($numbers);
echo "\n";

$numbers2 = ["a" => 10, "b" => 20, "c" => 30, "d" => 40];
shuffle($numbers2);
print_r($numbers2);
echo "\n";

// array_fill(index, number, value) & array_fill_keys(array, value)
$arr = ["a", "b", "c", "d"];
$new_arr = array_fill_keys($arr, "Rhythm");
print_r($new_arr);
echo "\n";

$new_arr = array_fill(3, 5, "Rhythm");
print_r($new_arr);
echo "\n";

// array_walk(array, "function", parameter) - used in index and associative arrays & array_walk_recursive(array, "function", parameter) - used in multi-dimensional associative arrays
$colors = ['a' => "Red", 'b' => "green", 'c' => "blue", 'd' => "Red"];

function myFunction($value, $key, $param)
{
    echo $key . " " . $param . " " . $value . "\n";
}
array_walk($colors, "myFunction", "is a key of");
echo "\n";

$colors2 = ['d' => "orange", 'e' => "black"];
$colors = [$colors2, 'a' => "Red", 'b' => "green", 'c' => "blue"];

function myFunction2($value2, $key2, $param2)
{
    echo $key2 . " " . $param2 . " " . $value2 . "\n";
}
array_walk_recursive($colors, "myFunction2", "is a key of");
echo "\n";

// array_map(function, array)
$a = [1, 2, 3, 4, 5];

function square($n)
{
    return $n * $n;
}
$new_arr = array_map("square", $a);
print_r($new_arr);
echo "\n";

$a2 = [1, 2, 3];
$colors = ["Red", "green", "blue"];

function equal($n, $m)
{
    return [$n => $m];
}
$new_arr2 = array_map("equal", $a2, $colors);
print_r($new_arr2);
echo "\n";

$colors3 = ['a' => "Red", 'b' => "green", 'c' => "blue"];
function myFunction3($n)
{
    return strtoupper($n);
}
$new_arr3 = array_map("myFunction3", $colors3);
print_r($new_arr3);
echo "\n";

// array_reduce(array, function, initial(optional))
$colors = ["red", "green", "blue", "purple"];
function concat($n, $m)
{
    return $n . "-" . $m;
}
$new_array = array_reduce($colors, "concat");
print_r($new_array);
echo "\n";

$colors = ["red", "green", "blue", "purple"];
function concat2($n, $m)
{
    return $n . "-" . $m;
}
$new_array2 = array_reduce($colors, "concat2", "orange");
print_r($new_array2);
echo "\n";

$numbers = [1, 2, 3, 4, 5];
function multiply($n, $m)
{
    return $n * $m;
}
$new_array3 = array_reduce($numbers, "multiply", 1);
print_r($new_array3);
echo "\n";

// PHP array: sorting functions - sort, rsort, asort, arsort, ksort. krsort, natsort, natcasesort, array_multisort, array_reverse
$colors = ["red", "green", "blue", "purple"];
sort($colors); // ascending order
print_r($colors);
echo "\n";

$colors2 = ["red", "green", "blue", "purple"];
rsort($colors2); // descending order
print_r($colors2);
echo "\n";

$colors3 = ['a' => "red", 'b' => "green", 'c' => "blue"];
asort($colors3); // ascending order
print_r($colors3);
echo "\n";

$colors4 = ['a' => "red", 'b' => "green", 'c' => "blue"];
arsort($colors4); // descending order
print_r($colors4);
echo "\n";

$colors5 = ['a' => "red", 'b' => "blue", 'c' => "green"];
ksort($colors5); // ascending order
print_r($colors5);
echo "\n";

$colors6 = ['a' => "red", 'b' => "blue", 'c' => "green"];
krsort($colors6); // descending order
print_r($colors6);
echo "\n";

$array1 = ["img12.png", "img10.png", "img2.png", "img1.png"];
natsort($array1);
print_r($array1);
echo "\n";

$array2 = ["Img12.png", "Img10.png", "img2.png", "img1.png"];
natsort($array2);
print_r($array2);
echo "\n";

$array3 = ["Img12.png", "Img10.png", "img2.png", "img1.png"];
natcasesort($array3);
print_r($array3);
echo "\n";

$fruits = ["orange", "banana", "apple"];
$veggie = ["tomato", "carrot", "collard"];
array_multisort($fruits, $veggie);
print_r($fruits);
echo "\n";
print_r($veggie);
echo "\n";

$fruits2 = ["orange", "banana", "apple"];
$new_arr = array_reverse($fruits2);
print_r($new_arr);
echo "\n";

// PHP array: traversing functions - next, prev, end, each, pos, current, key, reset
$fruits = ["orange", "banana", "apple"];
echo "Current: " . current($fruits) . "\n";
echo "Key: " . key($fruits) . "\n";
echo "Pos: " . pos($fruits) . "\n";

next($fruits);
echo "Current: " . current($fruits) . "\n";

next($fruits);
echo "Current: " . current($fruits) . "\n";

prev($fruits);
echo "Current: " . current($fruits) . "\n";

end($fruits);
echo "Current: " . current($fruits) . "\n";
echo "Key: " . key($fruits) . "\n";

// print_r(each($fruits)); why showing error??? check it now!

reset($fruits);
echo "Current: " . current($fruits) . "\n";

echo "\n";

// PHP array: list() - used in index array and associative array (only) with Numeric Key
$fruits = ["orange", "banana", "apple"];
list($a, $b, $c) = $fruits;
echo "Value of a: " . $a . "\n";
echo "Value of b: " . $b . "\n";
echo "Value of c: " . $c . "\n";

echo "\n";

$colors = ["red", "green", "blue", "purple"];
list($d,, $f) = $colors;
echo "Value of d: " . $d . "\n";
echo "Value of f: " . $f . "\n";

echo "\n";

$fruits2 = [0 => "apple", 1 => "banana", 2 => "orange"];
list($x, $y, $z) = $fruits2;
echo "Value of x: " . $x . "\n";
echo "Value of y: " . $y . "\n";
echo "Value of z: " . $z . "\n";

echo "\n";

// PHP array: extract(array, extract_rules, prefix) & compact()
$a = "grapes";
$fruits = ["a" => "apple", "b" => "banana", "c" => "orange"];
extract($fruits, EXTR_PREFIX_SAME, "test");
echo "Value of a: " . $a . "\n";
echo "Value of a: " . $test_a . "\n";
echo "Value of b: " . $b . "\n";
echo "Value of c: " . $c . "\n";

echo "\n";

$first_name = "Yahoo";
$last_name = " Baba";
$age = "20";
$gender = "Male";
$country = "Bangladesh";

$extra = ['gender', 'country'];

$new_arr = compact('first_name', 'last_name', 'age', $extra);
print_r($new_arr);
echo "\n";

// PHP array: range(start, end, step)
$new_arr = range(0, 100, 10);
print_r($new_arr);
echo "\n";

$new_arr2 = range('h', 'a');
print_r($new_arr2);
echo "\n";

foreach (range('a', 'h') as $letter) {
    echo $letter . "\n";
}
