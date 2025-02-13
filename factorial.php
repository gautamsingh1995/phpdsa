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
?>