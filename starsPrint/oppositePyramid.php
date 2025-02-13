<?php
function oppositePyramid($n)
{
    for ($i = $n; $i >= 1; $i--) {

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
OppositePyramid(5);

?>