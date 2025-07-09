<?php
// Initialize variables
$location = '';
$area = '';
$units = 0;
$total_bill = 0;
$error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $location = $_POST['location'];
  $area = $_POST['area'];
  $units = floatval($_POST['units']);

  // Connect to database
  $conn = new mysqli("localhost", "root", "", "electricity_bill");
  if ($conn->connect_error) {
    $error_message = "Database connection failed: " . $conn->connect_error;
  } else {
    // Get rates
    $stmt = $conn->prepare("SELECT rate_0_75, rate_76_200, rate_201_above FROM bill_info WHERE location = ? AND area = ?");
    $stmt->bind_param("ss", $location, $area);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $bill = 0;

      if ($units <= 75) {
        $bill = $units * $row['rate_0_75'];
      } elseif ($units <= 200) {
        $bill = (75 * $row['rate_0_75']) + (($units - 75) * $row['rate_76_200']);
      } else {
        $bill = (75 * $row['rate_0_75']) + (125 * $row['rate_76_200']) + (($units - 200) * $row['rate_201_above']);
      }

      $surcharge_rate = 0;
      if (strtolower($location) === 'dhaka') {
        $surcharge_rate = 0.20; // 20%
      } elseif (strtolower($location) === 'chittagong') {
        $surcharge_rate = 0.15; // 15%
      }

      $surcharge = $bill * $surcharge_rate;
      $total_bill = round($bill + $surcharge, 2);
    } else {
      $error_message = "No rate data found for selected location and area.";
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Bill Summary</title>
  <style>
    html,body {
      padding: 40px;
      width: 100%;
      height: 100vh;
      margin: 0px auto;
      display:flex;
      align-items:center;
      justify-content:center;
    }
    .summary {
      padding: 20px;
      border: 2px solid gray;
      width: 400px;
      margin: auto;
      border-radius: 10px;
    }
    .summary h2 {
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="summary">
    <h2>Bill Summary</h2>
    <?php if ($error_message): ?>
      <p style="color: red;"><strong>Error:</strong> <?= htmlspecialchars($error_message) ?></p>
      <p><a href="ques3.html">Go back to form</a></p>
    <?php else: ?>
      <p><strong>Your Location:</strong> <?= htmlspecialchars($location) ?></p>
      <p><strong>Your Area:</strong> <?= htmlspecialchars($area) ?></p>
      <p><strong>Units Consumed:</strong> <?= htmlspecialchars($units) ?></p>
      <p><strong>Total Bill:</strong> <?= $total_bill ?> BDT</p>
      <p><a href="ques3.html">Calculate another bill</a></p>
    <?php endif; ?>
  </div>
</body>
</html>
