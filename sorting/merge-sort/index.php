<?php

    // Вспомогательные функции | helpers
    function MergeSortImplementation(
        array $numbers,
        array $buffer,
        int $left,
        int $right
    ) {
        
        if ($left < $right) {
            
            $center = (int) (($left + $right) / 2);
            $numbers = MergeSortImplementation($numbers, $buffer, $left, $center);
            $numbers = MergeSortImplementation($numbers, $buffer, $center + 1, $right);
            
            $index = $left;
            $i = $left;
            $j = $center + 1;
            while ($i <= $center || $j <= $right) {
                
                if ($j > $right || ($i <= $center && $numbers[$i] < $numbers[$j])) {
                    $buffer[$index] = $numbers[$i];
                    $i++;
                } else {
                    $buffer[$index] = $numbers[$j];
                    $j++;  
                }

                $index++;

            }
            
            for ($index = $left; $index <= $right; $index++) {
                $numbers[$index] = $buffer[$index];
            }
            
        }
        
        return $numbers;
        
    }
    function createArray(int $length, $type) {
        $result = array();
        for ($index = 0; $index < $length; $index++) {
            $result[] = $type;
        }
        return $result;
    }
    
    // Основная функция | main
    function MergeSort(array $numbers) {
        
        if (count($numbers) > 1) {
            $buffer = createArray(count($numbers), 0);
            return MergeSortImplementation(
                $numbers,
                $buffer,
                0,
                count($numbers) - 1
            );
        }
        
        return $numbers;
        
    }

?>