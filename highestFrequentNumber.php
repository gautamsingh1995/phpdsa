<?php

# PHP Program: Find the Highest Frequent Number
function highestFrequentNumber($arr)
{
    $frequency = array_count_values($arr);
    $maxFreq = max($frequency);

    $mostFrequentNumbers = array_keys($frequency, $maxFreq);

    return $mostFrequentNumbers;
}

// Example array
$arr = [1, 3, 2, 3, 4, 5, 3, 2, 2, 2, 5, 6, 2];

$result = highestFrequentNumber($arr);
echo "Highest frequent number(s): " . implode(", ", $result) . "\n";



function loophighestFrequentNumber($arr)
{
    $frequency = [];

    # Count occurrences using a loop
    foreach ($arr as $num) {
        if (isset($frequency[$num])) {
            $frequency[$num]++;
        } else {
            $frequency[$num] = 1;
        }
    }

    # Find the highest frequency
    $maxFreq = 0;
    foreach ($frequency as $count) {
        if ($count > $maxFreq) {
            $maxFreq = $count;
        }
    }

    # Find numbers with the highest frequency
    $mostFrequentNumbers = [];
    foreach ($frequency as $num => $count) {
        if ($count == $maxFreq) {
            $mostFrequentNumbers[] = $num;
        }
    }

    return $mostFrequentNumbers;
}

// Example array
$arr = [1, 3, 2, 3, 4, 5, 3, 2, 2, 2, 5, 6, 2];

$result = loophighestFrequentNumber($arr);
echo "Highest frequent number(s): " . implode(", ", $result) . "\n";


?>