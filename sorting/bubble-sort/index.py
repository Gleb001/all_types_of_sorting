
def bubbleSort(numbers: list[int]):
    
    # 1. 
    for index_i in range(len(numbers) - 1):
        # 2.
        for index_n in range(len(numbers) - (1 + index_i)):
            # 3.
            if (numbers[index_n] > numbers[index_n + 1]):
                # 4.
                numbers[index_n], numbers[index_n + 1] = numbers[index_n + 1], numbers[index_n]