<?php
    # Rearrange Array Elements by Sign
    function rearrangeBySign($arr) {
        $positives = [];
        $negatives = [];

        # Separate the positives and negatives
        foreach ($arr as $value) {
            if ($value >= 0) {
                $positives[] = $value;
            } else {
                $negatives[] = $value;
            }
        }

        # Alternate between positives and negatives
        $result = [];
        $i = $j = 0;
        $posCount = count($positives);
        $negCount = count($negatives);

        while ($i < $posCount || $j < $negCount) {
            if ($i < $posCount) {
                $result[] = $positives[$i++];
            }
            if ($j < $negCount) {
                $result[] = $negatives[$j++];
            }
        }

        return $result;
    }

    # Test cases
    $input1 = [1, 2, 3, -4, -1, 4];
    $input2 = [-5, -2, 5, 2, 4, 7, 1, 8, 0, -8];

    echo "Input: {1, 2, 3, -4, -1, 4}\nOutput: ";
    print_r(rearrangeBySign($input1));

    echo "\nInput: {-5, -2, 5, 2, 4, 7, 1, 8, 0, -8}\nOutput: ";
    print_r(rearrangeBySign($input2));

?>
