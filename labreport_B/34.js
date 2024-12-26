setInterval(() => {
    const now = new Date();
    const hour = now.getHours() % 12;
    const minute = now.getMinutes();
    const second = now.getSeconds();

    document.getElementById('hour').style.transform = `rotate(${hour * 30}deg)`;
    document.getElementById('minute').style.transform = `rotate(${minute * 6}deg)`;
    document.getElementById('second').style.transform = `rotate(${second * 6}deg)`;
}, 1000);
