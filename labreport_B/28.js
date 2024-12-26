setInterval(() => {
    document.querySelector('h1').style.color = `#${Math.floor(Math.random()*16777215).toString(16)}`;
}, 1000);

setInterval(() => {
    document.querySelector('ul').style.backgroundColor = `#${Math.floor(Math.random()*16777215).toString(16)}`;
}, 1000);

document.getElementById('python').style.backgroundColor = 'green';
document.getElementById('js').style.backgroundColor = 'yellow';
document.getElementById('react').style.backgroundColor = 'red';
document.getElementById('fullstack').style.backgroundColor = 'red';
document.getElementById('dataanalysis').style.backgroundColor = 'red';
document.getElementById('reactnative').style.backgroundColor = 'red';
document.getElementById('machinelearning').style.backgroundColor = 'red';
