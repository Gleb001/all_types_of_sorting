
// Вспомогательные функции | helpers
function MergeSortImplementation(numbers, buffer, left, right) {
    
    if (left < right) {

        let center = Math.floor((left + right) / 2);
        MergeSortImplementation(numbers, buffer, left, center);
        MergeSortImplementation(numbers, buffer, center + 1 , right);
        
        let index = left;
        let i = left;
        let j = center + 1;
        while (i <= center || j <= right) {
            
            if (j > right || ( i <= center && numbers[i] < numbers[j] )) {
                buffer[index] = numbers[i];
                i++;
            } else {
                buffer[index] = numbers[j];
                j++;
            }

            index++;

        }
        
        for (let index = left; index <= right; index++) {
            numbers[index] = buffer[index];
        }
        
    }
    
}

// Основная функция | main
function MergeSort(numbers) {
    if (numbers.length > 1) {
        let buffer = Array(numbers.length);
        MergeSortImplementation(numbers, buffer, 0, numbers.length - 1);
    }
}
