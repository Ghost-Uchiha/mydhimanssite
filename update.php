<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Dhimanas";
$conn = new mysqli($servername, $username, $password, $dbname);
	$id=$_GET['id'];
	
	$price=$_GET['pirce'];
	
	
	mysqli_query($conn,"update `products` set product_price='$price' where product_id='$id'");
	header('location:product.php');
?>