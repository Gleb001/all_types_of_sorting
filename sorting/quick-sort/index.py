
# Вспомогательные функции | helpers
def Partition(numbers: list[int], left: int, right: int) -> int:
    
    pivot = numbers[right]
    less = left
    
    for index in range(left, right):
        if (numbers[index] <= pivot):
            numbers[less], numbers[index] = numbers[index], numbers[less]
            less += 1
    
    numbers[less], numbers[right] = numbers[right], numbers[less]
    
    return less
        

def QuickSortImplemetation(numbers: list[int], left: int, right: int):
    
    if (left < right):
        q = Partition(numbers, left, right)
        QuickSortImplemetation(numbers, left, q - 1)
        QuickSortImplemetation(numbers, q + 1, right)
  


# Основная функция | main
def QuickSort(numbers: list[int]):
    if (len(numbers) > 1):
        QuickSortImplemetation(numbers, 0, len(numbers) - 1)