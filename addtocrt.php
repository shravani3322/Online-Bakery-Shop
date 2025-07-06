
<?php

include_once('dbconn.php');

session_start();

// Check if item_name and item_price are set
if (isset($_POST['item_name']) && isset($_POST['item_price'])) {
    // Store item details in session array
    $_SESSION['cart'][] = array(
        'name' => $_POST['item_name'],
        'price' => $_POST['item_price']
    );

    $username = $_POST['itemname'];
  $mob = $_POST['price'];
  

  $sql ="INSERT INTO cart(username,mob) values('$username','$mob')";

  $result = mysqli_query($conn, $sql);

  if ($conn->query($sql) === TRUE) {

    echo '<script>alert("Registration successful!"); window.location.href = "login.html";</script>';
    exit();
    echo '<h3>Cart Contents</h3>';
    echo '<ul>';
    foreach ($_SESSION['cart'] as $item) {
        echo '<li>' . $item['name'] . ' - $' . $item['price'] . '</li>';
    }
    echo '</ul>';
} else {
    echo 'Error: Item details not received.';
}
?>