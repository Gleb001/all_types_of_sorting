
// Вспомогательные функции | helpers
int GetIndexMinElement(int[] numbers, int start, int end) {

    if (start < 0 | end > numbers.Length - 1) return -1;
        
    int result = start;
        
    for (int index = start; index < end + 1; index++) {
        if (numbers[result] > numbers[index]) {
            result = index;
        }
    }
        
    return result;
        
}

// Основная функция | main
void SelectionSort(int[] numbers) {

    for (int index = 0; index < numbers.Length; index++) {
            
        int index_min_element = GetIndexMinElement(numbers, index, numbers.Length - 1);
            
        int temp = numbers[index];
        numbers[index] = numbers[index_min_element];
        numbers[index_min_element] = temp;
            
    }

}
