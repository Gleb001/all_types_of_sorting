
function bubbleSort(numbers) {

    // 1.
    for (let index_i = 0; index_i < numbers.length - 1; index_i++) {
        // 2.
        for (let index_n = 0; index_n + 1 < numbers.length - index_i; index_n++) {
            // 3.
            if (numbers[index_n] > numbers[index_n + 1]) {
                // 4.
                [ numbers[index_n], numbers[index_n + 1] ] = [ numbers[index_n + 1],  numbers[index_n] ];
            }
        }
    }

}
