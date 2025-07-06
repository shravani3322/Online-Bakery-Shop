<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
background-image:url("http://localhost/shraa/img/sbc3.png"); 
background-size:cover;
  font-family: Arial, Helvetica, sans-serif;color:white;}
* {box-sizing: border-box;color:black;size:10;background-image:"http://localhost/shraa/img/g2.gif"}

input[type=text], select, textarea {
  width:30%;
  padding: 12px;
  border: 3px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color:blue;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 1px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color:transparent;
  padding:10px;
}
</style>
</head>
<body>
  <center>

<br>
<br>
<br>
<br>
<br>
<br>
<h3 style="color:black;font-size:50px;font-family:all;"> Contact Here</h3>
<form action="contact.php" method="post">

<div class="container">
  <form action="/action_page.php">
    <label for="firstname">First Name</label>
    <input type="text" id="firstname" name="firstname" placeholder="Your name.."><br>

    <label for="lastname">Last Name</label>
    <input type="text" id="lastname" name="lastname" placeholder="Your last name.."><br>


    <label for="district">Select Dist</label>
    <select id="district" name="district">
      <option value="Mumabai">Mumbai</option>
      <option value="Pune">Pune</option>
      <option value="Nagar">Nagar</option>
    </select>
<br>
<br>
    <input type="submit" value="Submit">
  </form>
</div>

<footer  style="color:gray;font-family: cursive;">  you can follow us on</footer>
<br> <br>

<img src="http://localhost/shraa/img/fblogo.png" alt="Avatar" style="width:80px">
<a href="https://www.facebook.com/login/">↑
</a>
<img src="http://localhost/shraa/img/logo.jpg" alt="Avatar" style="width:80px">
<a href="https://www.instagram.com/accounts/login/">↑</a>
<img src="http://localhost/shraa/img/twit.png" alt="Avatar" style="width:80px">
<a href="https://twitter.com/i/flow/login">↑</a>



</center>
</body>
</html>
