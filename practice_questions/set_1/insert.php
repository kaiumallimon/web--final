<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST['title'] ?? '';
    $author = $_POST['author'] ?? '';
    $genre = $_POST['genre'] ?? '';
    $price = floatval($_POST['price'] ?? 0);

    $conn = new mysqli("localhost", "root", "", "book_store");
    if ($conn->connect_error) {
        $message = "❌ Database connection failed: " . $conn->connect_error;
    } else {
        $stmt = $conn->prepare("INSERT INTO books (title, author, genre, price) VALUES (?, ?, ?, ?)");
        if ($stmt) {
            $stmt->bind_param("sssd", $title, $author, $genre, $price);
            if ($stmt->execute()) {
                $message = "✅ Book added successfully!";
            } else {
                $message = "❌ Error inserting book: " . $stmt->error;
            }
            $stmt->close();
        } else {
            $message = "❌ Prepare failed: " . $conn->error;
        }
        $conn->close();
    }
} else {
    $message = "❗ Invalid request method.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Insert Result</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 40px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .message {
      padding: 20px;
      background-color: #f3f3f3;
      border: 1px solid #ccc;
      border-radius: 10px;
      margin-bottom: 20px;
    }
    a {
      text-decoration: none;
      color: #3366cc;
    }
  </style>
</head>
<body>
  <div class="message">
    <strong><?= htmlspecialchars($message) ?></strong>
  </div>
  <a href="index.html">← Back to form</a>
</body>
</html>
