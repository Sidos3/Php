<?php

// function webmull()
// {
//     static $php_count = 0;
//     ++$php_count;
//     echo $php_count;
//     if ($php_count < 10) {
//         webmull();
//     } --$php_count;
// }

// webmull();
// echo '<hr>';
// $php_var = 'webmull';
// echo " the letter $php_var ";
// echo ' the letter '.$php_var;
// echo '<hr>';
// $webmull = '0';
// if (empty($webmull)) {
//     echo 'empty';
// } else {
//     echo 'not empty';
// }
// echo '<hr>';
// $web = 'web';
// $mull = 'mull';
// echo isset($webmull) ? $web.$mull.$webmull : ($webmull = 'webmull').'php';

// A static variable exists only in a local function scope,
//  but it does not lose its value when program execution leaves this scope.
// So every recursive call of webmull() $php_count increment till it is less than 10
// $str1 = 'apple';
// $str2 = 'orange';

// // Equality check (case-insensitive)
// if ($str1 == $str2) {
//     echo 'Equal';
// } else {
//     echo 'Not equal';
// }

// // Identity check (case-sensitive)
// if ($str1 === $str2) {
//     echo 'Identical';
// } else {
//     echo 'Not identical';
// }

/*
  Operators
  - Used To Perform Operations On Values.

  Array Operators
  - Deal With Arrays

  +     => Union
  ==    => Equal => Same Key And Value
  !=    => Not Equal
  <>    => Not Equal
  ===   => Identical => Same Key And Value, Same Order, Same Type
  !==   => Not Identical
*/

// $arr1 = [1 => 'A', 2 => 'B'];
// $arr2 = [3 => 'C', 4 => 'D'];
// $arr3 = $arr1 + $arr2;

// echo '<pre>';
// print_r($arr1 + $arr2);
// print_r($arr3);
// echo '</pre>';

// $arr4 = [1 => '10', 2 => '20'];
// $arr5 = [2 => 20, 1 => 10];

// var_dump($arr4 == $arr5); // True
// echo '<br>';
// var_dump($arr4 != $arr5); // False
// echo '<br>';
// var_dump($arr4 != $arr5); // False
// echo '<br>';

// $arr6 = [1 => 100, 2 => 200];
// $arr7 = [1 => 100, 2 => 200];

// var_dump($arr6 === $arr7); // Give Me True

// Exemple d'utilisation de l'opérateur ternaire avec elseif

// Exemple plus simple d'utilisation d'une structure de contrôle imbriquée avec l'opérateur ternaire

// $score = 80;

// Utilisation d'une structure de contrôle imbriquée avec l'opérateur ternaire pour déterminer le résultat
// $result = ($score >= 60) ? "welcom" . ($score >= 80 ? "Excellent" : "Passable") : "Échec";
// if ($score >= 60) {
//   echo"welcom";
//   if ($score >= 70) {
//     $result = "passable";
//   }
//   if ($score >= 80) {
//     $result = "excellent";
//   }
// } else {
//   $result = "Echec";
// }
// echo "Résultat : $result";


/*
    Function
    - Default Parameter Value
    --- Using
    --- Test Data
    --- Skip Arguments
  */

// function get_data($country = "Private Country", $name = "Private", $age = "Private", $address = "Private Address") {
//   // if ($address === "") {
//   //   $address = "Private Address";
//   // }
//   $line_one = "Your Country Is $country And Your Name Is $name <br>";
//   $line_two = "Your Age Is $age And You Live In $address";
//   return $line_one . $line_two;
// }

// echo get_data(name: "Sidahmed");
// $say_hi = fn ($samoin) => "Hello $samoin";

// echo $say_hi("sidahmed");


/*
    Function
    - Variable Arguments List
    --- func_num_args()
    --- func_get_arg(index)
    --- func_get_args()

    Spread Syntax In JS
  */

// function calculate(...$nums) {
// echo "Number Of Arguments: " . func_num_args() . "<br>";
// echo "Argument Index Number 3 Is " . func_get_arg(3) . "<br>";
// print_r(func_get_args());
// $result = 0;
// foreach (func_get_args() as $arg) :
//   $result += $arg;
// endforeach;
// echo $result;
// echo "Argument Index Number 3 Is " . $nums[3] . "<br>";
// print_r($nums);
// $result = 0;
// foreach ($nums as $num) :
//   $result += $num;
// endforeach;
// echo $result;
// }

// calculate(10, 20, 50, 30, 40, 50, 100);
// function get_trim($name)
// {
//   return str_shuffle($name);
// }
// echo get_trim("NAME");
for ($i = 0; $i < 10;) :
  echo '*' . '<br>';
  $i++;
endfor;
