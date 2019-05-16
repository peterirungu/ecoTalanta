
<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Creating a connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection to the server failed: " . $conn->connect_error);
} 
//drop database if exists IF EXISTS
$sql = "DROP DATABASE IF EXISTS ecotalanta";
if ($conn->query($sql) === TRUE) {
    echo "ecotalanta Database Deleted successfully....";
} else {
    echo "Error creating database: " . $conn->error;
}

// Creating a database named newDB
$sql = "CREATE DATABASE ecotalanta";
if ($conn->query($sql) === TRUE) {
    echo "ecotalanta Database created successfully..";
} else {
    echo "Error creating database: " . $conn->error;
}

//create tables
//seller table
$tseller = "CREATE TABLE `ecotalanta`.`seller` (
 `seller_id` INT(11) NOT NULL AUTO_INCREMENT , 
 `first_name` VARCHAR(50) NOT NULL , 
 `last_name` VARCHAR(50) NOT NULL , 
 `gender` VARCHAR(15) NOT NULL ,
 `email` VARCHAR(50) NOT NULL ,
 `about_seller` TEXT ,
 `profile_picture` VARCHAR(100) NOT NULL ,


 `business_name` VARCHAR(100) , 
 `phone_number` VARCHAR(15) ,
 `location` VARCHAR(100) ,

 `is_active` VARCHAR(50) DEFAULT 'true' ,

 `date_created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
 `date_modified` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,


 `password` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`seller_id`)) ENGINE = InnoDB COMMENT = 'seller details';";

if ($conn->query($tseller) === TRUE) {
    echo "sellers table created  successfully..";
} else {
    echo "Error creating table seller: " . $conn->error;
}

$tproduct = "CREATE TABLE `ecotalanta`.`products` ( 
	`product_id` INT NOT NULL AUTO_INCREMENT , 
    `seller_id` INT NOT NULL, 
	`product_title` VARCHAR(80) NOT NULL , 
	`product_description` VARCHAR(255) NOT NULL , 
	`product_price` REAL NOT NULL , 
	`image_p1`  VARCHAR(80) NOT NULL , 
	`image_p2`  VARCHAR(80) NOT NULL , 
	`image_p3`  VARCHAR(80) NOT NULL ,  
	`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
	PRIMARY KEY (`product_id`)) ENGINE = InnoDB;";


if ($conn->query($tproduct) === TRUE) {
    echo "products table created successfully..";
} else {
    echo "Error creating table products: " . $conn->error;
}
// closing connection
$conn->close();
?>
