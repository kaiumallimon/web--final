<?php
include 'db.php';
if (!isset($_GET['id'])) {
    echo "<p>No user ID provided.</p>";
    exit;
}
$id = intval($_GET['id']);
$sql = "DELETE FROM users WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header('Location: read.php');
    exit;
} else {
    echo "<p>Error deleting user: $conn->error</p>";
}
?> 