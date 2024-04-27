<?php
function even_or_odd(int $n): string
{

  if ($n >= 0 && $n % 2 == 0) {
    return "Even";
  } elseif ($n > 0 && $n % 2 == 1) {
    return "Odd";
  } elseif ($n < 0 && $n % 2 == 0) {
    return "Even";
  } else {
    return "Odd";
  }
}
echo even_or_odd(-7);
