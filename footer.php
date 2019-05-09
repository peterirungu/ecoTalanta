
<!-- <footer >
	<div class="footer-content">
		<div class="container">
			<div class="row">    				
				<div class="col-xl-12">    					
					<div class="copy-info text-center">
						&copy; 2019 ecoTalanta. All Rights Reserved.
					</div>
				</div>
			</div>
		</div>
	</div>
</footer> -->
<!-- /.footer -->

<!-- -------modals------------- -->
<?php
	include 'form_modals/report_product.php';
	include 'form_modals/contact_seller_modal.php'
?>
</div>
<!-- /.wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/jquery/jquery-3.3.1.min.js">\x3C/script>')</script>
<script src="assets/js/vendors.min.js"></script>
<!-- include custom script for site  -->
<script src="assets/js/main.min.js"></script>
<!-- include jquery autocomplete plugin  -->
<script>
    $('.bxslider').bxSlider({
        pagerCustom: '#bx-pager'
    });
</script>

<script type="text/javascript" src="assets/plugins/autocomplete/jquery.mockjax.js"></script>
<script type="text/javascript" src="assets/plugins/autocomplete/jquery.autocomplete.js"></script>
<script type="text/javascript" src="assets/plugins/autocomplete/usastates.js"></script>
<script type="text/javascript" src="assets/plugins/autocomplete/autocomplete-demo.js"></script>

<script src="assets/js/footablecd98.js?v=2-0-1" type="text/javascript"></script>
<script src="assets/js/footable.filtercd98.js?v=2-0-1" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $('#addManageTable').footable().bind('footable_filtering', function (e) {
            var selected = $('.filter-status').find(':selected').text();
            if (selected && selected.length > 0) {
                e.filter += (e.filter && e.filter.length > 0) ? ' ' + selected : selected;
                e.clear = !e.filter;
            }
        });

        $('.clear-filter').click(function (e) {
            e.preventDefault();
            $('.filter-status').val('');
            $('table.demo').trigger('footable_clear_filter');
        });

    });
</script>
<!-- include custom script for ads table [select all checkbox]  -->
<script>

    function checkAll(bx) {
        var chkinput = document.getElementsByTagName('input');
        for (var i = 0; i < chkinput.length; i++) {
            if (chkinput[i].type == 'checkbox') {
                chkinput[i].checked = bx.checked;
            }
        }
    }

</script>
<!-- include jquery file upload plugin  -->
<script src="assets/js/fileinput.min.js" type="text/javascript"></script>
<script>
    // initialize with defaults
    $("#input-upload-img1").fileinput();
    $("#input-upload-img2").fileinput();
    $("#input-upload-img3").fileinput();
    $("#input-upload-img4").fileinput();
    $("#input-upload-img5").fileinput();
</script>
</body>
</html>