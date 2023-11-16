
public class ShakerSort {

    public static void Sort(int[] numbers) {

        if (numbers.Length == 0) return;
        
        int left = 0;
        int right = numbers.Length - 1;
        
        while (left <= right) {
            
            for (int index = left; index < right; index++) {
                if (numbers[index] > numbers[index + 1]) {
                    int temp = numbers[index];
                    numbers[index] = numbers[index + 1];
                    numbers[index + 1] = temp;
                }
            }
            
            right--;

            for (int index = right; index > left; index--) {
                if (numbers[index - 1] > numbers[index]) {
                    int temp = numbers[index];
                    numbers[index] = numbers[index - 1];
                    numbers[index - 1] = temp;
                }
            }
            
            left++;
            
        }

    }

}