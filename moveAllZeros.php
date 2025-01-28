<?php

    # Move all zeros to end of array:
    function moveAllZeros($arr){
        $zeroCount = [];
        $nonZeroCount = [];
        foreach ($arr as $key => $value) {
            # code...
            if ($value !== 0) {
                $nonZeroCount[] = $value;
            } else{
                $zeroCount[] = $value;
            }
        }

        $arr = array_merge($nonZeroCount,$zeroCount);
        return $arr;
    }

    $arr = [1, 2, 0, 4, 3, 0, 5, 0];
    print_r(moveAllZeros($arr));

    # Other Method
   /* function isPalindrome($x) {
        // Reverse the string and check if it is the same as the original
        return $x === strrev($x);
    }
    */
    

?>