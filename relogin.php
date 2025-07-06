<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Assuming you have a database connection
    // Replace the database connection details with your own
    $servername = "localhost";
    $username = "root";
    $password = " ";
    $dbname = "test1";

    // Create connection
    $conn = new mysqli('localhost','root','','test1');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if email exists in the database
    
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