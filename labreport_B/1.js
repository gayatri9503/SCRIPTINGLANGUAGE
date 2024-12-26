function reverseNumber() {
    const num = document.getElementById('num1').value;
    const reversed = num.split('').reverse().join('');
    document.getElementById('result1').innerText = `Reversed Number: ${reversed}`;
}
