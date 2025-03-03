<?php
function generateSquares($limit)
{
    $result = [];
    $i = 1;

    while (($square = $i * $i) <= $limit) {
        $result[$i] = $square;
        $i++;
    }

    return $result;
}

// Example usage:
$limit = 50;
print_r(generateSquares($limit));
?>