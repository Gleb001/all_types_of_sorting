<?php

    function CombSort(array $numbers) {
        
        $factor = 1.247;
        $step = count($numbers) - 1;
        
        while ($step >= 1) {    
            
            for ($index = 0; $index + $step < count($numbers); $index++) {
                if ($numbers[$index] > $numbers[$index + $step]) {
                    $temp = $numbers[$index];
                    $numbers[$index] = $numbers[$index + $step];
                    $numbers[$index + $step] = $temp;
                }
            }
            
            $step = (int) ($step / $factor);
            
        }
        
        // пузырьковая сортировка | bubble sort
        for ($index_i = 0; $index_i < count($numbers) - 1; $index_i++) {
            for ($index_n = 0; $index_n < count($numbers) - (1 + $index_i); $index_n++) {
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