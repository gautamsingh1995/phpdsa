<?php

    #Second Largest Salaries in an Array
    function secondLargestSalaries($salaries){
        # Remove duplicate salaries
        $salaries = array_unique($salaries);

        # Sort the array in descending order
        rsort($salaries);

        # Return the second largest element, or null if not enough values
        if($salaries  > 2){
            return null;  // Not enough values for second-largest
        }

        return $salaries[1];  // Second largest salary

    }

    $salaries = [4000, 2000, 1000, 3000, 4000];
    echo secondLargestSalaries($salaries); // Output: 3000

?>
