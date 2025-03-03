<?php
/* Implement  a php function  that  returns  an integer array with all prime numbers  that are less than  a giv3n integer */
function getPrimesLessThan($n)
{
    $primes = [];
    if ($n <= 2)
        return $primes;

    for ($i = 2; $i < $n; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}

function isPrime($num)
{
    if ($num < 2)
        return false;
    if ($num == 2)
        return true;
    if ($num % 2 == 0)
        return false;

    for ($i = 3; $i * $i <= $num; $i += 2) {
        if ($num % $i == 0)
            return false;
    }
    return true;
}

// Example usage:
print_r(getPrimesLessThan(20));
?>