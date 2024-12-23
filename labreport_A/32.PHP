<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'scripting_language');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle CRUD operations
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = isset($_POST['action']) ? $_POST['action'] : '';

    switch ($action) {
        case 'create':
            // Logic for CREATE operation
            echo "Create operation handled!";
            break;

        case 'update':
            // Logic for UPDATE operation
            echo "Update operation handled!";
            break;

        case 'delete':
            // Logic for DELETE operation
            echo "Delete operation handled!";
            break;

        default:
            echo "Invalid action!";
            break;
    }
}

$conn->close();
?>

