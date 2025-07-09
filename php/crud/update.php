<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Update User</title>
</head>
<body>
<?php
if (!isset($_GET['id'])) {
    echo "<p>No user ID provided.</p>";
    exit;
}
$id = intval($_GET['id']);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "<p>User updated successfully!</p>";
    } else {
        echo "<p>Error: $conn->error</p>";
    }
}
$result = $conn->query("SELECT * FROM users WHERE id=$id");
if ($row = $result->fetch_assoc()) {
?>
<h2>Edit User</h2>
<form method="post">
    Name: <input type="text" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required><br>
    Email: <input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required><br>
    <input type="submit" value="Update User">
</form>
<?php } else { echo "<p>User not found.</p>"; } ?>
<p><a href="read.php">Back to User List</a></p>
</body>
</html> 