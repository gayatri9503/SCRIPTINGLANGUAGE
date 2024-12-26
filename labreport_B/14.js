function sortArray() {
    const input = document.getElementById('arrayInput4').value;
    const arr = input.split(',').map(Number);
    arr.sort((a, b) => a - b);
    document.getElementById('result14').innerText = `Sorted Array: ${arr}`;
}
