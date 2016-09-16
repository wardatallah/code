		  <div style="position:absolute;min-width:20px;">
			<input type="submit" class="save-section" value="Save" form="footer-form" />
		  </div>
		  <form id="footer-form" action="<?php echo base_url(). 'Save/saveFooter'; ?>" method="post">
			  <div class="col-md-10">
				<div class="row">
					<div class="col-md-12">
						<div class="panel-default">
							<div class="content-box-header  panel-heading">
								<div class="panel-title">Footer Section</div>
							</div>
							<div class="content-box-large box-with-header">
								<div class="row">
									<div class="col-md-3">
										<div  class="thumbnail">
										  <img id="footerimg" src="<?php echo $footer_logo->path; ?>" alt="Logo" style="background-color: #b5b5b5;" />
										  <input type="text" id="catinput" name="footerlogo" value="<?php echo $footer_logo->path; ?>" class="hidden" />
										</div>
										<div class="form-group row astable">
												<div class="col-md-4">
													<button type="button" id="upload-footerimg-catinput" class="btn btn-info btn-lg uploadImage" data-toggle="modal" data-target="#myModal">Edit Image</button>
												</div>
									</div>
									</div>
									<div class="col-xs-6 col-md-9">
									<div class="form-group row">
											<label class="col-md-3 control-label">Title</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="title" value="<?php echo $footer_about->title; ?>">
											</div>
											
									</div>
									<hr width="90%" />
									<div class="form-group row">
											<label class="col-md-3 control-label">Button link</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="subtitle" value="<?php echo $footer_about->subtitle; ?>">
											</div>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<div class="panel-default">
							<div class="content-box-header  panel-heading">
								<div class="panel-title">Copyright Section</div>
							</div>
							<div class="content-box-large box-with-header">
								<div class="row">
									<div class="col-xs-6 col-md-12">
									<div class="form-group row">
											<label class="col-md-3 control-label">Text</label>
											<div class="col-md-9">
												<textarea type="text" class="form-control" name="copyright" rows=4><?php echo $footer_copyright->subtitle; ?></textarea>
											</div>
											
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>