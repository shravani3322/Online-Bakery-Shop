<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "test1";

$conn = new mysqli('localhost','root',' ','test1');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get order data from the database
$order_id = isset($_GET['order_id']) ? (int)$_GET['order_id'] : 0;
$order = [];

$sql = "SELECT product AS product, o.quantity, p.price FROM orders o JOIN products p ON o.product_id = p.id WHERE o.id = $order_id";
$result = $conn->query($sql);



$result = $conn->query($sql);

   
}else{
    $stmt = $conn->prepare("insert into fdbk(name,feedbackCategory,feedback,rating)values(?,?,?,?)");
    $stmt->bind_param("ssss",$name,$feedbackCategory,$feedback,$rating);
    $stmt->execute();
    echo "Thnks🙏.....";
    $stmt->close();
    $conn->close();
}
?>








if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $order[] = $row;
    }
} else {
    echo "0 results";
}
$conn->close();

// Start the buffer to capture the output
ob_start();
?>

<!-- Include the HTML code here -->
<table class="order-summary">
    <thead>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody id="order-summary-body">
    <?php
    foreach ($order as $item) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($item['product']) . '</td>';
        echo '<td>' . htmlspecialchars($item['quantity']) . '</td>';
        echo '<td>' . htmlspecialchars('$' . number_format($item['price'], 2)) . '</td>';
        echo '</tr>';
    }
    ?>
    </tbody>
</table>

<?php
// Get the buffered output
$html = ob_get_clean();

// Include the HTML in your PHP file
include 'orderform.html';