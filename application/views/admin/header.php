		  <div style="position:absolute;min-width:20px;">
			<input type="submit" class="save-section" value="Save" form="header-form" />
		  </div>
		  <form id="header-form" action="<?php echo base_url(). 'Save/saveHeader'; ?>" method="post">
		  <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div class="panel-default">
		  				<div class="content-box-header  panel-heading">
							<div class="panel-title">Logo Image</div>
						</div>
		  				<div class="content-box-large box-with-header">
		  					<div class="row">
								<div class="col-md-3">
									<div  class="thumbnail">
									  <img id="logoimg" src="<?php echo $header_logo->path; ?>" alt="Logo" />
									  <input type="text" id="logoinput" name="logo" value="<?php echo $header_logo->path; ?>" class="hidden" />
									</div>
								</div>
								<div class="col-md-9 left-border">
									<div class="form-group row astable">
												<div class="col-md-4">
													<button type="button" id="upload-logoimg-logoinput" class="btn btn-info btn-lg uploadImage" data-toggle="modal" data-target="#myModal">Edit Image</button>
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
							<div class="panel-title">Social Media</div>
						</div>
		  				<div class="content-box-large box-with-header">
		  					<div class="row">
								<div class="col-md-3">
									<div  class="thumbnail no-border">
									  <img src="<?php echo base_url() . 'assets/images/social-media.png'; ?>" alt="Social Media Icon" />
									</div>
								</div>
								<div class="col-md-9 left-border">
									<ul class="social_icons">
										<?php foreach ($social_media as $media): ?>
											<label class="control-label"><?php echo ucfirst($media['type']); ?></label>
											<input type="text" class="form-control" value="<?php echo $media['link']; ?>" name="<?php echo $media['type']; ?>_link" />
											<hr width="90%" />
										<?php endforeach; ?>
								    </ul>
								</div>
							</div>
		  				</div>
		  			</div>
		  		</div>
		  	</div>
		</div>
		</form>