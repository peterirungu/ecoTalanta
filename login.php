<?php
    session_start(); // Starting Session 
    $error = ''; // Variable To Store Error Message 
    if (isset($_POST['submit'])) { 
      if (empty($_POST['username']) || empty($_POST['password'])) { 
        $error = "Username or Password is invalid"; 
      } 
      else{ 
        // Define $username and $password 
        $username = $_POST['username']; 
        $password = $_POST['password']; 
        // mysqli_connect() function opens a new connection to the MySQL server. 
        $conn = mysqli_connect("localhost", "root", "root", "ecotalanta"); 
        // SQL query to fetch information of registerd users and finds user match. 
        $query = "SELECT email, password from seller where username=? AND password=? LIMIT 1"; 
        // To protect MySQL injection for Security purpose 
        $stmt = $conn->prepare($query); 
        $stmt->bind_param("ss", $username, $password); 
        $stmt->execute(); 
        $stmt->bind_result($username, $password); 
        $stmt->store_result(); 
        if($stmt->fetch()) //fetching the contents of the row { 
          $_SESSION['login_user'] = $username; // Initializing Session 
        header("location: seller_account_home.php"); // Redirecting To Profile Page 
      } 
      mysqli_close($conn); // Closing Connection 
    } 
?>

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
                        <div style = "font-size:11px; color:#cc0000; margin-top:10px">
                            <?php echo $error; ?>                                
                        </div>
                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label for="sender-email" class="control-label">Username:</label>

                                <div class="input-icon"><i class="icon-user fa"></i>
                                    <input id="username" name="username" type="text" placeholder="Username"
                                           class="form-control email" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="user-pass" class="control-label">Password:</label>

                                <div class="input-icon"><i class="icon-lock fa"></i>
                                    <input type="password" class="form-control" placeholder="Password"
                                           id="password" name="password" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary  btn-block" type="submit" name="submit">Login</button>
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
<?php 
    include 'templates/page_bottom_contact.php';
    include 'footer.php' 
?>