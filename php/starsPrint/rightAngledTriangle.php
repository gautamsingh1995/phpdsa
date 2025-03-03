<?php
function rightAngledTriangle($n)
{
    for ($i = 0; $i < $n; $i++) {

        for ($j = 0; $j <= $i; $j++) {
            echo "*";
        }
        echo "\n";
    }
}

// Call function
rightAngledTriangle(5);

/*

    *
   ***
  *****
 *******
*********

*/
function printSpaces($count)
{

    echo str_repeat(" ", $count);

}

function printStars($count)
{
    echo str_repeat("*", $count);
}

function rightAngledTriangleforecah($n)
{
    $range = range(1, $n);
    foreach ($range as $key => $value) {
        printStars($value);
        echo "\n";
    }


}

// Call function
rightAngledTriangleforecah(5);

?>