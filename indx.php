<?php
include('cnt.php');

// Fetch data from the database
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage with PHP Database</title>
</head>
<body>

    <h1>User List</h1>

    <?php
    // Display the retrieved data
    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>ID: " . $row["id"] . " - Name: " . $row["name"] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "No users found.";
    }
    ?>

    <?php
    // Close the connection
    $conn->close();
    ?>

</body>
</html>
