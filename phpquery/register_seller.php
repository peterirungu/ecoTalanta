<?php 
    if(isset($_POST['register']))
    {
    	$profile_picture  = $_FILES['profile_picture']['name'];
    	$profile_picture_tmp  = $_FILES['profile_picture']['tmp_name'];
		$first_name  = $_POST['first_name'];
		$last_name  =  $_POST['last_name'];
		$business_name  =  $_POST['business_name'];
		$location  =  $_POST['location'];
		$phone_number  =  $_POST['phone_number'];
		$gender  =  $_POST['gender'];
		$about_seller  =  $_POST['about_seller'];
		$email  =  $_POST['email'];
		$password  =  $_POST['password'];
		      

        move_uploaded_file($profile_picture_tmp,"../profile_pics/$profile_picture");

        $con = mysqli_connect("localhost","root","root","ecotalanta");

        $query = "insert into seller (profile_picture,first_name,last_name,business_name,location,
					phone_number,gender,about_seller,email,password) 
					values ('$profile_picture', '$first_name', '$last_name', '$business_name', '$location', 
					'$phone_number', '$gender', '$about_seller', '$email', '$password')"; 

        $result = mysqli_query($con, $query);

        if($result==1)
        {   
            
           header("Location: ../seller_registration_success.php");       
        }
        else {          
                header("Location: ../seller_registration_failed.php");
             }
    }
?>





