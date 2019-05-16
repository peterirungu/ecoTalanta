<?php
	include 'header.php';
	include 'nav.php'
?>

<div class="search-row-wrapper" style="background-image: url(images/bg.jpg)">
	<div class="inner">
		<div class="container ">
			<div class="container text-center">
	            <h1 class="intro-title animated fadeInDown">  Manage Your eco-Talanta Account </h1>
	        </div>
		</div>
	</div>
</div>

<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 login-box">
                <div class="card card-default">
                    <div class="panel-intro text-center">
                        <h2 class="logo-title">
                            <!-- Original Logo will be placed here  -->
                            <span class="logo-icon">
                                <i class="fas fa-recycle ln-shadow-logo shape-0"></i> </span> eco-<span>Talanta </span>
                        </h2>
                    </div>
                    <div class="card-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="sender-email" class="control-label">Username:</label>

                                <div class="input-icon"><i class="icon-user fa"></i>
                                    <input id="sender-email" type="text" placeholder="Username"
                                           class="form-control email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="user-pass" class="control-label">Password:</label>

                                <div class="input-icon"><i class="icon-lock fa"></i>
                                    <input type="password" class="form-control" placeholder="Password"
                                           id="user-pass">
                                </div>
                            </div>
                            <div class="form-group">
                                <a href="seller_account_home.php" class="btn btn-primary  btn-block">Login</a>
                            </div>                           

                        </form>
                    </div>
                    <div class="card-footer">

                        <div class="checkbox pull-left">
                            <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description"> Keep me logged in</span>
                            </label>
                        </div>


                        <p class="text-center pull-right"><a href="forgot-password.html"> Lost your password? </a>
                        </p>

                        <div style=" clear:both"></div>
                    </div>
                </div>
                <div class="login-box-btm text-center">
                    <p> Don't have an account? <br>
                        <a href="register.php"><strong>Sign Up !</strong> </a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.main-container -->


<?php include 'footer.php' ?>