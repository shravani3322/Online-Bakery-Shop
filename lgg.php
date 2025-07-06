<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Form data submitted, process it in PHP
        $username = $_POST["uname"];
        $password = $_POST["psw"];
       
        // Validate the data (you can add more validation as needed)
        $errors = [];

$conn = new mysqli('localhost','root','','test1');
if($conn-> connect_error){
    die('Connection failed : '.$conn->connect_error);

}else{
    $stmt = $conn->prepare("insert into login1(username,password)values(?,?)");
    $stmt->bind_param("ss",$username,$password);
    $stmt->execute();
    echo "login sucess.....";
    $stmt->close();
    $conn->close();
}



        
        if (strlen($password) < 6) {
            $errors[] = "Password should be at least 6 characters long";
        }

        if (empty($errors)) {
           
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            
            file_put_contents("users.txt", FILE_APPEND);

            echo "Login successful. Welcome, $username!";
        } else {
            
            echo "<div class='error'>Error(s):<br>" . implode("<br>", $errors) . "</div>";
            
        }
    }
    ?>
