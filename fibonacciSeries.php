<?php
function fibonacci($n)
{
    $num1 = 0;
    $num2 = 1;
    echo "$num1 $num2";
    for ($i = 2; $i < $n; $i++) {
        $nextNum = $num1 + $num2;
        echo " $nextNum";
        $num1 = $num2;
        $num2 = $nextNum;
    }

}
// Test the function
$n = 10;
echo "Fibonacci series up to $n terms: \n";
fibonacci($n);

function fibonacciMethod($n)
{
    $range = range(1, $n);

    return array_reduce($range, function ($carry, $index) {
        $carry[] = ($index < 2) ? $index : $carry[$index - 1] + $carry[$index - 2];
        return $carry;
    }, []);
}

// Test the function
$n = 10;
echo "Fibonacci series up to $n terms: \n";
echo implode(" ", fibonacciMethod($n)) . "\n";

?>