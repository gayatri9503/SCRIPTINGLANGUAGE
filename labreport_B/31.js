function generateColoredNumbers() {
    const container = document.getElementById("number-container");

    let maxNumber = prompt("Enter the maximum number:");

    for (let i = 1; i <= maxNumber; i++) {
        const div = document.createElement("div");
        div.innerText = i;

        if (isPrime(i)) {
            div.classList.add("prime");
        } else if (i % 2 === 0) {
            div.classList.add("even");
        } else {
            div.classList.add("odd");
        }

        container.appendChild(div);
    }
}

function isPrime(num) {
    if (num <= 1) return false;
    for (let i = 2; i <= Math.sqrt(num); i++) {
        if (num % i === 0) return false;
    }
    return true;
}

window.onload = generateColoredNumbers;
