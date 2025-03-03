<?php

    #Function to find the longest common prefix:
    function longestCommonPrefix($strs){
        if(count($strs) == 0){
            return '';
        }
        $minlength = min(array_map('strlen',$strs));
        $prefix = '';
        for ($i=0; $i < $minlength ; $i++) { 
            $currentChar = $strs[0][$i];
            foreach ($strs as $str) {
                if($str[$i] !== $currentChar){
                    return $prefix;
                }
            }
            $prefix.= $currentChar;
        }
        return $prefix;
    }

    $strs = ["flower", "flow", "flight"];
    // Output: "fl"
    var_dump( longestCommonPrefix($strs));


    #other Method
   /*  function longestCommonPrefix($strs) {
        if (count($strs) == 0) {
            return "";
        }
        $prefix = $strs[0];
        for ($i = 1; $i < count($strs); $i++) {
            while (substr($strs[$i], 0, strlen($prefix)) != $prefix) {
                $prefix = substr($prefix, 0, strlen($prefix) - 1);
                if ($prefix == "") {
                    return "";
                }
            }
        }
        return $prefix;
    } */
    

?>