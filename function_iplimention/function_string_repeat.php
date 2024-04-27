<?php

function string_repeat(string $name, int $repet, bool $space)
{
    if ($space == true) {
        $space = " ";
    }
    for ($i = 0; $i < $repet; $i++) {

        echo $name . $space;
    }
}
echo string_repeat("sidahmed", 10, 1);
