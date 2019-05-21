<?php
	include 'header.php';
	include 'nav.php'
?>
<div class="search-row-wrapper" style="background-image: url(images/bg.jpg)">
	<div class="inner">
		<div class="container ">
			<div class="container text-center">
	            <h1 class="intro-title animated fadeInDown">  Create your account. </h1>
	        </div>
		</div>
	</div>
</div>
<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-8 page-content">
                <div class="inner-box category-content">
                    <h2 class="title-2"><i class="icon-user-add" style="color: #138a72; font-size: large;"></i> Create your account Now.., Its free </h2>
                    <div class="row">
                        <div class="col-sm-12">
                            <form class="form-horizontal" action="phpquery/register_seller.php" method="post" enctype="multipart/form-data">
                                <fieldset>  
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="textarea">Profile Picture</label>
                                        <div class="col-lg-6">
                                            <div class="mb10">
                                                <input id="profile_picture" name="profile_picture" type="file" class="file" data-preview-file-type="text">
                                            </div>                                                     
                                        </div>
                                    </div> 
                                    <!-- Text input-->
                                    <div class="form-group  row required">
                                        <label class="col-md-4 control-label">First Name <sup>*</sup></label>
                                        <div class="col-md-6">
                                            <input name="first_name" placeholder="First Name" class="form-control input-md" required="" type="text">
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group  row required">
                                        <label class="col-md-4 control-label">Last Name <sup>*</sup></label>
                                        <div class="col-md-6">
                                            <input name="last_name" placeholder="Last Name" class="form-control input-md" required="" type="text">
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group  row required">
                                        <label class="col-md-4 control-label">Business Name <sup>*</sup></label>
                                        <div class="col-md-6">
                                            <input name="business_name" placeholder="business name" class="form-control input-md" required="" type="text">
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group  row required">
                                        <label class="col-md-4 control-label">Location <sup>*</sup></label>
                                        <div class="col-md-6">
                                            <input name="location" placeholder="Location e.g Nairobi.." class="form-control input-md" required="" type="text">
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group  row required">
                                        <label class="col-md-4 control-label">Phone Number <sup>*</sup></label>
                                        <div class="col-md-6">
                                            <input name="phone_number" placeholder="Phone Number" class="form-control input-md" required="" type="Number">            
                                        </div>
                                    </div>

                                    <!-- Multiple Radios -->
                                    <div class="form-group row">
                                        <label class="col-md-4 control-label">Gender</label>
                                        <div class="col-md-6">
                                            <div class="radio">
                                                <label for="Gender-0">
                                                    <input name="gender" id="Gender-0" value="male" checked="checked" type="radio"> Male 
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="Gender-1">
                                                    <input name="gender" id="Gender-1" value="female" type="radio"> Female 
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Textarea -->
                                    <div class="form-group row">
                                        <label class="col-md-4 control-label" for="textarea">About Yourself</label>
                                        <div class="col-md-6">
                                            <textarea class="form-control" placeholder="Enter brief description of yourself or business" id="textarea" required="" name="about_seller"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group  row required">
                                        <label for="inputEmail3" required="" class="col-md-4 control-label">Email <sup>*</sup></label>
                                        <div class="col-md-6">
                                            <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" required="">
                                        </div>
                                    </div>
                                    <div class="form-group  row required">
                                        <label for="inputPassword3" class="col-md-4 control-label">Password </label>
                                        <div class="col-md-6">
                                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required="Enter First Name" name="password">
                                                <small id="passwordHelpBlock" class="form-text text-muted"> At least 5 characters </small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 control-label"></label>
                                        <div class="col-md-8">
                                           <!--  <div class="termbox mb10">
                                                <div class="col-auto my-1 no-padding">
                                                    <div class="custom-control custom-checkbox mr-sm-2">
                                                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                                        <label class="custom-control-label" for="customControlAutosizing">  <span class="custom-control-description"> I have read and agree to the <a href="#">Terms & Conditions</a> </span></label>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div style="clear:both"></div>
                                            <button class="btn btn-primary" type="submit" name="register" value="submit">Register</button>
                                        </div>
                                    </div>
                                </fieldset>                                
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.page-content -->

            <div class="col-md-4 reg-sidebar">
                <div class="reg-sidebar-inner text-center">
                    <div class="promo-text-box"><i class=" icon-picture fa fa-4x icon-color-1"></i>

                        <h3><strong>Post Product for Free </strong></h3>

                        <p> Post your free online products with us Today. We have a big network and a well established market for all eco-friendly products locally and globally. </p>
                    </div>
                    <div class="promo-text-box"><i class=" icon-pencil-circled fa fa-4x icon-color-2"></i>

                        <h3><strong>Create and Manage product Items</strong></h3>

                        <p> Register for an account where you can add and manage your products for free. Also get to access the sellers portal to manage orders and other messages.</p>
                    </div>
                    <div class="promo-text-box"><i class="  icon-heart-2 fa fa-4x icon-color-3"></i>

                        <h3><strong>Sellers Portal and orders management.</strong></h3>

                        <p> Get a free sellers account by regestering today and manage your business/talent(s) easily and effectively. </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.main-container -->

<?php
	include 'templates/home_extra_content.php';
    include 'templates/page_bottom_contact.php';
	include 'footer.php'
?>