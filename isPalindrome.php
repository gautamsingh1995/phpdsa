<?php

# Function to find the isPalindrome string:
function isPalindrome($strs)
{
    $length = strlen($strs);
    for ($i = 0; $i < $length / 2; $i++) {

        if ($strs[$i] !== $strs[$length - 1 - $i]) {
            return false;
        }
    }
    return true;
}

$x = "racecar";
var_dump(isPalindrome($x)); // Output: bool(true)


#other Method
/* function isPalindrome($x) {
     // Reverse the string and check if it is the same as the original
     return $x === strrev($x);
 }
 */


?>