<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border=1>";
  echo "<th>SL</th><th>Name</th><th>ID</th><th>DEPT</th><th>CGPA</th><th>AGE</th>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
        echo "<td>$row[sl]</td><td>$row[st_name]</td><td>$row[st_id]</td><td>$row[st_dept]</td><td>$row[st_cgpa]</td><td>$row[st_age]</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
----------------------------------------------------------
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $sum = 0;
  while($row = $result->fetch_assoc()) {
    if($row["st_cgpa"] > 3 && ($row["st_dept"] == "CSE" || $row["st_dept"] == "cse")){
        $sum = $sum + $row["st_age"];
    }
  }
  echo $sum;
  

} else {
  echo "0 results";
}
$conn->close();
?>