<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <script>
        // Function to check if the username exists in the database
        function checkUsername() {
            const username = document.getElementById('username').value.trim();  // Trim the input
            const resultDiv = document.getElementById('result');

            // If the input field is empty, display a message
            if (username === '') {
                resultDiv.innerHTML = 'Please enter a valid username.';
                return;
            }

            // Create an XMLHttpRequest object
            const xhr = new XMLHttpRequest();
            xhr.open('GET', `?username=${encodeURIComponent(username)}`, true);  // Encode username for URL safety

            // Define what to do when the response is received
            xhr.onload = function() {
                if (xhr.status === 200) {
                    resultDiv.innerHTML = xhr.responseText;  // Display the result
                } else {
                    resultDiv.innerHTML = 'Error checking username. Please try again later.';
                }
            };

            // Handle errors
            xhr.onerror = function() {
                resultDiv.innerHTML = 'Request error. Please try again.';
            };

            // Send the request
            xhr.send();
        }
    </script>
</head>
<body>
    <h1>Password Reset</h1>
    <p>Enter Username:</p>
    <input type="text" id="username" onkeyup="checkUsername()" placeholder="Username">
    <div id="result" style="margin-top: 10px; color: red;"></div>

    <?php
    if (isset($_GET['username'])) {
        $inputUsername = $_GET['username'];

        // Database connection details
        $servername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "db_pkmc_2079_sl";

        // Create a connection
        $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare the SQL query
        $query = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($query);
        if ($stmt === false) {
            echo "Error preparing statement.";
            $conn->close();
            exit;
        }

        $stmt->bind_param("s", $inputUsername);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if username exists
        if ($result->num_rows > 0) {
            echo "Username is already taken.";
        } else {
            echo "Username is available.";
        }

        // Close connections
        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
