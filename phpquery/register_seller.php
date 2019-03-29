<?php 
include ('db_config.php');
if (isset ($_POST ['btn_register'])){
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$nick_name=$_POST['nick_name'];
$phone_number=$_POST['phone_number'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$about_seller=$_POST['about_seller'];
$password=$_POST['password'];

mysql_query ("INSERT INTO seller(first_name,last_name,nick_name,phone_number,gender,email,about_seller,password)
	values($first_name,$last_name,$nick_name,$phone_number,$gender,$email,$about_seller,$password)")or die(mysql_error());

}

?>





