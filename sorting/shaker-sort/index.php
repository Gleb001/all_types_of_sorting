<?php

    function ShakerSort(array $numbers) {
        
        if (count($numbers) == 0) return;
    
        $left = 0;
        $right = count($numbers) - 1;
    
        while ($left <= $right) {
        
            for ($index = $left; $index < $right; $index++) {
                if ($numbers[$index] > $numbers[$index + 1]) {
                    $temp = $numbers[$index];
                    $numbers[$index] = $numbers[$index + 1];
                    $numbers[$index + 1] = $temp;
                }
            }
        
            $right--;
        
            for ($index = $right; $index > $left; $index--) {
                if ($numbers[$index - 1] > $numbers[$index]) {
                    $temp = $numbers[$index];
                    $numbers[$index] = $numbers[$index - 1];
                    $numbers[$index - 1] = $temp;
                }
            }
        
            $left++;
        
        
        }
    
        return $numbers;
    
}

?>