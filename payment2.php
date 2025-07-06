
<!DOCTYPE html>
<html>
<head>
    <title>Generate Payment</title>
</head>
<body>
    <h1>Generate Payment</h1>
    <form action="payment2.php" method="post">
        <label for="amount">Amount:</label>
        <input type="text" id="amount" name="amount"><br><br>
        <label for="description">Description:</label>
        <input type="text" id="description" name="description"><br><br>
        <input type="submit" value="Generate Payment">
    </form>
<?php
// Check if amount is set and not empty
if(isset($_POST['amount']) && !empty($_POST['amount'])){
    // Retrieve form data
    $amount = $_POST['amount'];

} else {
    // If amount is not set or empty, display an error message
    
    exit(); // Stop further execution
}

// Retrieve other form data
$description = $_POST['description'];

// Proceed with generating payment request
// This part of the code remains unchanged
?>
</body>
</html>
