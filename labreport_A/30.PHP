<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = $_FILES['profile_image'];

    if (($file['type'] === 'image/png' || $file['type'] === 'image/jpeg') && $file['size'] <= 512000) {
        move_uploaded_file($file['tmp_name'], 'uploads/' . $file['name']);
        echo "Profile image uploaded successfully!";
    } else {
        echo "Invalid file type or size.";
    }
}
?>
<form method="post" enctype="multipart/form-data">
    Upload Profile Image: <input type="file" name="profile_image" required><br>
    <input type="submit" value="Upload">
</form>
