
# Вспомогательные функции | helpers
def GetIndexMinElement(numbers: list[int], start: int, end: int) -> int:

    if (start < 0 or end > len(numbers) - 1): return -1

    result = start

    for index in range(start + 1, end):
        if (numbers[result] > numbers[index]):
            result = index

    return result
    

# Основная функция | main
def SelectionSort(numbers: list[int]):
    
    for index in range(len(numbers)):                    
               
        index_min_element = GetIndexMinElement(numbers, index, len(numbers))

        (
            numbers[index],
            numbers[index_min_element]
        ) = (
            numbers[index_min_element],
            numbers[index]
        )
        