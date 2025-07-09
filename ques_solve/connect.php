<?php
// db.php - database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "electricity_bill";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> 