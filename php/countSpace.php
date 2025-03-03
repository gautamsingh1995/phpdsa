<?php


function countSpaces($text)
{
    $count = 0;
    for ($i = 0; $i < strlen($text); $i++) {
        if ($text[$i] === ' ') {
            $count++;
        }
    }
    return $count;
}



$sampleText = "This is a sample text with spaces.";
echo countSpaces($sampleText);


function countSpacesMethod($text)
{
    return substr_count($text, ' ');
}

// Example usage:
$sampleText = "This is a sample text with spaces.";
echo countSpacesMethod($sampleText);
?>