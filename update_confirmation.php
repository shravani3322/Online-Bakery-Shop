<?php
// db_connect.php

$db_host = 'your_database_host';
$db_user = 'your_database_user';
$db_password = 'your_database_password';
$db_name = 'your_database_name';

$connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
