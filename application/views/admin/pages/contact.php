		<div style="position:absolute;min-width:20px;">
			 <input type="submit" class="save-section" value="Save" form="contact-form"/>
		</div>
		<form id="contact-form" action="<?php echo base_url(). 'Save/saveContact'; ?>" method="post">
		<div class="col-md-10">
		  	<div class="row">
  				<div class="col-md-12">
  					<div class="panel-default">
		  				<div class="content-box-header  panel-heading">
							<div class="panel-title">Locations</div>
						</div>
		  				<div class="content-box-large box-with-header">
							<?php foreach($locations as $location): ?>
							<div class="row">
								<div class="col-xs-6 col-md-2">
									<div  class="thumbnail">
									  <img src="<?php echo $location['img_path']; ?>" alt="<?php echo $location['title']; ?>">
									  <input type="text" class="hidden" name="locationId[]" value="<?php echo $location['id']; ?>">
									  <input type="text" class="hidden" name="locationImage[]" value="<?php echo $location['img_path']; ?>">
									</div>
									<div class="form-group row astable">
												<div class="col-md-4">
													<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Edit Image</button>
												</div>
									</div>
								</div>
								<div class="col-xs-6 col-md-10">
									<div class="form-group row">
											<label class="col-md-1 control-label">Title</label>
											<div class="col-md-3">
												<input type="text" class="form-control" name="locationTitle[]" value="<?php echo $location['title']; ?>">
											</div>
											<label class="col-md-1 control-label">Latitude</label>
											<div class="col-md-3">
												<input type="text" class="form-control" name="locationLat[]" value="<?php echo $location['lat']; ?>">
											</div>
											<label class="col-md-1 control-label">Longitude</label>
											<div class="col-md-3">
												<input type="text" class="form-control" name="locationLng[]" value="<?php echo $location['lng']; ?>">
											</div>
									</div>
									<hr/>
									<div class="form-group row">
											<label class="col-md-1 control-label">Address</label>
											<div class="col-md-7">
												<textarea rows="2" class="form-control" name="locationAddr[]"><?php echo $location['address']; ?></textarea>
											</div>
											<label class="col-md-1 control-label">Email</label>
											<div class="col-md-3">
												<input type="text" class="form-control" name="locationEmail[]" value="<?php echo $location['email']; ?>">
											</div>
									</div>
									<hr/>
									<div class="form-group row">
											<label class="col-md-1 control-label">Tel</label>
											<div class="col-md-3">
												<input type="text" class="form-control" name="locationTel[]" value="<?php echo $location['Tel']; ?>">
											</div>
											<label class="col-md-1 control-label">Mobile</label>
											<div class="col-md-3">
												<input type="text" class="form-control" name="locationMob[]" value="<?php echo $location['Mobile']; ?>">
											</div>
											<label class="col-md-1 control-label">Fax</label>
											<div class="col-md-3">
												<input type="text" class="form-control" name="locationFax[]" value="<?php echo $location['Fax']; ?>">
											</div>
									</div>
								</div>
							</div>
							
							<hr/>
							<?php endforeach; ?>
		  				</div>
		  			</div>
  				</div>
			</div>
		</div>
		</form>