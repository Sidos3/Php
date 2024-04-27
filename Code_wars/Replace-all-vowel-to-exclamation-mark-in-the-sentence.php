<?php

function replace(string $s): string
{
    // Write your code here
    $vowel = ['A', 'E', 'I', 'O', 'U', 'a', 'e', 'i', 'o', 'u'];
    return str_replace($vowel, '!', $s);
}
echo replace("ABCDE");

// str_replace('aeiouAEIOU' ,'!' ,$s);
// aeiouAEIOU 

// Examples
// replace("Hi!") === "H!!"
// replace("!Hi! Hi!") === "!H!! H!!"
// replace("aeiou") === "!!!!!"
// replace("ABCDE") === "!BCD!"
