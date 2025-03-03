<?php

# Write a PHP function that takes an array of integers as input.
# The array contains numbers from 1 to nn except for one missing number.
# Find and return the missing number.
function findMissingNumbers($arr)
{
    $min = min($arr);
    $max = max($arr);
    $missingNumbers = [];

    for ($i = $min; $i <= $max; $i++) {
        if (!in_array($i, $arr)) {
            $missingNumbers[] = $i;
        }
    }

    return $missingNumbers;
}

// Example usage:
$arr = [1, -2, 2, 3, 5, 10]; // Missing numbers: 4,6,7,8,9
$missing = findMissingNumbers($arr);
echo "Missing numbers: " . implode(", ", $missing) . "\n";



function findMissingNumbersOptimized($arr)
{
    $fullRange = range(min($arr), max($arr)); // Generate full range of numbers
    return array_diff($fullRange, $arr); // Find missing numbers
}

// Example usage:
$arr = [1, -3, 2, 3, 5, 10];
$missing = findMissingNumbersOptimized($arr);
echo "Missing numbers: " . implode(", ", $missing) . "\n";


function findMissingLetters($arr)
{

    // Generate the full range of letters from the first to the last element
    $fullRange = range('a', end($arr));

    // Find the missing letters by computing the difference
    $missing = array_diff($fullRange, $arr);

    return implode(", ", $missing);
}

// Example usage
$arr = ['b', 'c', 'e', 'g'];
echo findMissingLetters($arr);


?>