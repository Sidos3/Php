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