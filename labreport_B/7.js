function calculateMath() {
    const num1 = parseFloat(document.getElementById('num2').value);
    const num2 = parseFloat(document.getElementById('num3').value);
    const add = num1 + num2;
    const sub = num1 - num2;
    const mul = num1 * num2;
    const div = num1 / num2;
    document.getElementById('result7').innerText = `Addition: ${add}, Subtraction: ${sub}, Multiplication: ${mul}, Division: ${div}`;
}
