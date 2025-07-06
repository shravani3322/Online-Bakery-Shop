<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
      background-image: url("http://localhost/shraa/img/cntbc2.png");
      background-size: cover;
      font-family:all, sans-serif;
      background-color: #f4f4f4;
    }

    .container {
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    input {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      box-sizing: border-box;
      font-size: 16px;
    }

    button {
      background-color: #4caf50;
      color: white;
      padding: 15px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 18px;
    }
  </style>
</head>

<body>
  <br><br>
  <div class="container">
    <div class="login-container">
      <h3 style="color: black;"><b>Register Here..</b></h3><br>
      <form id="" method="POST">
        <div class="form-group">
          <input type="text" class="form-control center-placeholder" name="username" id="username" placeholder="Username" required>
        </div>

        <div class="form-group">
          <input type="text" class="form-control center-placeholder" name="mob" id="mob" placeholder="Mobile Number" required maxlength="10">
        </div>

        <div class="form-group">
          <input type="text" class="form-control center-placeholder" name="email" id="email" placeholder="Email" required>
        </div>

        <div class="form-group">
          <input type="password" name="pass" class="form-control center-placeholder" id="myInput" placeholder="Enter password" required maxlength="10">
          <div class="form-group show-password">
            <input type="checkbox" onclick="myFunction()">&nbsp;Show Password
          </div>
        </div>

        <div class="form-group">
          <input type="text" class="form-control center-placeholder" name="addr" id="address" placeholder="Enter Addresss" required>
        </div>
        <button type="submit" name="submit" class="button type1">
          <span class="btn-txt"><i>Register</i></span>
        </button>

      </form><br>
      <a href="login.html">Have an account?<b> Log in</b></a>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script>
    function myFunction() {
      var x = document.getElementById("myInput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
  </script>
</body>



<?php

include_once('dbconn.php');

if (isset($_POST['submit'])) {



  $username = $_POST['username'];
  $mob = $_POST['mob'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $addr = $_POST['addr'];

  $sql ="INSERT INTO signup(username,mob,email,pass,addr) values('$username','$mob','$email','$pass','$addr')";

  $result = mysqli_query($conn, $sql);

  if ($conn->query($sql) === TRUE) {

    echo '<script>alert("Registration successful!"); window.location.href = "login.html";</script>';
    exit();
  } else {
    echo '<script>alert("Registration unsuccessful. Please try again.");</script>';
  }
}

// Close the database connection
$conn->close();

?>

</html>
