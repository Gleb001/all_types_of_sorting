
# Вспомогательные функции | helpers
def MergeSortImplemetation(numbers: list[int], buffer: list[int], left: int, right: int):
    
    if (left < right):
        
        center = (int) ((left + right) / 2)
        MergeSortImplemetation(numbers, buffer, left, center)
        MergeSortImplemetation(numbers, buffer, center + 1, right)
        
        index = left
        i = left
        j = center + 1
        while (i <= center or j <= right):
            
            if (j > right or ( i <= center and numbers[i] < numbers[j])):
                buffer[index] = numbers[i];
                i += 1
            else:
                buffer[index] = numbers[j];
                j += 1
                
            index += 1
            
        for index in range(left, right + 1):
            numbers[index] = buffer[index]
                
  
# Основная функция | main
def MergeSort(numbers: list[int]):
    if (len(numbers) > 1):
        buffer = [0] * len(numbers)
        MergeSortImplemetation(numbers, buffer, 0, len(numbers) - 1)