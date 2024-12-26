function daysUntilChristmas() {
    const today = new Date();
    const christmas = new Date(today.getFullYear(), 11, 25);
    const difference = christmas - today;
    const daysLeft = Math.floor(difference / (1000 * 60 * 60 * 24));
    document.getElementById('result6').innerText = `Days Left Until Christmas: ${daysLeft}`;
}
