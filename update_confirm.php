<?php

// update_confirmation.php
include('db_connect.php');
$confirmation_status = $_POST['confirmation_status'];
$admin_notes = $_POST['admin_notes'];

// Perform database update using prepared statements
$update_query = "UPDATE confirm1 SET confirmation_status=?, admin_notes=? WHERE confirmation_id=?";
$stmt = mysqli_prepare($connection, $update_query);

mysqli_stmt_bind_param($stmt, 'ssi', $confirmation_status, $admin_notes, $confirmation_id);
mysqli_stmt_execute($stmt);

// Close prepared statement
mysqli_stmt_close($stmt);

// Close database connection
mysqli_close($connection);

?>