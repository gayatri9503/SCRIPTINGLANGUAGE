function removeCharacters() {
    const input = document.getElementById('inputString2').value;
    const count = parseInt(document.getElementById('charCount').value, 10);
    const result = input.slice(0, -count);
    document.getElementById('result23').innerText = `Modified String: ${result}`;
}
