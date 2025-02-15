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



function printSpaces($count)
{
    echo str_repeat(" ", $count);
}

function printStars($count)
{
    echo str_repeat("*", $count);
}

function oppositePyramids($n)
{
    $rows = range($n, 1); // Create an array from $n to 1

    foreach ($rows as $i) {
        printSpaces($n - $i);  // Print spaces
        printStars($i * 2 - 1); // Print stars
        echo "\n";
    }
}

// Call function
oppositePyramids(5);


?>