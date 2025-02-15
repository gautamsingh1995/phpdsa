<?php
function leftAngledTriangle($n)
{
    for ($i = 0; $i <= $n; $i++) {

        for ($j = 0; $j < $n - $i; $j++) {
            echo " ";
        }

        for ($k = 0; $k <= $i; $k++) {
            echo "*";
        }

        echo "\n";
    }
}

// Call function
leftAngledTriangle(5);

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

function leftAngledTriangles($n)
{
    for ($i = 0; $i <= $n; $i++) {
        printSpaces($n - $i);  // Print spaces
        printStars($i + 1);     // Print stars
        echo "\n";
    }
}

// Call function
leftAngledTriangles(5);






?>