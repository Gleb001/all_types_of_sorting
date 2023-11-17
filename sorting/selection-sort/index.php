<?php

    // Вспомогательные функции | helpers
    function GetIndexMinElement(array $numbers, int $start, int $end) {

        if ($start < 0 | $end > count($numbers) - 1) return -1;
    
        $result = $start;
    
        for ($index = $start; $index < $end + 1; $index++) {
            if ($numbers[$result] > $numbers[$index]) {
                $result = $index;
            }
        }
    
        return $result;
    
    }

    // Основная функция | main
    function SelectionSort(array $numbers) {
    
        for ($index = 0; $index < count($numbers); $index++) {
        
            $index_min_element = GetIndexMinElement($numbers, $index, count($numbers) - 1);
        
            $temp = $numbers[$index];
            $numbers[$index] = $numbers[$index_min_element];
            $numbers[$index_min_element] = $temp;

        }
    
        return $numbers;
    
    }

?>