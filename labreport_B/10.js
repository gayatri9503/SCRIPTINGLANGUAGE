function findLargest() {
    const input = document.getElementById('arrayInput').value;
    const arr = input.split(',').map(Number);
    const largest = Math.max(...arr);
    document.getElementById('result10').innerText = `Largest Number: ${largest}`;
}
