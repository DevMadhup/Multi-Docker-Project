<?php
require 'config.php';
require 'db.php';

$conn = getDbConnection();

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Users</h1>
        </div>
    </header>
    <div class="container">
        <?php
        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Name</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No results found.</p>";
        }
        $conn->close();
        ?>
        <a href="create.php" class="button">Create User</a>
    </div>
</body>
</html>

