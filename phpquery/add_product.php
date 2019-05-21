<?php 
    if(isset($_POST['register']))
    {
    	
		$product_title  = $_POST['product_title'];
		$product_description  =  $_POST['product_description'];
		$product_price  =  $_POST['product_price'];
		$image_p1  = $_FILES['image_p1']['name'];
    	$image_p1_tmp  = $_FILES['image_p1']['tmp_name'];

    	$image_p2  = $_FILES['image_p2']['name'];
    	$image_p2_tmp  = $_FILES['image_p2']['tmp_name'];

    	$image_p3  = $_FILES['image_p3']['name'];
    	$image_p3_tmp  = $_FILES['image_p3']['tmp_name'];
		      

        move_uploaded_file($image_p1_tmp,"../product_images/$image_p1");
        move_uploaded_file($image_p2_tmp,"../product_images/$image_p2");
        move_uploaded_file($image_p3_tmp,"../product_images/$image_p3");

        $con = mysqli_connect("localhost","root","root","ecotalanta");

        $query = "insert into products (product_title,product_description,product_price,image_p1,image_p2,
					image_p3) 
					values ('$product_title', '$product_description', '$product_price', '$image_p1', '$image_p2', '$image_p3')"; 

        $result = mysqli_query($con, $query);

        if($result==1)
        {   
            
            
            echo "<script type='text/javascript'>
                    $(document).ready(function(){
                    $('#registerfailed').modal('show');
                    });
                    </script>";        
        }
        else {          
                echo 'haijawork';
             }
    }
?>





