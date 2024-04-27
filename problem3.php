<?php
/* ====================
 *
 * ===== Exercice 1 =====
 *
 * ==================== */
// / - * %  +
// Replace ? With Arithmetic Operators
// Replace ? With Arithmetic Operators
// echo 10 ? 20 ? 15 ? 3 ? 190 ? 10 ? 400;

/** ====================.
 *
 * ===== Exercice 2 =====
 *
 * ==================== */
$a = '10';

// Needed Ouput
echo (int) $a;
echo '<br>';
echo gettype((int) $a);
echo '<br>';
echo $a;
settype($a, 'integer');
echo '<br>';
echo gettype($a);
echo '<br>';
echo +$a;
echo '<br>';
echo gettype(+$a);
// For The People Who Love Searching
// 10
// "integer"
// 10
// "integer"
echo '<br>';
/* ====================
 *
 * ===== Exercice 3 =====
 *
 * ==================== */
$a = 10;
$b = 20;

// Needed Output
// -1
echo '<hr>';
/* ====================
 *
 * ===== Exercice 4 =====
 *
 * ==================== */
$a = 10;
$b = 20;
$c = 15;

var_dump($a < $b); // True
echo '<br>';
var_dump($c > $a); // True
echo '<br>';
var_dump($a <= $b); // True
echo '<br>';
var_dump($a != $b); // True
echo '<br>';
var_dump($a !== $c); // True
echo '<br>';
var_dump($a != $c); // True
echo '<br>';
var_dump(gettype($a) === gettype($b)); // True
echo '<br>';
var_dump(gettype($a) >= gettype($b)); // True
echo '<br>';
// var_dump(gettype((float) $a)  gettype($b)); // True
echo '<br>';
echo '<hr>';
/* ====================
 *
 * ===== Exercice 5 =====
 *
 * ==================== */
$points = 10;

// Write Your Code Here
++$points;
++$points;
++$points;

echo $points; // 13
echo '<br>';
--$points;
--$points;
--$points;
--$points;
--$points;
// Write Your Code Here

echo $points; // 8;
echo '<hr>';
/* ====================
 *
 * ===== Exercice 6 =====
 *
 * ==================== */

$a = 'Elzero';
$b = 'Web';
$c = 'School';

// Method One
$d1 = $a.' '.$b.' '.$c;
echo $d1; // Elzero Web School
echo '<br>';
// Method Two
$d2 = $a .= ' '.$b .= ' '.$c;
echo $d2; // Elzero Web School
echo '<br>';
// Method Three
$d3 = "$a $b $c";
echo $d3; // Elzero Web School
echo '<br>';
// Method Four
$d4 = "{$a} {$b} {$c}";
echo $d4; // Elzero Web School
echo '<hr>';
/* ====================
 *
 * ===== Exercice 7 =====
 *
 * ==================== */
$a = 10;
$b = 20;

echo($a + $b) * $a + $b + $a * $a * $a; // 10000
echo '<hr>';
/* ====================
 *
 * ===== Exercice 7 =====
 *
 * ==================== */
// Code 1
// $e = @$g or exit('Custom Error');
// echo $g;
// echo '<br>';
// // Code 2
// $f = @file('file.tx') or exit('Custom Error');
// echo '<pre>';
// print_r($f);
// echo '<\pre>';
// echo '<br>';
// // Code 3
// (@include('not')) or exit('Custom Error');
echo '<hr>';
echo 10 || false;
echo '<br>';
echo 10 or false;
var_dump((bool) 10);
