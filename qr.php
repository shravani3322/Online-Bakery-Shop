
<?php

// Get the payment amount from the form
$amount = $_POST['amount'];

// Generate a QR code for the payment
$qrCode = new QRCode();
$qrCode->png($amount, 'payment.png', QR_ECLEVEL_L, 4);

// Display the QR code
header('Content-Type: image/png');
readfile('payment.png');

?>