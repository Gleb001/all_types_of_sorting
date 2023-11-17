
// Вспомогательные функции | helpers
void Swap(int[] numbers, int index_1, int index_2) {
    int temp = numbers[index_1];
    numbers[index_1] = numbers[index_2];
    numbers[index_2] = temp;
}
int Partition(int[] numbers, int left, int right) {
    
    int pivot = numbers[right];
    int less = left;
    
    for (int index = left; index < right; index++) {
        if (numbers[index] <= pivot) {
            Swap(numbers, index, less);
            less++;
        }
    }
    
    Swap(numbers, right, less);
    
    return less;
    
}
void QuickSortImplementation(int[] numbers, int left, int right) {
    
    if (left < right) {
        int q = Partition(numbers, left, right);
        QuickSortImplementation(numbers, left, q - 1);
        QuickSortImplementation(numbers, q + 1, right);
    }
    
}

// Основная функция | main
void QuickSort(int[] numbers) {

    if (numbers.Length > 1) {
        QuickSortImplementation(numbers, 0, numbers.Length - 1);
    }

}
