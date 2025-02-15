<?php
function pyramid($n)
{
    for ($i = 1; $i <= $n; $i++) {

        for ($j = 1; $j <= $n - $i; $j++) {
            echo " ";
        }

        for ($k = 1; $k <= $i * 2 - 1; $k++) {
            echo "*";
        }
        echo "\n";
    }
}

// Call function
pyramid(5);

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

function pyramidUsingForeach($n)
{
    $numbers = range(1, $n);

    foreach ($numbers as $i) {
        printSpaces($n - $i);  // Print spaces
        printStars($i * 2 - 1); // Print stars
        echo "\n";
    }
}

// Test the function
pyramidUsingForeach(5);

function pyramids($n)
{
    for ($i = 1; $i <= $n; $i++) {
        printSpaces($n - $i);  // Print spaces
        printStars($i * 2 - 1); // Print stars
        echo "\n";
    }
}

// Test the function
pyramids(5);



/*

    * 
   * * 
  * * * 
 * * * * 
* * * * *

*/


?>