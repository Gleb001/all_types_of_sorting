
// Вспомогательные функции | helpers
function GetIndexMinElement(numbers, start, end) {

    if (start < 0 | end > numbers.Length - 1) return -1;

    let result = start;

    for (let index = start + 1; index < end + 1; index++) {
        if (numbers[index] < numbers[result]) {
            result = index;
        }
    }

    return result;

}

// Основная функция | main
function SelectionSort(numbers) {
    
    for (let index = 0; index < numbers.length; index++) {

        let index_min_element = GetIndexMinElement(numbers, index, numbers.length - 1);

        [
            numbers[index],
            numbers[index_min_element],
        ] = [
            numbers[index_min_element],
            numbers[index]
        ];
        
    }
    
}
