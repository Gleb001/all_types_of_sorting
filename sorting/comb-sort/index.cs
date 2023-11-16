
public class BubbleSort {

    public static void Sort(int[] numbers) {

        double factor = 1.247;
        int step = numbers.Length - 1;
    
        while (step >= 1) {
            for (int index = 0; index + step < numbers.Length; index++) {
                if (numbers[index] > numbers[index + step]) {
                    int temp = numbers[index];
                    numbers[index] = numbers[index + step];
                    numbers[index + step] = temp;
                }
            }
            step = (int) (step / factor);
        }
    
        // пузырьковая сортировка | bubble sort
        for (int index_i = 0; index_i < numbers.Length - 1; index_i++) {
            for (int index_n = 0; index_n < numbers.Length - (1 + index_i); index_n++) {
                if (numbers[index_n] > numbers[index_n + 1]) {
                    int temp = numbers[index_n];
                    numbers[index_n] = numbers[index_n + 1];
                    numbers[index_n + 1] = temp;
                }
            }
        }
    
    }

}