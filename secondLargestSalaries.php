<?php

#Second Largest Salaries in an Array
function secondLargestSalaries($salaries)
{
    # Remove duplicate salaries
    $salaries = array_unique($salaries);

    # Sort the array in descending order
    rsort($salaries);

    # Return the second largest element, or null if not enough values
    if ($salaries > 2) {
        return null;  // Not enough values for second-largest
    }

    return $salaries[1];  // Second largest salary

}

$salaries = [4000, 2000, 1000, 3000, 4000];
echo secondLargestSalaries($salaries); // Output: 3000

function secondLargestSalariesLoop($salaries)
{
    # Remove duplicate salaries
    $salaries = uniqueSalaries($salaries);

    # Sort the array in descending order
    $salaries = sortdeci($salaries);

    # Check if there are at least 2 unique values
    if (count($salaries) < 2) {
        return null;  // Not enough values for second-largest
    }

    // Step 3: Return Second Largest Element
    return $salaries[1];
}

function uniqueSalaries($salaries)
{
    // Step 1: Remove Duplicates Manually
    $uniqueSalaries = [];
    foreach ($salaries as $salary) {
        if (!in_array($salary, $uniqueSalaries)) {
            $uniqueSalaries[] = $salary;
        }
    }
    return $uniqueSalaries;
}

function sortdeci($arr)
{
    // Step 2: Manual Sorting (Descending Order)
    for ($i = 0; $i < count($arr) - 1; $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$i] < $arr[$j]) {
                // Swap values
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    return $arr;
}

// Test the function
$salaries = [4000, 2000, 1000, 3000, 4000];
echo secondLargestSalariesLoop($salaries); // Output: 3000


?>