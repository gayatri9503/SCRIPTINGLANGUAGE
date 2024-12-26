let count = 0;

const counterDisplay = document.getElementById('counter');
const incrementBtn = document.getElementById('increment');
const decrementBtn = document.getElementById('decrement');
const resetBtn = document.getElementById('reset');

incrementBtn.addEventListener('click', () => {
    count++;
    counterDisplay.textContent = count;
});

decrementBtn.addEventListener('click', () => {
    count--;
    counterDisplay.textContent = count;
});

resetBtn.addEventListener('click', () => {
    count = 0;
    counterDisplay.textContent = count;
});