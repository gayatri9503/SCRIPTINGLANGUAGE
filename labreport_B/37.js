const table = document.getElementById('productTable').getElementsByTagName('tbody')[0];

// Function to add a new row
function addRow() {
    const rowCount = table.rows.length;
    const row = table.insertRow(rowCount);

    // Cell 1: Row Number
    const cell1 = row.insertCell(0);
    cell1.textContent = rowCount + 1;

    // Cell 2: Product Selection
    const cell2 = row.insertCell(1);
    const select = document.createElement('select');
    select.innerHTML = `
        <option>Select Product</option>
        <option>Product 1</option>
        <option>Product 2</option>
        <option>Product 3</option>
    `;
    cell2.appendChild(select);

    // Cell 3: Price Input
    const cell3 = row.insertCell(2);
    const input = document.createElement('input');
    input.type = 'text';
    input.placeholder = 'Price';
    cell3.appendChild(input);

    // Cell 4: Delete Button
    const cell4 = row.insertCell(3);
    const button = document.createElement('button');
    button.className = 'delete-button';
    button.textContent = 'Delete';
    button.setAttribute('onclick', 'deleteRow(this)');
    cell4.appendChild(button);
}

// Function to delete a row
function deleteRow(button) {
    const row = button.parentNode.parentNode; // Get the row to delete
    row.parentNode.removeChild(row); // Remove the row

    // Update row numbers
    updateRowNumbers();
}

// Function to update row numbers after deletion
function updateRowNumbers() {
    const rows = table.getElementsByTagName('tr');
    for (let i = 0; i < rows.length; i++) {
        rows[i].cells[0].textContent = i + 1;
    }
}
