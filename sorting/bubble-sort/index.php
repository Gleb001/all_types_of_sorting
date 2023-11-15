<?php

    function bubbleSort(array $numbers) {
        
        // 1.
        for ($index_i = 0; $index_i < count($numbers); $index_i++) {
            // 2.
            for ($index_n = 0; $index_n < count($numbers) - 1 - $index_i; $index_n++) {
                // 3.
                if ($numbers[$index_n] > $numbers[$index_n + 1]) {
                   // 4.
                    $temp = $numbers[$index_n];
                    $numbers[$index_n] = $numbers[$index_n + 1];
                    $numbers[$index_n + 1] = $temp;
                }
            }
        }
    
        return $numbers;
    
    }

?>