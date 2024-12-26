function findSmallest() {
    const input = document.getElementById('arrayInput2').value;
    const arr = input.split(',').map(Number);
    const smallest = Math.min(...arr);
    document.getElementById('result11').innerText = `Smallest Number: ${smallest}`;
}
