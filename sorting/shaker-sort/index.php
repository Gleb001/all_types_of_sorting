<?php

    // Вспомогательные функции | helpers
    function Swap(array $numbers, int $index_1, int $index_2) {
        $temp = $numbers[$index_1];
        $numbers[$index_1] = $numbers[$index_2];
        $numbers[$index_2] = $temp;
        return $numbers;
    }

    // Основная функция | main
    function ShakerSort(array $numbers) {
        
        if (count($numbers) == 0) return;
    
        $left = 0;
        $right = count($numbers) - 1;
    
        while ($left <= $right) {
        
            for ($index = $left; $index < $right; $index++) {
                if ($numbers[$index] > $numbers[$index + 1]) {
                    $numbers = Swap($numbers, $index, $index + 1);
                }
            }
        
            $right--;
        
            for ($index = $right; $index > $left; $index--) {
                if ($numbers[$index - 1] > $numbers[$index]) {
                    $numbers = Swap($numbers, $index - 1, $index);
                }
            }
        
            $left++;
        
        }
    
        return $numbers;
    
    }

?>