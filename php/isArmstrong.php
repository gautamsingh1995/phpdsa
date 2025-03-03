<?php
function isArmstrong($num)
{
    $sum = 0;
    $temp = $num;
    $digit = strlen($num);

    while ($temp > 0) {
        $lastDigit = $temp % 10;
        $sum += pow($lastDigit, $digit);
        $temp = (int) ($temp / 10);
    }
    return $sum = $num;
}

$num = 153;
echo ($num . (isArmstrong($num) ? " is an Armstrong number\n" : " is not an Armstrong number\n"));

?>