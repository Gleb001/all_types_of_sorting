
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
function Partition(numbers, left, right) {
    
    let pivot = numbers[right];
    let less = left;
    
    for (let index = left; index < right; index++) {
        if (numbers[index] <= pivot) {
            Swap(numbers, index, less);
            less++;
        }
    }
    
    Swap(numbers, right, less);
    
    return less;
    
}
function QuckSortImplementation(numbers, left, right) {

    if (left < right) {
        let q = Partition(numbers, left, right);
        QuckSortImplementation(numbers, left, q - 1);
        QuckSortImplementation(numbers, q + 1, right);
    }

}

// Основная функция | main
function QuickSort(numbers) {

    if (numbers.length > 1) {
        QuckSortImplementation(numbers, 0, numbers.length - 1);
    }
    
}
