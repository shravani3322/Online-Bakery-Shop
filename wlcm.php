<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page if not logged in
    header('Location: form.html');
    exit();
}

// Display a welcome message
echo 'Welcome, ' . $_SESSION['username'] . '!';

// You can include your secure content here
?>


