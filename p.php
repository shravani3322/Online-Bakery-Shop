<!DOCTYPE html>
<html>

<head>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">

<style>
.mySlides {display:none;}
</style>
</head>

<body>  
        
  <img class="mySlides" src="http://localhost/shraa/img/p1.jpg" style="width:100%">
  
  <img class="mySlides" src="http://localhost/shraa/img/Screenshot_20230925_115610.jpg" style="width:100%">
  <img class="mySlides" src="http://localhost/shraa/img/Chhota-Bheem-Laddu-Images-GIF.gif" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 1000);
}
</script>
 <form method="post">
  <label for="productnumber">product number:</label>
  <input type="text" name="productnumber" name="productnumber" required>
  <br><br>
  <label for="newprice">newprice</label>
  <input type="text" name="newprice" nmae="newprice" required>
  <br><br>
  <input type="submit" name="submit"  value="updateprice">
</form>


</body>
</html>