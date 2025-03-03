<?php
function factorial($n)
{
    if ($n === 0 || $n === 1) {
        return 1;
    }

    return $n * factorial($n - 1);

}

// Test the function
$num = 5;
echo "Factorial of $num is " . factorial($num) . "\n";

function factorialForeach($n)
{
    if ($n === 0 || $n === 1) {
        return 1;
    }

    $range = range(1, $n);
    $fact = 1;
    foreach ($range as $key => $value) {
        $fact *= $value;
    }

    return $fact;

}
$num1 = 6;
echo "Factorial of $num1 is " . factorialForeach($num1) . "\n";

function factorialMethod($n)
{
    return ($n === 0 || $n === 1) ? 1 : array_product(range(1, $n));
}
$num2 = 6;
echo "Factorial of $num2 is " . factorialMethod($num2) . "\n";


function factorialLoop($n)
{
    $fact = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fact *= $i;
    }
    return $fact;
}

// Test the function
$num = 5;
echo "Factorial of $num is " . factorialLoop($num) . "\n";

?>