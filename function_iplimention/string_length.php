<?php

function string_length(string $word): int
{
    $counter = 0;
    while ($word) {
        if (empty($word[$counter])) {
            break;
        }
        $counter++;
    }
    return $counter;
}
echo string_length("sidahmed")."<br>"; // 8
echo string_length("aicha")."<br>"; // 5