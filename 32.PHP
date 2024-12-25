<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'test_db';

// Database connection
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle request
$action = $_GET['action'] ?? '';
$id = $_GET['id'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $rank = $_POST['rank'] ?? '';
    $status = $_POST['status'] ?? '';
    $created_by = $_POST['created_by'] ?? '';
    $updated_by = $_POST['updated_by'] ?? '';
    $image = '';

    // File upload
    if (!empty($_FILES['image']['name'])) {
        $target_dir = "uploads/";
        $image = $target_dir . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
    }

    if ($action === 'add') {
        $stmt = $conn->prepare("INSERT INTO records (name, rank, status, image, created_by, updated_by) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sissss", $name, $rank, $status, $image, $created_by, $updated_by);
        $stmt->execute();
        header("Location: script.php");
        exit;
    } elseif ($action === 'update' && $id) {
        $stmt = $conn->prepare("UPDATE records SET name=?, rank=?, status=?, image=?, updated_by=? WHERE id=?");
        $stmt->bind_param("sisssi", $name, $rank, $status, $image, $updated_by, $id);
        $stmt->execute();
        header("Location: script.php");
        exit;
    }
}

if ($action === 'delete' && $id) {
    $stmt = $conn->prepare("DELETE FROM records WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    header("Location: script.php");
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Records</title>
</head>
<body>
    <h1>Manage Records</h1>
    <form method="POST" enctype="multipart/form-data" action="script.php?action=<?= $action ?>&id=<?= $id ?>">
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="number" name="rank" placeholder="Rank" required><br>
        <select name="status" required>
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select><br>
        <input type="file" name="image"><br>
        <input type="text" name="created_by" placeholder="Created By"><br>
        <input type="text" name="updated_by" placeholder="Updated By"><br>
        <button type="submit">Submit</button>
    </form>

    <h2>Records</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Rank</th>
            <th>Status</th>
            <th>Image</th>
            <th>Created By</th>
            <th>Updated By</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Actions</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM records");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['rank']}</td>
                <td>{$row['status']}</td>
                <td><img src='{$row['image']}' width='50'></td>
                <td>{$row['created_by']}</td>
                <td>{$row['updated_by']}</td>
                <td>{$row['created_at']}</td>
                <td>{$row['updated_at']}</td>
                <td>
                    <a href='script.php?action=update&id={$row['id']}'>Edit</a>
                    <a href='script.php?action=delete&id={$row['id']}' onclick='return confirm(\"Are you sure?\");'>Delete</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>


