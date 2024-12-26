window.onload = function() {
    let container = document.getElementById('container');
    for (let i = 0; i <= 100; i++) {
        let div = document.createElement('div');
        div.textContent = i;
        
        // Check if the number is even, odd, or prime
        if (i % 2 === 0) {
            div.style.backgroundColor = 'green'; // Even
        } else if (isPrime(i)) {
            div.style.backgroundColor = 'red'; // Prime
        } else {
            div.style.backgroundColor = 'yellow'; // Odd
        }
        
        container.appendChild(div);
    }
};

function isPrime(num) {
    if (num < 2) return false;
    for (let i = 2; i <= Math.sqrt(num); i++) {
        if (num % i === 0) return false;
    }
    return true;
}
