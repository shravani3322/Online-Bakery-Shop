
<html>
<head>
	<title>UPDATE PRODUCT</title>
</head>
<body>
	<h2>updtae product price</h2>
<form method="post">
	<label for="productnumber">product number:</label>
	<input type="text" name="productnumber" name="productnumber" required>
	<br><br>
	<label for="newprice">newprice</label>
	<input type="text" name="newprice" nmae="newprice" required>
	<br><br>
	<input type="submit" name="submit"  value="updateprice">
</form>
<?php
if($_SERVER["METHOD"]=="post"){
	$productnumber= $_POST["productnumber"];
	$newprice= $_POST["newprice"];
	$servername="localhost";
	$username="root";
	$password='';
	$dbname="product";footer {
            background-color:black;
            color:lightgoldenrodyellow;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

	$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("connection failed:".$conn->connect_error);

}
if(!empty($productnumber)&& is_numeric($newprice)&& $newprice>0){
	$sql=""
	if($conn->query($sql)===TRUE)
	{
		echo"<p>price for product number $productnumber has been updated to $newprice.</p>";

	}
	else
	{
echo"<p>plz eneter a valid product number and a positive numeric price.</p>;

	}
	$conn->close();

}
}
?>
</body>
</html>
<div class="w3-content w3-section" style="max-width:10000px">
<div class="w3-content w3-section" style="max-width:10000px">




footer {
            background-color:black;
            color:lightgoldenrodyellow;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }