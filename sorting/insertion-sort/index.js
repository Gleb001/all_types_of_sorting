
function IsertionSort(numbers) {
    
    for (let index = 1; index < numbers.length; index++) {
        
        let value = numbers[index];
        
        let pointer = index;
        
        while (pointer > 0 & numbers[pointer - 1] > value) {
            numbers[pointer] = numbers[pointer - 1];
            pointer--;
        }
        
        numbers[pointer] = value;
        
    }
    
}