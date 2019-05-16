<!-- Modal contactAdvertiser -->

<div class="modal fade" id="reportAdvertiser" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><i class="fa icon-info-circled-alt"></i> There's something wrong with this add/product?
				</h4>

				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
						class="sr-only">Close</span></button>
			</div>
			<div class="modal-body">
				<form role="form">
					<div class="form-group">
						<label for="report-reason" class="control-label">Reason:</label>
						<select name="report-reason" id="report-reason" class="form-control">
							<option value="">Select a reason</option>
							<option value="soldUnavailable">Item unavailable</option>
							<option value="fraud">Fraud</option>
							<option value="duplicate">Duplicate</option>
							<option value="spam">Spam</option>
							<option value="wrongCategory">environmental hazard</option>
							<option value="other">Other</option>
						</select>
					</div>
					<div class="form-group">
						<label for="recipient-email" class="control-label">Your E-mail:</label>
						<input type="text" name="email" maxlength="60" class="form-control" id="recipient-email">
					</div>
					<div class="form-group">
						<label for="message-text2" class="control-label">Message <span class="text-count">(300) </span>:</label>
						<textarea class="form-control" id="message-text2"></textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-primary">Send Report</button>
			</div>
		</div>
	</div>
</div>

<!-- /.modal -->