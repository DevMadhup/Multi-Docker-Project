<?php
require 'config.php';
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $conn = getDbConnection();

    $sql = "INSERT INTO users (name) VALUES ('$name')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Create User</h1>
        </div>
    </header>
    <div class="container">
        <form method="post" action="create.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <input type="submit" value="Create">
        </form>
        <a href="index.php" class="button">Back to Users</a>
    </div>
</body>
</html>

