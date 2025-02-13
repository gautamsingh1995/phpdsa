<?php
function rightAngledTriangle($n)
{
    for ($i = 0; $i <= $n; $i++) {

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


?>