function timeDifference() {
    const date1 = new Date(document.getElementById('date1').value);
    const date2 = new Date(document.getElementById('date2').value);
    const difference = Math.abs((date2 - date1) / (1000 * 3600 * 24));
    document.getElementById('result20').innerText = `Time Difference: ${difference} days`;
}
