<?php
function pascalTriangle($n)
{
    $triangle = [[1]]; // First row is always [1]

    for ($i = 1; $i < $n; $i++) {
        $row = [1]; // First element of each row is 1
        $prevRow = $triangle[$i - 1];

        foreach (range(1, $i - 1) as $j) {
            $row[] = $prevRow[$j - 1] + $prevRow[$j]; // Sum of two above elements
        }

        $row[] = 1; // Last element of each row is 1
        $triangle[] = $row;
    }

    return $triangle;
}

// Function to print Pascal's Triangle
function printPascalTriangle($triangle)
{
    foreach ($triangle as $row) {
        echo implode(" ", $row) . "\n";
    }
}

// Example usage:
$n = 5;
$triangle = pascalTriangle($n);
printPascalTriangle($triangle);


?>