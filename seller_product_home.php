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
                                        <a href="#MyProducts" aria-expanded="true"  data-toggle="collapse" class="pull-right">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </h5>

                                    <div class="panel-collapse collapse show" id="MyProducts">
                                        <ul class="acc-list">
                                            <li>
                                                <a href="seller_product_home.php"><i class="icon-docs"></i> My Product ads</a>
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
                                                <a href="index.php"><i class="icon-cancel-circled "></i> Logout </a>
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
                        <h2 class="title-2"><i class="icon-docs"></i> My Ads </h2>

                        <div class="table-responsive">
                            <div class="table-action">
                                <label for="checkAll">
                                    <input type="checkbox" id="checkAll">
                                    Select: All | <a href="#" class="btn btn-sm btn-danger">Delete <i
                                        class="glyphicon glyphicon-remove "></i></a> </label>

                                <div class="table-search pull-right col-sm-7">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-5 control-label text-right">Search <br>
                                                <a title="clear filter" class="clear-filter" href="#clear">[clear]</a>
                                            </label>

                                            <div class="col-sm-7 searchpan">
                                                <input type="text" class="form-control" id="filter">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table id="addManageTable"
                                   class="table table-striped table-bordered add-manage-table table demo"
                                   data-filter="#filter" data-filter-text-only="true">
                                <thead>
                                <tr>
                                    <th data-type="numeric" data-sort-initial="true"></th>
                                    <th> Photo</th>
                                    <th data-sort-ignore="true"> Adds Details</th>
                                    <th data-type="numeric"> Price</th>
                                    <th> Option</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="width:2%" class="add-img-selector">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">
                                            </label>
                                        </div>
                                    </td>
                                    <td style="width:14%" class="add-img-td"><a href="ads-details.html"><img
                                            class="thumbnail  img-responsive"
                                            src="images/item/12.jpg"
                                            alt="img"></a></td>
                                    <td style="width:58%" class="ads-details-td">
                                        <div>
                                            <p><strong> <a href="ads-details.html" title="Brand New Nexus 4">Brand New
                                                Nexus 4</a> </strong></p>

                                            <p><strong> Posted On </strong>:
                                                02-Oct-2014, 04:38 PM </p>

                                            <p><strong>Visitors </strong>: 221 <strong>Located In:</strong> New York
                                            </p>
                                        </div>
                                    </td>
                                    <td style="width:16%" class="price-td">
                                        <div><strong> $199</strong></div>
                                    </td>
                                    <td style="width:10%" class="action-td">
                                        <div>
                                            <p><a class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i> Edit </a>
                                            </p>

                                            <p><a class="btn btn-info btn-sm"> <i class="fa fa-mail-forward"></i> Share
                                            </a></p>

                                            <p><a class="btn btn-danger btn-sm"> <i class=" fa fa-trash"></i> Delete
                                            </a></p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:2%" class="add-img-selector">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">
                                            </label>
                                        </div>
                                    </td>
                                    <td style="width:14%" class="add-img-td"><a href="ads-details.html"><img
                                            class="thumbnail  img-responsive" src="images/item/tp/Image00020.jpg"
                                            alt="img"></a></td>
                                    <td style="width:58%" class="ads-details-td">
                                        <div>
                                            <p><strong> <a href="ads-details.html" title="I pod 16 gb">I pod 16 gb </a>
                                            </strong></p>

                                            <p><strong> Posted On </strong>:
                                                02-Oct-2014, 04:38 PM </p>

                                            <p><strong>Visitors </strong>: 680 <strong>Located In:</strong> New York
                                            </p>
                                        </div>
                                    </td>
                                    <td style="width:16%" class="price-td">
                                        <div><strong> $90</strong></div>
                                    </td>
                                    <td style="width:10%" class="action-td">
                                        <div>
                                            <p><a class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i> Edit </a>
                                            </p>

                                            <p><a class="btn btn-info btn-sm"> <i class="fa fa-mail-forward"></i> Share
                                            </a></p>

                                            <p><a class="btn btn-danger btn-sm"> <i class=" fa fa-trash"></i> Delete
                                            </a></p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:2%" class="add-img-selector">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">
                                            </label>
                                        </div>
                                    </td>
                                    <td style="width:14%" class="add-img-td"><a href="ads-details.html"><img
                                            class="thumbnail  img-responsive" src="images/item/tp/Image00014.jpg"
                                            alt="img"></a></td>
                                    <td style="width:58%" class="ads-details-td">
                                        <div>
                                            <p><strong> <a href="ads-details.html" title="SAMSUNG GALAXY S CORE Duos ">SAMSUNG
                                                GALAXY S CORE Duos </a> </strong></p>

                                            <p><strong> Posted On </strong>:
                                                02-Oct-2014, 04:38 PM </p>

                                            <p><strong>Visitors </strong>: 221 <strong>Located In:</strong> New York
                                            </p>
                                        </div>
                                    </td>
                                    <td style="width:16%" class="price-td">
                                        <div><strong> $150</strong></div>
                                    </td>
                                    <td style="width:10%" class="action-td">
                                        <div>
                                            <p><a class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i> Edit </a>
                                            </p>

                                            <p><a class="btn btn-info btn-sm"> <i class="fa fa-mail-forward"></i> Share
                                            </a></p>

                                            <p><a class="btn btn-danger btn-sm"> <i class=" fa fa-trash"></i> Delete
                                            </a></p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:2%" class="add-img-selector">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">
                                            </label>
                                        </div>
                                    </td>
                                    <td style="width:14%" class="add-img-td"><a href="ads-details.html"><img
                                            class="thumbnail  img-responsive" src="images/item/tp/Image00002.jpg"
                                            alt="img"></a></td>
                                    <td style="width:58%" class="ads-details-td">
                                        <div>
                                            <p><strong> <a href="ads-details.html"
                                                           title="HTC one x 32 GB intact Seal box For sale">HTC one x 32
                                                GB intact Seal box For sale</a> </strong></p>

                                            <p><strong> Posted On </strong>:
                                                02-Sept-2014, 09:00 PM </p>

                                            <p><strong>Visitors </strong>: 896 <strong>Located In:</strong> New York
                                            </p>
                                        </div>
                                    </td>
                                    <td style="width:16%" class="price-td">
                                        <div><strong> $210</strong></div>
                                    </td>
                                    <td style="width:10%" class="action-td">
                                        <div>
                                            <p><a class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i> Edit </a>
                                            </p>

                                            <p><a class="btn btn-info btn-sm"> <i class="fa fa-mail-forward"></i> Share
                                            </a></p>

                                            <p><a class="btn btn-danger btn-sm"> <i class=" fa fa-trash"></i> Delete
                                            </a></p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:2%" class="add-img-selector">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">
                                            </label>
                                        </div>
                                    </td>
                                    <td style="width:14%" class="add-img-td"><a href="ads-details.html"><img
                                            class="thumbnail  img-responsive" src="images/item/tp/Image00011.jpg"
                                            alt="img"></a></td>
                                    <td style="width:58%" class="ads-details-td">
                                        <div>
                                            <p><strong> <a href="ads-details.html" title="Sony Xperia TX ">Sony Xperia
                                                TX </a> </strong></p>

                                            <p><strong> Posted On </strong>:
                                                02-Oct-2014, 04:38 PM </p>

                                            <p><strong>Visitors </strong>: 221 <strong>Located In:</strong> New York
                                            </p>
                                        </div>
                                    </td>
                                    <td style="width:16%" class="price-td">
                                        <div><strong> $260</strong></div>
                                    </td>
                                    <td style="width:10%" class="action-td">
                                        <div>
                                            <p><a class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i> Edit </a>
                                            </p>

                                            <p><a class="btn btn-info btn-sm"> <i class="fa fa-mail-forward"></i> Share
                                            </a></p>

                                            <p><a class="btn btn-danger btn-sm"> <i class=" fa fa-trash"></i> Delete
                                            </a></p>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--/.row-box End-->

                    </div>
                </div>
                <!--/.page-content-->
                <!--/.page-content-->
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>
    <!-- /.main-container -->
<!-- ---===========================================main contain=============================== -->
<?php	include 'footer.php' ?>