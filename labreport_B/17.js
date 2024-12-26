function findLargestOfFive() {
    const nums = [
        parseFloat(document.getElementById('num9').value),
        parseFloat(document.getElementById('num10').value),
        parseFloat(document.getElementById('num11').value),
        parseFloat(document.getElementById('num12').value),
        parseFloat(document.getElementById('num13').value)
    ];
    const largest = Math.max(...nums);
    document.getElementById('result17').innerText = `Largest Number: ${largest}`;
}
