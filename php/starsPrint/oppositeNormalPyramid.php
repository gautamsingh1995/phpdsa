<?php
# Both Together (Opposite and Normal Pyramid)
function oppositePyramid($n)
{
    for ($i = $n; $i >= 1; $i--) {

        for ($j = 0; $j < $n - $i; $j++) {
            echo " ";
        }

        for ($k = 0; $k < 2 * $i - 1; $k++) {
            echo "*";
        }

        if ($i !== 1) {
            echo "\n";
        }
    }
}

function pyramid($n)
{
    for ($i = 0; $i <= $n; $i++) {

        for ($j = 0; $j < $n - $i; $j++) {
            echo " ";
        }

        for ($k = 0; $k < 2 * $i - 1; $k++) {
            echo "*";
        }
        echo "\n";
    }

}
function printPyramids($n)
{
    oppositePyramid($n);
    pyramid($n);

}

function diamondPyramids($n)
{
    pyramid($n);
    oppositePyramid($n);
}

// Call function
printPyramids(5);

diamondPyramids(5);


/*
# when the call function printPyramids(5)

*********
 *******
  *****
   ***
    *

    *
   ***
  *****
 *******
*********

# when the call function diamondPyramids(5)

    *
   ***
  *****
 *******
*********
*********
 *******
  *****
   ***
    *

*/


?>