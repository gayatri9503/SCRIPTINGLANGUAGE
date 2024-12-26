
const countries = ["USA", "Canada", "Mexico", "Brazil", "Argentina", "Chile", "France", "Germany", "Italy", "Spain", "Australia", "India", "China", "Russia", "Japan", "South Korea", "South Africa", "Egypt", "Nigeria", "Kenya", "Turkey", "Israel", "Saudi Arabia", "United Kingdom", "Greece", "Portugal", "Poland", "Norway", "Sweden", "Denmark", "Finland", "Iceland", "Belgium", "Netherlands", "Luxembourg", "Switzerland", "Austria", "Belgium", "Norway", "Sweden", "Denmark", "Estonia", "Latvia", "Lithuania", "Finland", "Ireland", "New Zealand", "Philippines", "Vietnam", "Thailand", "Malaysia"];

function createTable() {
    let tableBody = document.getElementById('tableBody');
    let row = document.createElement('tr');
    
    for (let i = 0; i < countries.length; i++) {
        let cell = document.createElement('td');
        cell.textContent = countries[i];
        row.appendChild(cell);

        // Every 6th country creates a new row
        if ((i + 1) % 6 === 0) {
            tableBody.appendChild(row);
            row = document.createElement('tr');
        }
    }

    // Append the last row if needed
    if (row.children.length > 0) {
        tableBody.appendChild(row);
    }
}

createTable();
