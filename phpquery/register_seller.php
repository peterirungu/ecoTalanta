<?php 
include ('db_config.php');

if (isset ($_POST ['submit'])){
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$nick_name=$_POST['nick_name'];
$phone_number=$_POST['phone_number'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$about_seller=$_POST['about_seller'];
$password=$_POST['password'];

$sql ="INSERT INTO seller(first_name,last_name,nick_name,phone_number,gender,email,about_seller,password)
	values($first_name,$last_name,$nick_name,$phone_number,$gender,$email,$about_seller,$password)";


if ($conn->query($sql) === TRUE) {
    echo "registered created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>





