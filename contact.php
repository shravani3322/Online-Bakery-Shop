<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Form data submitted, process it in PHP
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $district = $_POST["district"];


        $conn = new mysqli('localhost','root','','test1');
if($conn-> connect_error){
    die('Connection failed : '.$conn->connect_error);

}else{
    $stmt = $conn->prepare("insert into contact1(firstname,lastname,district)values(?,?,?)");
    $stmt->bind_param("sss",$firstname,$lastname,$district);
    $stmt->execute();
    echo "contact sucessfull.....";
    $stmt->close();
    $conn->close();
}
       
            file_put_contents("users.txt", FILE_APPEND);

            echo "Record successful. Welcome,!";
        } else {
            // Display validation errors
           echo "<div class='error'>Error(s):<br>" . implode("<br>", $errors) . "</div>";
        }
    
    ?>