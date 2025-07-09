<?php
// File upload example
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['myfile'])) {
    $file = $_FILES['myfile'];
    echo "Uploaded: " . $file['name'];
}
?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="myfile">
    <input type="submit" value="Upload">
</form> 