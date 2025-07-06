<?php
// db_connect.php

$db_host = 'localhost';
$db_user = 'root';
$db_password = ' ';
$db_name = 'test1';

$connection = mysqli_connect('localhost','root','','test1');

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
