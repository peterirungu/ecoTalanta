<?php
	include 'header.php';
	include 'nav.php'
?>
<div class="search-row-wrapper" style="background-image: url(images/bg.jpg)">
	<div class="inner">
		<div class="container ">
			<div class="container text-center">
	            <h1 class="intro-title animated fadeInDown"> Registration Failed..!</h1>
	        </div>
		</div>
	</div>
</div>
<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 login-box">   
				<div class="modal-dialog modal-confirm_e">
					<div class="modal-content">
						<div class="modal-header">
							<div class="icon-box1">
								<i class="fa fa-check-circle "></i>
							</div>				
							<h4 class="text-center">Registration Failed</h4>	
						</div>
						<div class="modal-body1">
							<p class="text-center">Registered Failed. Try again.</p>
						</div>
						<div class="modal-footer">
							<a href="register.php" class="btn btn-success btn-block">
								<button class="btn btn-success btn-block">
									Try Again
								</button>
							</a>
						</div>
					</div>
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