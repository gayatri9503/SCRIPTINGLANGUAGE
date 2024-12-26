function capitalizeWords() {
    const str = document.getElementById('string3').value;
    const capitalized = str.replace(/\b\w/g, char => char.toUpperCase());
    document.getElementById('result4').innerText = `Capitalized: ${capitalized}`;
}
