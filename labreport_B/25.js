function createPersonAccount() {
    let personAccount = {
        firstName: "Sita",
        lastName: "Sharma",
        incomes: [
            { description: "Salary", amount: 5000 },
            { description: "Freelance", amount: 2000 }
        ],
        expenses: [
            { description: "Rent", amount: 1500 },
            { description: "Groceries", amount: 300 }
        ],
        totalIncome: function() {
            return this.incomes.reduce((acc, income) => acc + income.amount, 0);
        },
        totalExpense: function() {
            return this.expenses.reduce((acc, expense) => acc + expense.amount, 0);
        },
        accountInfo: function() {
            return `Account holder: ${this.firstName} ${this.lastName}`;
        },
        addIncome: function(description, amount) {
            this.incomes.push({ description, amount });
        },
        addExpense: function(description, amount) {
            this.expenses.push({ description, amount });
        },
        accountBalance: function() {
            return this.totalIncome() - this.totalExpense();
        }
    };

    document.getElementById('result25').innerHTML = `
        ${personAccount.accountInfo()}<br>
        Total Income: $${personAccount.totalIncome()}<br>
        Total Expense: $${personAccount.totalExpense()}<br>
        Account Balance: $${personAccount.accountBalance()}
    `;
}
