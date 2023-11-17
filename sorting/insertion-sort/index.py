
def InsertionSort(numbers: list[int]):
    
    for index in range(1, len(numbers)):

        value = numbers[index]
        pointer = index
        
        while (pointer > 0 and numbers[pointer - 1] > value):
            numbers[pointer] = numbers[pointer - 1]
            pointer -= 1
        
        numbers[pointer] = value
        