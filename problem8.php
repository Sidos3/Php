<?php
$friends = [
  "AG" => "Ahmed Gamal",
  "OM" => "Osama Mohamed",
  "MG" => "Mahmoud Gamal",
  "AS" => "Ahmed Samy",
  "FA" => "Farid Ahmed",
  "SM" => "Sayed Mohamed"
];
echo '<pre>';
print_r(array_chunk(array_change_key_case($friends), 2, true));
echo '</pre>';
// Output
//   Array
//   (
//     [0] => Array
//       (
//         [ag] => Ahmed Gamal
//         [om] => Osama Mohamed
//       )
//     [1] => Array
//       (
//         [mg] => Mahmoud Gamal
//         [as] => Ahmed Samy
//       )
//     [2] => Array
//       (
//         [fa] => Farid Ahmed
//         [sm] => Sayed Mohamed
//       )
//   )
echo '<hr>';
$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];
echo '<pre>';
print_r(array_combine($codes, $means));
echo '</pre>';
// Output
// Array
// (
//   [h] => HTML
//   [c] => CSS
//   [j] => JavaScript
// )
echo '<hr>';
$friends = [
  "Ahmed Gamal" => "AG",
  "Osama Mohamed" => "OM",
  "Mahmoud Gamal" => "MG",
  "Ahmed Samy" => "AS"
];

echo '<pre>';
print_r(array_change_key_case(array_flip($friends)));
echo '</pre>';

// Output
//   Array
//   (
//     [as] => Ahmed Samy
//     [mg] => Mahmoud Gamal
//     [om] => Osama Mohamed
//     [ag] => Ahmed Gamal
//   )
echo '<hr>';

$nums = [10, 20, 30];
// first with anonymos function 
$ann = function () use ($nums) {
  $result = 0;
  foreach ($nums as $num) {
    $result += $num;
  }
  return $result;
};
print_r(array_reduce($nums, $ann));
echo '<br>';
// second with built in function 
echo array_sum($nums);
// Output
// 60
// 60
echo '<hr>';
$nums = [5, 10, 20, 5, 30, 40];
$get_summe = function () use ($nums) {
  $result = 0;
  foreach ($nums as $num) {
    if ($num == 5) {
      continue;
    } else {
      $result += $num;
    }
  }
  return $result;
};
echo array_reduce($nums, $get_summe);
// Output
// 100
echo '<hr>';

$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;

echo '<pre>';
print_r(array_pad($chars, 10, $char[$zero]));
echo '</pre>';
// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
//   [4] => E
//   [5] => @
//   [6] => @
//   [7] => @
//   [8] => @
//   [9] => @
// )
echo '<hr>';
$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];
// Write Line Here
echo next($names) . "<br>";
// Write Line Here
echo next($names) . "<br>";
echo current($names) . "<br>"; // "Sayed"

// Write Line Here
echo end($names) . "<br>";
echo current($names) . "<br>"; // "Ali"

// Write Line Here
echo reset($names) . "<br>";
echo current($names) . "<br>"; // "Osama"

// Write Line Here
echo end($names) . "<br>";
// Write Line Here
echo prev($names) . "<br>";
echo current($names) . "<br>"; // "Mahmoud"
echo '<hr>';

$chars = ["A", "B", "C"];

// 1 = > array_push
array_push($chars, "D");
echo '<pre>';
print_r($chars);
echo '</pre>';
// 2 = array pop
array_pad($chars, 1, "D");
echo '<pre>';
print_r($chars);
echo '</pre>';
// 3 array_merge
$array = ["D"];
array_merge($chars, $array);
echo '<pre>';
print_r($chars);
echo '</pre>';
// 4 with array slice 
echo '<pre>';
print_r(array_slice($chars, 0));
echo '</pre>';
// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
// )
echo '<hr>';
$nums = [1, 2, 3, 4, 5, 6];
echo '<pre>';
print_r(array_slice($nums, -5, -2));
echo '</pre>';
// Output
// Array
// (
//   [0] => 2
//   [1] => 3
//   [2] => 4
// )
echo '<hr>';
$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

// Write Your Code Here
array_splice($mix, 3, 3, $nums);
echo '<pre>';
print_r($mix);
echo '</pre>';

// Output
// Array
// (
//   [0] => 1
//   [1] => 2
//   [2] => 3
//   [3] => 4
//   [4] => 5
//   [5] => 6
//   [6] => 7
//   [7] => 8
//   [8] => 9
// )
echo '<hr>';
$arr = ["A", "B", "C", "D", "E"];
$count = 0;
foreach ($arr as $array) {
  $count++;
}
echo $count;

// Output
// 5
echo '<hr>';

$nums = [11, 2, 10, 7, 20, 50];
$result = 0;
foreach ($nums as $num) {
  $result += $num;
}
echo $result;
// Output
// 100
echo '<hr>';
$nums = [10, 100, -20, 50, 30];
$max = $nums[0];
foreach ($nums as $num) {
  if ($num > $max) {
    $max = $num;
  }
}
echo $max;
// Output
// 100
echo '<hr>';
$nums = [10, 100, -20, 50, 30];
$min = $nums[0];
foreach ($nums as $num) {
  if ($num < $min) {
    $min = $num;
  }
}
echo $min;
// Output
// -20
echo '<hr>';
$chars = ["o", "r", "e", "z", "l", "E"];
$count = 0;
foreach ($chars as $char) {
  $count++;
}
for ($i = $count; $i >= 0; $i--) {
  echo $chars[$i];
}
// Output
// "Elzero"