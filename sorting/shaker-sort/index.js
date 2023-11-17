
// Вспомогательные функции | helpers
function Swap(numbers, index_1, index_2) {
    [
        numbers[index_1],
        numbers[index_2]
    ] = [
        numbers[index_2],
        numbers[index_1]
    ];
}

// Основная функция | main
function ShakerSort(numbers) {
    
    if (numbers.length == 0) return;
    
    let left = 0;
    let right = numbers.length - 1;
    
    while (left <= right) {
        
        for (let index = left; index < right; index++) {
            if (numbers[index] > numbers[index + 1]) {
                Swap(numbers, index, index + 1);
            }
        }

        right--;
        
        for (let index = right; index > left; index--) {
            if (numbers[index - 1] > numbers[index]) {
                Swap(numbers, index - 1, index);
            }
        }

        left++;
        
    }
    
}
