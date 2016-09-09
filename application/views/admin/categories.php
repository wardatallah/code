<div style="position:absolute;min-width:20px;">
 <input type="submit" class="save-section" value="Save" />
</div>
		  <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div class="panel-default">
		  				<div class="content-box-header  panel-heading">
							<div class="panel-title">Main Categories</div>
						</div>
		  				<div class="content-box-large box-with-header">
							<?php foreach($categories as $category): ?>
							<div class="row">
								<div class="col-xs-6 col-md-3">
									<div  class="thumbnail">
									  <img src="<?php echo $category['img_link']; ?>" alt="<?php echo $category['name']; ?>">
									</div>
									<div class="form-group row astable">
												<div class="col-md-4">
													<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Edit Image</button>
												</div>
									</div>
								</div>
								<div class="col-xs-6 col-md-9">
									<div class="form-group row">
											<label class="col-md-3 control-label">Title</label>
											<div class="col-md-9">
												<input type="text" class="form-control"  value="<?php echo $category['name']; ?>">
											</div>
											
									</div>
									<hr width="90%" />
									<div class="form-group row">
											<label class="col-md-3 control-label">Button link</label>
											<div class="col-md-9">
												<input type="text" class="form-control"  value="<?php echo $category['link']; ?>">
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