
// Вспомогательные функции | helpers
void Swap(int[] numbers, int index_1, int index_2) {
    int temp = numbers[index_1];
    numbers[index_1] = numbers[index_2];
    numbers[index_2] = temp;
}

// Основная функция | main
void ShakerSort(int[] numbers) {

    if (numbers.Length == 0) return;
        
    int left = 0;
    int right = numbers.Length - 1;
        
    while (left <= right) {
            
        for (int index = left; index < right; index++) {
            if (numbers[index] > numbers[index + 1]) {
                Swap(numbers, index, index + 1);
            }
        }
            
        right--;

        for (int index = right; index > left; index--) {
            if (numbers[index - 1] > numbers[index]) {
                Swap(numbers, index - 1, index);
            }
        }
            
        left++;
            
    }

}
