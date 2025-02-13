<?php
function pyramid($n)
{
    for ($i = 1; $i <= $n; $i++) {

        for ($j = 0; $j < $n - $i; $j++) {
            echo " ";
        }

        for ($k = 0; $k < $i * 2 - 1; $k++) {
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


?>