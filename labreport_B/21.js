function getWeekend() {
    const today = new Date();
    const dayOfWeek = today.getDay();
    const nextSaturday = new Date(today);
    nextSaturday.setDate(today.getDate() + (6 - dayOfWeek));
    document.getElementById('result21').innerText = `Next Saturday is on: ${nextSaturday.toDateString()}`;
}
