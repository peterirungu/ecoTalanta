<!-- add_product_modal.php -->
<div class="modal fade" data-backdrop="static" data-keyboard="false" id="addproduct" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><i class="fa icon-info-circled-alt"></i> Add new product </h4>
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			</div>
			<div class="modal-body">
				<form class="form-horizontal">                                    
                    <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Product title</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="product_title" name="product_title" placeholder="Product title">
                            <small id="" class="form-text text-muted">
                                A great product title needs at least 60 characters
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Product Description</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="product_description" name="product_description" rows="3" placeholder="Describe what makes your ad unique"></textarea>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Price</label>
                        <div class="input-group col-sm-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text">KES</span>
                            </div>
                            <input type="text" name="product_price" id="product_price" class="form-control" aria-label="Amount (to the nearest Shilling)">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>                        
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="textarea">Picture</label>
                        <div class="col-lg-8">
                            <div class="mb10">
                                <input id="image_p1" name="image_p1" type="file" class="file" data-preview-file-type="text">
                            </div>
                            <div class="mb10">
                                <input id="image_p2" name="image_p2" type="file" class="file" data-preview-file-type="text">
                            </div>
                            <div class="mb10">
                                <input id="image_p3" name="image_p3" type="file" class="file" data-preview-file-type="text">
                            </div>                                                     
                        </div>
                    </div>                             
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
						<button type="Submit" name="Submit" class="btn btn-primary" data-dismiss="modal">Submit</button>
					</div>
				</form>
		</div>
	</div>
</div>

<!-- /.modal -->