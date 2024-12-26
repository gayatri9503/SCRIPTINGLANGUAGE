function validateForm() {
    // Validate Name
    const name = document.getElementById('name').value;
    if (name === "" || /\d/.test(name)) {
        alert("Name must not be empty and should not contain numbers.");
        return false;
    }

    // Validate Username
    const username = document.getElementById('username').value;
    if (username === "" || /\s/.test(username) || /[^a-zA-Z0-9_]/.test(username)) {
        alert("Username must not contain spaces and only contain letters, numbers, and underscores.");
        return false;
    }

    // Validate Phone Number
    const phone = document.getElementById('phone').value;
    const phoneRegex = /^(98|97|96)\d{7}$/;
    if (phone === "" || !phoneRegex.test(phone)) {
        alert("Phone number must start with 98, 97, or 96 and be followed by 7 digits.");
        return false;
    }

    // Validate Gender
    const gender = document.querySelector('input[name="gender"]:checked');
    if (!gender) {
        alert("Please select a gender.");
        return false;
    }

    // Validate Email
    const email = document.getElementById('email').value;
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (email === "" || !emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    // Validate Password
    const password = document.getElementById('password').value;
    const passwordRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d@$!%*?&]{8,}$/;
    if (password === "" || !passwordRegex.test(password)) {
        alert("Password must be at least 8 characters long, include at least one uppercase letter, one lowercase letter, one digit, and one special character.");
        return false;
    }

    // Validate Course Selection
    const course = document.getElementById('course').value;
    if (course === "") {
        alert("Please select a course.");
        return false;
    }

    alert("Form submitted successfully!");
    return true; // Allow form submission if all validations pass
}
