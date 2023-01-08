<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Dhimanas";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if (isset($_POST['reg_p'])) {
// receive all input values from the form
$pid = mysqli_real_escape_string($conn,$_POST['pid']);
$pname = mysqli_real_escape_string($conn,$_POST['pname']);
$price = mysqli_real_escape_string($conn,$_POST['pirce']);
$pcat = mysqli_real_escape_string($conn,$_POST['pcat']);
$pdetails = mysqli_real_escape_string($conn,$_POST['pdetails']);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO products (product_id,product_name,product_price,product_cat,product_details)
VALUES ('$pid','$pname', '$price', '$pcat','$pdetails')";
if ($conn->query($sql) === TRUE) {
echo "alert('New record created successfully')";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color: white;">
<thead>
<tr>
<th>ID</th>
<th>Name of Product</th>
<th>Price of Product</th>
<th>Product Catrogy</th>
<th>Product Details</th>
</tr>
</thead>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Dhimanas";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = 'SELECT * from products';
if (mysqli_query($conn, $sql)) {
echo "";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$count=1;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) { ?>
<tbody>
<tr>
<th>
<?php echo $row['product_id']; ?>
</th>
<td>
<?php echo $row['product_name']; ?>
</td>
<td>
<?php echo $row['product_price']; ?>
</td>
<td>
<?php echo $row['product_cat']; ?>
</td>
<td>
<?php echo $row['product_details']; ?>
</td>
</tr>
</tbody>
<?php
$count++;
}
} else {
echo '0 results';
}
?>
</table>
</div>
<style>
   .back a{
	text-decoration: none;
	color: white;
}
.back{
	font-size:15px;
	margin-left: 40%;
	text-align: center;
	width: 150px;
	height: 30px;
	border-radius: 10px;
	background-color: green;
}
.pad{
    padding-bottom: 25px;
}
</style>
<div class="pad">
<div class="back">
<a href="edit.php">Change the price</a>
</div>
</div>