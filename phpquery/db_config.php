
<?php 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","ecotalanta");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
} 
//echo "connected successfully"
?>