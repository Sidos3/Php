<?php
function greeting($smoine, $gender = "")
{
    if ($gender == 'Male') {
        return "Hello Mr $smoine";
    } elseif ($gender == 'Female') {
        return "Hello Miss $smoine";
    } else {
        return "Hello $smoine";
    }
}

// Write Function Content Here

// Needed Output
echo greeting("Osama", "Male") . "<br>"; // Hello Mr Osama
echo greeting("Eman", "Female") . "<br>"; // Hello Miss Eman
echo greeting("Sameh") . "<br>"; // Hello Sameh
echo '<br>';
echo '::::::::::######  Ex2  #############';
echo '<br>';
// Write Function Content Here
function get_arguments(...$arg)
{

    //   for ($i=0; $i <func_num_args() ; $i++) { 
    //     echo $arg[$i].'';
    //   }
    foreach ($arg as $all) {
        echo $all . ' ';
    }
}
echo get_arguments("Hello", "Elzero", "Web", "School") . "<br>"; // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP") . "<br>"; // I Love PHP

// Needed Output
// echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
// echo get_arguments("I", "Love", "PHP"); // I Love PHP
echo '<br>';
echo '::::::::::######  Ex3  #############';
echo '<br>';
// Write Function Content Here
function sum_all(...$number)
{
    $result = 0;
    for ($i = 0; $i < func_num_args(); $i++) {
        if ($number[$i] == 5) {
            continue;
        } else if ($number[$i] == 10) {
            $number[$i] += 10;
        }
        $result += $number[$i];
    }
    return $result;
}
// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10) . "<br>"; // 64
echo sum_all(5, 10, 5, 10) . "<br>"; // 40
echo '<br>';
echo '::::::::::######  Ex4  #############';
echo '<br>';

// Write Function Content Here
function multiply(...$numero)
{
    $result_of_operation = 1;
    for ($i = 0; $i < func_num_args(); $i++) {
        if (is_string($numero[$i])) {
            continue;
        } elseif (is_double($numero[$i])) {
            $numero[$i] = (int) $numero[$i];
            $result_of_operation *= $numero[$i];
        } else {
            $result_of_operation *= $numero[$i];
        }
    }
    return $result_of_operation;
}
// Needed Output
echo multiply(10, 20) . "<br>"; // 200
echo multiply("A", 10, 30) . "<br>"; // 300
echo multiply(100.5, 10, "B") . "<br>"; // 1000
echo '<br>';
echo '::::::::::######  Ex5  #############';
echo '<br>';
function check_status($a, $b, $c)
{

    if (is_string($a) && is_int($b) && is_bool($c) && $c = true) {
        echo  "Hello $a, Your Age Is $b, You Are Available For Hire";
    } else {
        echo "Hello $a, Your Age Is $b, You Are Not Available For Hire";
    }
}


// Needed Output
echo check_status("Osama", 38, true) . '<br>'; // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true) . '<br>'; // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama") . '<br>'; // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38) . '<br>'; // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"

echo '<br>';
echo '::::::::::######  Ex6  #############';
echo '<br>';
function calculate($num1, $num2, $operation = "")
{
    // Write Function Content Here

    switch ($operation) {
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 's':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            # code...
            $result = $num1 * $num2;
            break;
        case 'm':
            # code...
            $result = $num1 * $num2;
            break;
        case 'add':
            # code...
            $result = $num1 + $num2;
            break;
        case 'a':
            # code...
            $result = $num1 + $num2;
            break;
            // case '!empty()':
            //     # code...
            //     $result = $num1 + $num2;
            //     break;
        default:
            $result = $num1 + $num2;
            break;
    }
    return $result;
}

// Needed Output
echo calculate(10, 20) . "<br>"; // 30
echo calculate(10, 20, "a") . "<br>"; // 30
echo calculate(10, 20, "s") . "<br>"; // -10
echo calculate(10, 20, "subtract") . "<br>"; // -10
echo calculate(10, 20, "multiply") . "<br>"; // 200
echo calculate(10, 20, "m") . "<br>"; // 200

echo '<br>';
echo '::::::::::######  Ex7  #############';
echo '<br>';
function calculate_number(int $num_one, int $num_two): float
{
    return $num_one + $num_two;
}

echo calculate_number(20, 10) . '<br>'; // 30
echo gettype(calculate_number(20, 10)) . '<br>'; // Double
echo '<br>';
echo '::::::::::######  Ex8  #############';
echo '<br>';
$message = "Hello";
$$message =  fn ($name) => $message . " " . $name;

echo $Hello("Osama"); // Hello Osama

echo '<br>';
echo '::::::::::######  Ex9  #############';
echo '<br>';
// Write Function Content Here
$greet = function ($name) {
    return "Greetings $name";
};
$greet = fn ($name) => "greetngs $name";
// Needed Output
echo $greet("Osama"); // Greetings