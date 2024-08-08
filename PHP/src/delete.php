<?php
require 'config.php';
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $conn = getDbConnection();

    $sql = "DELETE FROM users WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>

<form method="post" action="delete.php">
    ID: <input type="text" name="id">
    <input type="submit" value="Delete">
</form>
<a href="index.php">Back to Users</a>

