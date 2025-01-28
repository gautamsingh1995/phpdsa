<?php

    # Remove duplicates from Array (works for both sorted and unsorted arrays):
    function removeDuplicatesArray($arr){
        // Sort the array to handle unsorted input
        sort($arr);

        $unique = [];
        $prev = null;

        foreach ($arr as $value) {
            // Add only unique values
            if ($value !== $prev) {
                $unique[] = $value;
            }
            $prev = $value;
        }

        return $unique;
    }

    # Test Cases
    echo "Input: [2, 2, 2, 2, 2]\nOutput: ";
    $input1 = [2, 2, 2, 2, 2];
    print_r(removeDuplicatesArray($input1));

    echo "Input: [1, 2, 0, 4, 3, 0, 5, 0]\nOutput: ";
    $input2 = [1, 2, 0, 4, 3, 0, 5, 0];
    print_r(removeDuplicatesArray($input2));

?>
