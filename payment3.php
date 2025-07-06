<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		body {
  font-family: Arial, sans-serif;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
  margin: 0;
}

h1 {
  margin-bottom: 20px;
}

.scanner-container {
  display: none;
  width: 300px;
  height: 300px;
  border: 2px solid #333;
  border-radius: 10px;
  overflow: hidden;
  position: relative;
}

.scanner {
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  position: absolute;
  top: 0;
  left: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  animation: scanner-animation 2s linear infinite;
}

@keyframes scanner-animation {
  0% {
    transform: translateY(-100%);
  }
  100% {
    transform: translateY(100%);
  }
}

	</style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QR Scanner</title>
 
</head>
<body>
  <h1>QR Scanner</h1>
  <form action="payment3.php" method="post" enctype="multipart/form-data">
    <input type="file" name="qr_image" accept="image/*">
    <button type="submit">Scan</button>
  </form>
  <div class="scanner-container">
    <div class="scanner"></div>
  </div>
  <?php
require 'phpqrcode/qrlib.php';
function decodeQRCode($imagePath) {
    $output = shell_exec("java-zxing.jar $imagePath");
    return $output;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if file is uploaded
    if(isset($_FILES['qr_image']) && $_FILES['qr_image']['error'] === UPLOAD_ERR_OK) {
        $tempPath = $_FILES['qr_image']['tmp_name'];
        $uploadPath = "uploads/" . $_FILES['qr_image']['name'];

        // Move uploaded file to uploads directory
        move_uploaded_file($tempPath, $uploadPath);

        // Decode QR code
        $result = decodeQRCode($uploadPath);
        echo "<h2>QR Code Decoded:</h2>";
        echo "<pre>$result</pre>";

        // Remove uploaded file
        unlink($uploadPath);
    } else {
        echo "<h2>Error uploading file!</h2>";
        

    }
}
?>
</body>
</html>