<?php
// Define database connection parameters
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'ty pro';

// Create a new MySQLi connection
$conn = new mysqli($db_host, $db_username, $db_password, "$db_name");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Rest of your code...

// Close database connection

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Rest of your code...

// Close database connection

$search_query = $_GET['q'];

// Query database for search results
$query = "SELECT * FROM products WHERE name LIKE '%$search_query%' OR description LIKE '%$search_query%'";
$result = mysqli_query($conn, $query);

// Create array to store search results
$search_results = array();

while ($row = mysqli_fetch_assoc($result)) {
    $search_results[] = array(
        'id' => $row['id'],
        'name' => $row['name'],
        'description' => $row['description'],
        'image' => $row['image'],
        'url' => $row['url']
    );
}

// Close database connection
mysqli_close($conn);

// Output search results in JSON format
echo json_encode($search_results);
?><?php
// Connect to database
$conn = mysqli_connect("localhost", "root", " ", "ty pro");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve search query from JavaScript
$search_query = $_GET['q'];

// Query database for search results
$query = "SELECT * FROM products WHERE name LIKE '%$search_query%' OR description LIKE '%$search_query%'";
$result = mysqli_query($conn, $query);

// Create array to store search results
$search_results = array();

while ($row = mysqli_fetch_assoc($result)) {
    $search_results[] = array(
        'id' => $row['id'],
        'name' => $row['name'],
        'description' => $row['description'],
        'image' => $row['image'],
        'url' => $row['url']
    );
}

// Close database connection
mysqli_close($conn);

// Output search results in JSON format
echo json_encode($search_results);
?>