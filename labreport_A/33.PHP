<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'school1');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create Course or Student
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];

    if ($action === 'add_course') {
        $title = $conn->real_escape_string($_POST['title']);
        $duration = (int)$_POST['duration'];

        $stmt = $conn->prepare("INSERT INTO courses (title, duration, status, created_at) VALUES (?, ?, 'active', NOW())");
        $stmt->bind_param('si', $title, $duration);

        if ($stmt->execute()) {
            echo "Course added successfully!";
        } else {
            echo "Error adding course: " . $stmt->error;
        }
        $stmt->close();
    } elseif ($action === 'add_student') {
        $name = $conn->real_escape_string($_POST['name']);
        $course_id = (int)$_POST['course_id'];
        $fee = (int)$_POST['fee'];
        $rollno = $conn->real_escape_string($_POST['rollno']);
        $phone = $conn->real_escape_string($_POST['phone']);
        $address = $conn->real_escape_string($_POST['address']);
        $dob = $conn->real_escape_string($_POST['dob']);

        $stmt = $conn->prepare("INSERT INTO students (name, course_id, fee, rollno, phone, address, dob, status, created_at) 
                                VALUES (?, ?, ?, ?, ?, ?, ?, 'active', NOW())");
        $stmt->bind_param('siissss', $name, $course_id, $fee, $rollno, $phone, $address, $dob);

        if ($stmt->execute()) {
            echo "Student added successfully!";
        } else {
            echo "Error adding student: " . $stmt->error;
        }
        $stmt->close();
    }
}

// List courses and students
$courses = $conn->query("SELECT * FROM courses");
$students = $conn->query("SELECT * FROM students");

$conn->close();
?>

<h3>Add Course</h3>
<form method="post">
    <input type="hidden" name="action" value="add_course">
    Title: <input type="text" name="title" required><br>
    Duration (in months): <input type="number" name="duration" required><br>
    <input type="submit" value="Add Course">
</form>

<h3>Add Student</h3>
<form method="post">
    <input type="hidden" name="action" value="add_student">
    Name: <input type="text" name="name" required><br>
    Course ID: <input type="number" name="course_id" required><br>
    Fee: <input type="number" name="fee" required><br>
    Roll No: <input type="text" name="rollno" required><br>
    Phone: <input type="text" name="phone" required><br>
    Address: <input type="text" name="address" required><br>
    DOB: <input type="date" name="dob" required><br>
    <input type="submit" value="Add Student">
</form>

<h3>Courses</h3>
<ul>
    <?php while ($course = $courses->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($course['title']) . " (" . htmlspecialchars($course['duration']) . " months)</li>";
    } ?>
</ul>

<h3>Students</h3>
<ul>
    <?php while ($student = $students->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($student['name']) . " (Course ID: " . htmlspecialchars($student['course_id']) . ")</li>";
    } ?>
</ul>

