<?php

function longestUniqueSubstringForeach($str)
{
    $charMap = [];
    $char = 0;
    $start = 0;
    $maxLength = 0;
    $longestSubstring = "";

    foreach (str_split($str) as $end => $char) {
        if (isset($charMap[$char]) && $charMap >= $start) {
            $start = $charMap[$char] + 1;
        }

        $charMap[$char] = $end;

        if (($end - $start + 1) > $maxLength) {
            $maxLength = $end - $start + 1;
            $longestSubstring = substr($str, $start, $maxLength);
        }
    }
    return $longestSubstring;

}

$input = "abcabcbb";
echo "Longest unique substring: " . longestUniqueSubstringForeach($input) . "\n";

function longestUniqueSubstring($str)
{
    return implode("", array_unique(str_split($str)));
}

$input1 = "abcadbcbbe";
echo "Longest unique substring: " . longestUniqueSubstring($input1) . "\n";

?>