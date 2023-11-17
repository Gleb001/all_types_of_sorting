
void BubbleSort(int[] numbers) {

    for (int index_i = 0; index_i < numbers.Length; index_i++) {
        for (int index_n = 0; index_n + 1 < numbers.Length; index_n++) {
            if (numbers[index_n] > numbers[index_n + 1]) {
                int temp = numbers[index_n]; 
                numbers[index_n] = numbers[index_n + 1];
                numbers[index_n + 1] = temp; 
            }
        }
    }

}
