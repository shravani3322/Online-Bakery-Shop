
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width:10%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width:15%;
  border-radius:15%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 10px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body style="background-color:#FFFFE0">

<h2 style="font-family: all;font-size:50;">Login Form</h2>

<form action="" method="POST">
  <div class="imgcontainer">
    <img src="http://localhost/shraa/img/login.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <center>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required><br>

    
    <button type="submit">Login</button>
    <label><br>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
  <center>
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button></center>
    <span class="psw">Forgot <a href="http://localhost/shraa/relogin.html">password?</a></span>
  </div>


<section>
    <button onclick="redirectToPage()" style="color:white; background-color:gray;font-family:all;">GO BACK</button>

    <script>
        function redirectToPage() {
            window.location.href = "http://localhost/shraa/finalwebpage.php";
        }

   </script>
   </section>







</form>
</center>



</body>
</html>



<?php

 include_once('dbconn.php'); 


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM rg WHERE username='$username' AND pass='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<script>alert("Login successful!"); window.location.href = "finalwebpage.php";</script>';
    exit();
  } else {
    echo '<script>alert("Something wrong! Please Check your username and password.");</script>';
  }
}
$conn->close();

?>