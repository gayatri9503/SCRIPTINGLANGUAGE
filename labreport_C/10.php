<?php
// login_backend.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_POST['userId'];
    $password = $_POST['password'];

    // Example hardcoded validation
    if ($userId == "admin" && $password == "password123") {
        echo "success";
    } else {
        echo "failure";
    }
}
?>



