<?php

    // Вспомогательные функции | helpers
    function Swap(array $numbers, int $index_1, int $index_2) {
        $temp = $numbers[$index_1];
        $numbers[$index_1] = $numbers[$index_2];
        $numbers[$index_2] = $temp;
        return $numbers;
    }    

    // Основная функция | main
    function CombSort(array $numbers) {
        
        $factor = 1.247;
        $step = count($numbers) - 1;
        
        while ($step >= 1) {    
            
            for ($index = 0; $index + $step < count($numbers); $index++) {
                if ($numbers[$index] > $numbers[$index + $step]) {
                    Swap($numbers, $index, $index + $step);
                }
            }
            
            $step = (int) ($step / $factor);
            
        }
        
        // пузырьковая сортировка | bubble sort
        for ($index_i = 0; $index_i < count($numbers) - 1; $index_i++) {
            for ($index_n = 0; $index_n < count($numbers) - (1 + $index_i); $index_n++) {
                if ($numbers[$index_n] > $numbers[$index_n + 1]) {
                    Swap($numbers, $index_n, $index_n + 1);
                }
            }
        }
        
        return $numbers;
        
    }

?>