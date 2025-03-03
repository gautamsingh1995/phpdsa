<?php

/* Take an array  of integer and return the sum of all number starting with a 6. */

function sumNumbersStartingWith6($arr)
{
    $sum = 0;
    foreach ($arr as $num) {
        if (strpos((string) $num, '6') === 0) {
            $sum += $num;
        }
    }
    return $sum;
}

// Example usage:
$numbers = [16, 62, 34, 60, 75, 6, 26];
echo sumNumbersStartingWith6($numbers);
?>