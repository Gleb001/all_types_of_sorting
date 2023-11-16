
public class BubbleSort {

    public static void Sort(int[] numbers) {

        for (int index = 1; index < numbers.Length; index++) {
            
            int value = numbers[index];
            int pointer = index;
            
            while (pointer > 0 && numbers[pointer - 1] > value) {
                numbers[pointer] = numbers[pointer - 1];
                pointer--;
            }
            
            numbers[pointer] = value;
            
        }
    
    }

}