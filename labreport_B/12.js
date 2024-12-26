function checkArray() {
    const input = document.getElementById('inputArray').value;
    const result = Array.isArray(JSON.parse(input)) ? "It is an array" : "It is not an array";
    document.getElementById('result12').innerText = result;
}
