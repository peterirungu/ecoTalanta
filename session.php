<?php
	// mysqli_connect() function opens a new connection to the MySQL server. 
	$conn = mysqli_connect("localhost", "root", "root", "ecotalanta"); 
	session_start();// Starting Session 
	// Storing Session 
	$user_check = $_SESSION['login_user']; 
	// SQL Query To Fetch Complete Information Of User 
	$query = "SELECT seller_id,first_name,last_name from seller where username = '$user_check'"; 
	$ses_sql = mysqli_query($conn, $query); 
	$row = mysqli_fetch_assoc($ses_sql); 
	$login_session = $row['username'];
?>

