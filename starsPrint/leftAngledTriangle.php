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


?>