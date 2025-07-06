<?php
// Sample user credentials (replace these with your actual authentication logic)
$validUsername = 'user123';
$validPassword = 'password123';

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input from the login form
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Validate credentials (replace this with your actual authentication logic)
    if ($username === $validUsername && $password === $validPassword) {
        // Successful login
        echo json_encode(['status' => 'success', 'message' => 'Login successful']);
    } else {
        // Failed login
        echo json_encode(['status' => 'error', 'message' => 'Invalid username or password']);
    }
} else {
    // Handle non-POST requests (if needed)
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>
