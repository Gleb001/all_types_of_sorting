
public class BubbleSort {

    public static void Sort(int[] numbers) {

        // 1.
        for (int index_i = 0; index_i < numbers.Length; index_i++) {
            // 2.
            for (int index_n = 0; index_n + 1 < numbers.Length; index_n++) {
                // 3.
                if (numbers[index_n] > numbers[index_n + 1]) {
                    // 4.
                    int temp = numbers[index_n]; 
                    numbers[index_n] = numbers[index_n + 1];
                    numbers[index_n + 1] = temp; 
                }
            }
        }

    }

}