function largerSmaller() {
    const num1 = parseFloat(document.getElementById('num4').value);
    const num2 = parseFloat(document.getElementById('num5').value);
    const larger = Math.max(num1, num2);
    const smaller = Math.min(num1, num2);
    document.getElementById('result8').innerText = `Larger: ${larger}, Smaller: ${smaller}`;
}
