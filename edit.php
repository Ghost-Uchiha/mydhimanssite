<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Dhimanas";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
?>
<link href="vendor/css/bootstrap.min.css" rel="stylesheet">
<style>
body{
	background-color: black;
	color: white;
	padding: 30px;
}
.t{
	width: 500px;
}
a{
	text-decoration: none;
	color: white;
}
.back{
	font-size:15px;
	margin-top: -30px;
	margin-left: 100px;
	text-align: center;
	width: 60px;
	height: 30px;
	border-radius: 10px;
	background-color: green;
}
</style>
<body>

<form method="get" action="update.php">
<div class="form-group">
<label for="id">Product Id</label>
<input type="text" class="t form-control" name="id" required>
</div>
<div class="form-group">
<label>Product Price</label>
<input type="text" class="t form-control"  name="pirce" required>
</div>
<button type="submit" class="btn btn-primary" name="reg_p">Submit</button>
<div class="back">
	<a href="product.php">back</a>
</div>
</form>
</body>
