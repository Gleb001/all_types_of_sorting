<?php

    // Вспомогательные функции | helpers
    function Swap(array $numbers, int $index_1, int $index_2) {
        $temp = $numbers[$index_1];
        $numbers[$index_1] = $numbers[$index_2];
        $numbers[$index_2] = $temp;
        return $numbers;
    }
    function Partition(array $numbers, int $left, int $right) {
        
        $pivot = $numbers[$right];
        $less = $left;
        
        for ($index = $left; $index < $right; $index++) {
            if ($numbers[$index] <= $pivot) {
                $numbers = Swap($numbers, $index, $less);
                $less++;
            }
        }
        
        $numbers = Swap($numbers, $right, $less);
        
        return [$numbers, $less];
        
    }
    function QuickSortImplementation(array $numbers, int $left, int $right) {
        
        if ($left < $right) {
            list($numbers, $q) = Partition($numbers, $left, $right);
            $numbers = QuickSortImplementation($numbers, $left, $q - 1);
            $numbers = QuickSortImplementation($numbers, $q + 1, $right);
        }
        
        return $numbers;
        
    }
    
    // Основная функция | main
    function QuickSort(array $numbers) {
        
        if (count($numbers) > 1) {
            $numbers = QuickSortImplementation($numbers, 0, count($numbers) - 1);
        }
        
        return $numbers;
        
    }

?>