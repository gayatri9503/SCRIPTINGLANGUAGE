function joinArray() {
    const input = document.getElementById('arrayInput3').value;
    const arr = input.split(',');
    const joined = arr.join(' ');
    document.getElementById('result13').innerText = `Joined Array: ${joined}`;
}
