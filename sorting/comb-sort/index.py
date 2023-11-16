
def CombSort(numbers: list[int]):
    
    factor = 1.247
    step = len(numbers) - 1
    
    while (step >= 1):
        
        for index in range(len(numbers) - step):
            if (numbers[index] > numbers[index + step]):
                numbers[index], numbers[index + step] = numbers[index + step], numbers[index]
        
        step = int(step / factor)
        
    # пузырьковая сортировка | bubble sort
    for index_i in range(len(numbers)):
        for index_n in range(len(numbers) - (1 + index_i)):
            if (numbers[index_n] > numbers[index_n + 1]):
                numbers[index_n], numbers[index_n + 1] = numbers[index_n + 1], numbers[index_n]