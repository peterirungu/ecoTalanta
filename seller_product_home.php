<?php
	include 'header.php';
	include 'nav_auth.php';
?>
<div class="main-container">
        <div class="container">
            <div class="row">
                <?php include 'templates/auth_sidebar_user.php' ?>
                <!--/.page-sidebar-->
                <div class="col-md-9 page-content">
                    <div class="inner-box">
                        <h2 class="title-2"><i class="icon-docs"></i> My Products </h2>
                        <div class="table-responsive">
                            <div class="table-action">
                                <label>
                                    <a class="btn btn-primary btn-sm" data-toggle="modal" href="#addproduct"> 
                                        <i class="fa fa-plus"></i> ADD NEW PRODUCT 
                                    </a>                                    
                                </label>
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
                                    <td style="width:14%" class="add-img-td">
                                        <a href="#">
                                            <img class="thumbnail  img-responsive" src="img/14.png"
                                            alt="img">
                                        </a>
                                    </td>
                                    <td style="width:58%" class="ads-details-td">
                                        <div>
                                            <p>
                                                <strong> 
                                                    <a href="#" title="eco product">Eco-product item</a> 
                                                </strong>
                                            </p>

                                            <p><strong> Posted On </strong>:
                                                02-Oct-2014, 04:38 PM 
                                            </p>
                                            </p>
                                        </div>
                                    </td>
                                    <td style="width:16%" class="price-td">
                                        <div><strong> KES 1500</strong></div>
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
                    <?php include 'form_modals/add_product_modal.php' ?>
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