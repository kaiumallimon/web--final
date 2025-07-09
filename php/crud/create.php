<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<link rel="stylesheet" href="create.css">
<body>
<div class="main-content">
<h2 class="title">Add New User</h2>
<form method="post">
    Name: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    <input type="submit" value="Add User">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "<p class = 'status'>User added successfully!</p>";
    } else {
        echo "<p class = 'status'>Error: $conn->error</p>";
    }
}
?>
<p class='ref'><a href="read.php">View All Users</a></p>
</div>

</body>
</html> 