function checkOddEven() {
    let result = "";
    for (let i = 0; i <= 15; i++) {
        result += `${i} is ${i % 2 === 0 ? 'Even' : 'Odd'}<br>`;
    }
    document.getElementById('result16').innerHTML = result;
}
