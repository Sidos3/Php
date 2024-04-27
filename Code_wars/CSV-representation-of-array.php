<?php
function toCsvText($array)
{
    //Your code comes here. Good luck!
    return nl2br($array);
}
echo toCsvText("0,1,2,3,45\n10,11,12,13,14\n20,21,22,23,24\n30,31,32,33,34");
