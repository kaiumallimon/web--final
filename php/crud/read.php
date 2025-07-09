<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>All Users</title>
</head>
<body>
<h2>User List</h2>
<table border="1" cellpadding="5">
    <tr><th>ID</th><th>Name</th><th>Email</th><th>Actions</th></tr>
    <?php
    $result = $conn->query("SELECT * FROM users");
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['name']}</td>";
        echo "<td>{$row['email']}</td>";
        echo "<td><a href='update.php?id={$row['id']}'>Edit</a> | <a href='delete.php?id={$row['id']}' onclick=\"return confirm('Delete this user?');\">Delete</a></td>";
        echo "</tr>";
    }
    ?>
</table>
<p><a href="create.php">Add New User</a></p>
</body>
</html> 