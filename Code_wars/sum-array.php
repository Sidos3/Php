<?php
function sum(array $a): float
{
  if (empty($a)) {
    return 0;
  }
  return array_sum($a);
}
echo sum([1]);

//   Examples
// Input: [1, 5.2, 4, 0, -1]
// Output: 9.2

// Input: []
// Output: 0

// Input: [-2.398]
// Output: -2.39
