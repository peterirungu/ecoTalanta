<?php
	include 'header.php';
	include 'nav_auth.php';
?>


    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-3 page-sidebar">
                    <aside>
                        <div class="inner-box">
                            <div class="user-panel-sidebar">
                                <div class="collapse-box">
                                    <h5 class="collapse-title no-border"> My Profile 
                                        <a href="#MyClassified"  aria-expanded="true"  data-toggle="collapse" class="pull-right">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </h5>
                                    <div class="panel-collapse collapse show" id="MyClassified">
                                        <ul class="acc-list">
                                            <li>
                                                <a class="active" href="seller_account_home.php">
                                                    <i class="icon-home"></i>Personal profile
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /.collapse-box  -->
                                <div class="collapse-box">
                                    <h5 class="collapse-title">Active Seller Account 
                                        <a href="#MyAds" aria-expanded="true"  data-toggle="collapse" class="pull-right">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </h5>

                                    <div class="panel-collapse collapse show" id="MyAds">
                                        <ul class="acc-list">
                                            <li>
                                                <a href="#"><i class="icon-docs"></i> My Product ads</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-heart"></i> Orders </a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-star-circled"></i>Messages </a>
                                            </li>                                            
                                        </ul>
                                    </div>
                                </div>
                                <!-- /.collapse-box  -->
                                <div class="collapse-box">
                                    <h5 class="collapse-title"> Account Signout 
                                        <a href="#TerminateAccount" aria-expanded="true"  data-toggle="collapse" class="pull-right">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </h5>
                                    <div class="panel-collapse collapse show" id="TerminateAccount">
                                        <ul class="acc-list">
                                            <li>
                                                <a href="#"><i class="icon-cancel-circled "></i> Logout </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /.collapse-box  -->
                            </div>
                        </div>
                        <!-- /.inner-box  -->
                    </aside>
                </div>
                <!--/.page-sidebar-->

                <div class="col-md-9 page-content">
                    <div class="inner-box">
                        <div class="row">
                            <div class="col-md-4 col-xs-4 col-xxs-12">
                                <h3 class="no-padding text-center-480 useradmin">
                                    <a href="#"> <img class="userImg"src="images/user.jpg" alt="user"> Jhon Doe</a>
                                </h3>
                            </div>
                            <div class="col-md-8 col-xs-8 col-xxs-12">
                                <div class="header-data text-center-xs">
                                    <div class="hdata">
                                        <div class="mcol-left">
                                            <!-- Icon with red background -->
                                            <i class="fas fa-envelope ln-shadow"></i>
                                        </div>
                                        <div class="mcol-right">
                                            <!-- Number of visitors -->
                                            <p><a href="#">Profile Picture</a></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <!-- Traffic data -->
                                    <div class="hdata">
                                        <div class="mcol-left">
                                            <!-- Icon with red background -->
                                            <i class="fa fa-eye ln-shadow"></i>
                                        </div>
                                        <div class="mcol-right">
                                            <!-- Number of visitors -->
                                            <p><a href="#">Add Product</a></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <!-- revenue data -->
                                    <div class="hdata">
                                        <div class="mcol-left">
                                            <!-- Icon with green background -->
                                            <i class="icon-th-thumb ln-shadow"></i>
                                        </div>
                                        <div class="mcol-right">
                                            <!-- Number of visitors -->
                                            <p><a href="#">View Orders</em></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <!-- revenue data -->
                                    <div class="hdata">
                                        <div class="mcol-left">
                                            <!-- Icon with blue background -->
                                            <i class="fa fa-user ln-shadow"></i>
                                        </div>
                                        <div class="mcol-right">
                                            <!-- Number of visitors -->
                                            <p><a href="#">Read Messages</a></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="inner-box">
                        <div class="welcome-msg">
                            <h3 class="page-sub-header2 clearfix no-padding">Hello Jhon Doe </h3>
                            <span class="page-sub-header-sub small"> Welcome to your eco-Talanta Account.</span>
                        </div>
                        <div id="accordion" class="panel-group">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title"><a href="#collapseB1" aria-expanded="true"  data-toggle="collapse" > My
                                        details </a></h4>
                                </div>
                                <div class="panel-collapse collapse show" id="collapseB1">
                                    <div class="card-body">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">First Name</label>

                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="Jhon">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Last name</label>

                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="Doe">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Email</label>

                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control"
                                                           placeholder="jhon.deo@example.com">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Address</label>

                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="..">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Phone" class="col-sm-3 control-label">Phone</label>

                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="Phone"
                                                           placeholder="880 124 9820">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Postcode</label>

                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="1217">
                                                </div>
                                            </div>

                                            <div class="form-group hide"> <!-- remove it if dont need this part -->
                                                <label class="col-sm-3 control-label">Facebook account map</label>

                                                <div class="col-sm-9">
                                                    <div class="form-control"><a class="link"
                                                                                 href="fb.html">Jhone.doe</a> <a
                                                            class=""> <i class="fa fa-minus-circle"></i></a></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9"></div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" class="btn btn-default">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title"><a href="#collapseB2" aria-expanded="true"  data-toggle="collapse" > Settings </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapseB2">
                                    <div class="card-body">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox">
                                                            Comments are enabled on my ads </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">New Password</label>

                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Confirm Password</label>

                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" class="btn btn-default">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title"><a href="#collapseB3" aria-expanded="true"  data-toggle="collapse" >
                                        Preferences </a></h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapseB3">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox">
                                                        I want to receive newsletter. </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox">
                                                        I want to receive advice on buying and selling. </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.row-box End-->

                    </div>
                </div>
                <!--/.page-content-->
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>
    <!-- /.main-container -->

<?php	include 'footer.php' ?>