<?php

    function BubbleSort(array $numbers) {
        
        for ($index_i = 0; $index_i < count($numbers); $index_i++) {
            for ($index_n = 0; $index_n < count($numbers) - 1 - $index_i; $index_n++) {
                if ($numbers[$index_n] > $numbers[$index_n + 1]) {
                    $temp = $numbers[$index_n];
                    $numbers[$index_n] = $numbers[$index_n + 1];
                    $numbers[$index_n + 1] = $temp;
                }
            }
        }
    
        return $numbers;
    
    }

?>