<?php
// check_username.php
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    // Simulate a database query (for example, using an array of existing usernames)
    $existingUsernames = ['john', 'admin', 'user123'];

    if (in_array($username, $existingUsernames)) {
        echo "Username is taken.";
    } else {
        echo "Username is available.";
    }
}
?>

