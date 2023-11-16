
function shakerSort(numbers) {
    
    if (numbers.length == 0) return;
    
    let left = 0;
    let right = numbers.length - 1;
    
    while (left <= right) {
        
        for (let index = left; index < right; index++) {
            if (numbers[index] > numbers[index + 1]) {
                [numbers[index], numbers[index + 1]] = [numbers[index + 1], numbers[index]];
            }
        }

        right--;
        
        for (let index = right; index > left; index--) {
            if (numbers[index - 1] > numbers[index]) {
                [numbers[index], numbers[index - 1]] = [numbers[index - 1], numbers[index]];
            }
        }

        left++;
        
    }
    
}