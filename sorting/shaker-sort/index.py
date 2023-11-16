
def ShakerSort(numbers: list[int]):
    
    if (len(numbers) == 0): return

    left = 0
    right = len(numbers) - 1
    
    while (left <= right):
        
        for index in range(left, right):
            if (numbers[index] > numbers[index + 1]):
                numbers[index], numbers[index + 1] = numbers[index + 1], numbers[index]
                
        right -= 1
        
        for index in range(right, left, -1):
            if (numbers[index - 1] > numbers[index]):
                numbers[index], numbers[index - 1] = numbers[index - 1], numbers[index]
            
        left += 1