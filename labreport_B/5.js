function currentDate() {
    const date = new Date();
    const formattedDate = `${date.getMonth() + 1}-${date.getDate()}-${date.getFullYear()}`;
    document.getElementById('result5').innerText = `Current Date: ${formattedDate}`;
}
