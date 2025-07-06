<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    $customer_name = $_POST['customer_name'];
    $customer_email = $_POST['customer_email'];

    // Prepare order data
    $order_data = array(
        'product' => $product,
        'quantity' => $quantity,
        'customer_name' => $customer_name,
        'customer_email' => $customer_email
    );

    // Convert order data to JSON
    $json_data = json_encode($order_data);

    
    $url = 'http://localhost/shraa/onlineorder.html';
    $options = array(
        'http' => array(
            'method'  => 'POST',
            'header'  => 'Content-Type: application/json',
            'content' => $json_data
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    // Check if the order was successfully sent
    if ($result !== false) {
        echo "Order sent successfully!";
    } else {
        echo "Error sending order!";
    }
} else {
    // If form is not submitted, redirect to the form page
    header("Location:roughtwrk.html");
    exit;
}
?>