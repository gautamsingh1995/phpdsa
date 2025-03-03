<?php
function highestUniqueNumber($arr)
{
    $counts = array_count_values($arr);
    $uniqueNumbers = array_keys(array_filter($counts, function ($count) {
        return $count == 1;
    }));
    return empty($uniqueNumbers) ? null : max($uniqueNumbers);
}

// Example usage:
$numbers = [4, 5, 7, 5, 4, 8, 10, 10, 12];
echo highestUniqueNumber($numbers);
?>