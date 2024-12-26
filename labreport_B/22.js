function checkBlank() {
    const input = document.getElementById('inputString').value;
    const result = input.trim() === "" ? "String is blank" : "String is not blank";
    document.getElementById('result22').innerText = result;
}
