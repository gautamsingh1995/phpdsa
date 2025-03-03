<?php

# PHP Program to Count Number of Vowels in a String:
function countVowels($strs)
{
    # Define vowels
    $vowels = ['a', 'e', 'i', 'o', 'u'];

    # Initialize vowel count
    $count = 0;

    # Convert the string to lowercase for case-insensitivity

    $str = strtolower($strs);

    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $vowels)) {
            $count++;
        }
    }
    return $count;

}

$strs = 'Gautam Singh';
var_dump(countVowels($strs)); // output 4

function countVowelsForeach($str)
{
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    $strSplit = strtolower($str);

    // Convert the string to lowercase and split into an array
    foreach (str_split($strSplit) as $char) {
        if (in_array($char, $vowels)) {
            $count++;
        }
    }
    return $count;
}

// Test the function
$input = "Hello World";
echo "Number of vowels in '$input': " . countVowelsForeach($input) . "\n";


?>