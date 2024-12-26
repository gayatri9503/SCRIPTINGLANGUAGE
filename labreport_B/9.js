function largerSmallerThree() {
    const num1 = parseFloat(document.getElementById('num6').value);
    const num2 = parseFloat(document.getElementById('num7').value);
    const num3 = parseFloat(document.getElementById('num8').value);
    const larger = Math.max(num1, num2, num3);
    const smaller = Math.min(num1, num2, num3);
    document.getElementById('result9').innerText = `Larger: ${larger}, Smaller: ${smaller}`;
}
