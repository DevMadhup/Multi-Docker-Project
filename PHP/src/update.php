<?php
require 'config.php';
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $conn = getDbConnection();

    $sql = "UPDATE users SET name='$name' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>

<form method="post" action="update.php">
    ID: <input type="text" name="id">
    Name: <input type="text" name="name">
    <input type="submit">
</form>
<a href="index.php">Back to Users</a>

