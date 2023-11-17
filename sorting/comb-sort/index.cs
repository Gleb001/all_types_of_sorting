
// Вспомогательные функции | helpers
void Swap(int[] numbers, int index_1, int index_2) {
    int temp = numbers[index_1];
    numbers[index_1] = numbers[index_2];
    numbers[index_2] = temp;
}

// Основная функция | main
void CombSort(int[] numbers) {

    double factor = 1.247;
    int step = numbers.Length - 1;
    
    while (step >= 1) {
        for (int index = 0; index + step < numbers.Length; index++) {
            if (numbers[index] > numbers[index + step]) {
                Swap(numbers, index, index + step);
            }
        }
        step = (int) (step / factor);
    }
    
    // пузырьковая сортировка | bubble sort
    for (int index_i = 0; index_i < numbers.Length - 1; index_i++) {
        for (int index_n = 0; index_n < numbers.Length - (1 + index_i); index_n++) {
            if (numbers[index_n] > numbers[index_n + 1]) {
                Swap(numbers, index_n, index_n + 1);
            }
        }
    }
    
}