
// Вспомогательные функции | helpers
void MergeSortImplementation(int[] numbers, int[] buffer, int left, int right) {
    
    if (left < right) {
        
        int center = (left + right) / 2;
        MergeSortImplementation(numbers, buffer, left, center);
        MergeSortImplementation(numbers, buffer, center + 1, right);
        
        int index = left;
        int i = left;
        int j = center + 1;
        while (i <= center || j <= right) {
            if (j > right || (i <= center && numbers[i] < numbers[j])) {
                buffer[index] = numbers[i];
                i++;
            } else {
                buffer[index] = numbers[j];
                j++;
            }
            index++;
        }
        
        for (int index_n = left; index_n <= right; index_n++) {
            numbers[index_n] = buffer[index_n];
        }
        
    }
    
}

// Основная функция | main
void MergeSort(int[] numbers) {

    if (numbers.Length > 1) {
        int[] buffer = new int[numbers.Length];
        MergeSortImplementation(numbers, buffer, 0, numbers.Length - 1);
    }

}
