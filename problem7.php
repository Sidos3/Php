<?php

$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

// Write Your Code Here
$str = substr_replace($str, $let_two, $num_two, 1);

$str = substr_replace($str, $let_one, $num_one);
echo $str; // Elzero
echo '<br>';
echo '<hr>';
echo '<br>';
function get_number($number)
{
    if ($number < 0) {
        echo 'the number will be > of zero';
    } elseif ($number == 0 or $number == 1) {
        return 1;
    } else {
        return $number * get_number($number - 1);
    }
}
echo get_number(10);
echo '<br>';
echo '<hr>';
echo '<br>';

$str = "Orezle";
$str = lcfirst($str);
$str = strrev($str);
$str = ucfirst($str);
echo $str;
// Elzero
echo '<br>';
echo '<hr>';
echo '<br>';

$str = 'aAa';
$num = 3;
$char = "_";

// Write Your Code Here
echo str_repeat(chunk_split(strtolower($str), $num, $char), 3);
// aaa_aaa_aaa_
echo '<br>';
echo '<hr>';
echo '<br>';

$str = "<div><b>Elzero</b></div>";
echo strip_tags($str,"<b>");
// <b>Elzero</b>

echo '<br>';
echo '<hr>';
echo '<br>';

$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;
 echo substr_count($str,$e,$four);
 echo '<br>';
 echo substr_count($str,strtolower($o),$four,11);
// 1
// 2
echo '<br>';
echo '<hr>';
echo '<br>';

$chars = ["E", "l", "z", "e", "r", "o"];
echo implode($chars);
// Output
// "Elzero"

echo '<br>';
echo '<hr>';
echo '<br>';


$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];



// Output
// "Elzero"