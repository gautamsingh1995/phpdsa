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

?>