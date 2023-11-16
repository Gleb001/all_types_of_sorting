<?php

    function InsertionSort(array $numbers) {

        for ($index = 1; $index < count($numbers); $index++) {

            $value = $numbers[$index];
            $pointer = $index;
        
            while ($pointer > 0 && $numbers[$pointer - 1] > $value) {
                $numbers[$pointer] = $numbers[$pointer - 1];
                $pointer--;
            }
        
            $numbers[$pointer] = $value;
        
        }
    
        return $numbers;
    
    }

?>