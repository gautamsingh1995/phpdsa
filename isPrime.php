<?php
function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

// Test the function
$num = 17;
if (isPrime($num)) {
    echo "$num is a prime number\n";
} else {
    echo "$num is not a prime number\n";
}

?>