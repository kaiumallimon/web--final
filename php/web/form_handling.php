<?php
// Form handling and validation
$name = $email = "";
$nameErr = $emailErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = htmlspecialchars($_POST["email"]);
    }
}
?>
<form method="post">
    Name: <input type="text" name="name">
    <span style="color:red;">* <?php echo $nameErr;?></span><br>
    Email: <input type="text" name="email">
    <span style="color:red;">* <?php echo $emailErr;?></span><br>
    <input type="submit">
</form>
<?php
echo "<h3>Your Input:</h3>";
echo $name . "<br>";
echo $email; 