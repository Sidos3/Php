<?php

function smash(array $words): string
{
    // Your code here
    //  return implode(" ",$words);
    // foreach ($words as $word) :
    //     return $word = " ";
    // endforeach;
for ($i=0; $i < func_num_args(); $i++) { 
    # code...
    return $words[$i].=$i;
}
}
echo smash(['hello', 'world', 'this', 'is', 'great']);
