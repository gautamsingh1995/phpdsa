<?php

    # PHP Program to Count Number of Vowels in a String:
    function countVowels($strs){
        # Define vowels
        $vowels = ['a', 'e', 'i', 'o', 'u'];

        # Initialize vowel count
        $count = 0;

        # Convert the string to lowercase for case-insensitivity

        $str = strtolower($strs);
        
        for ($i=0; $i < strlen($str) ; $i++) { 
            if(in_array($str[$i],$vowels)) {
                $count++;
            }
        }
        return $count;

    }

    $strs = 'Gautam Singh';
    var_dump(countVowels($strs)); // output 4

?>