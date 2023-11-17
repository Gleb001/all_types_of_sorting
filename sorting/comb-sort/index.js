
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
function CombSort(numbers) {
    
    let factor = 1.247;
    let step = numbers.length - 1;
    
    while (step >= 1) {
        for (let index = 0; index + step < numbers.length; index++) {
            if (numbers[index] > numbers[index + step]) {
                Swap(numbers, index, index + step);
            }
        }
        step /= factor;
    }
    
    // пузырьковая сортировка | bubble sort
    for (let index_i = 0; index_i < numbers.length - 1; index_i++) {
        for (let index_n = 0; index_n < numbers.length - (1 + index_i); index_n++) {
            if (numbers[index_n] > numbers[index_n + 1]) {
                Swap(numbers, index_n, index_n + 1);
            }
        }
    }
    
}
