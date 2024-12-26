function sortString() {
    const str = document.getElementById('string1').value;
    const sortedStr = str.split('').sort().join('');
    document.getElementById('result2').innerText = `Sorted String: ${sortedStr}`;
}
