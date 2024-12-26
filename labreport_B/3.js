function countVowels() {
    const str = document.getElementById('string2').value;
    const vowelCount = str.match(/[aeiouAEIOU]/g) ? str.match(/[aeiouAEIOU]/g).length : 0;
    document.getElementById('result3').innerText = `Number of vowels: ${vowelCount}`;
}
