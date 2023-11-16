
def bubbleSort(numbers: list[int]):
    
    for index_i in range(len(numbers) - 1):
        for index_n in range(len(numbers) - (1 + index_i)):
            if (numbers[index_n] > numbers[index_n + 1]):
                numbers[index_n], numbers[index_n + 1] = numbers[index_n + 1], numbers[index_n]