const clockDiv = document.getElementById('clock');

setInterval(() => {
    const now = new Date();
    clockDiv.textContent = now.toLocaleTimeString();
}, 1000);