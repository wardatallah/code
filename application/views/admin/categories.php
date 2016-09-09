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
								</div>
								<div class="col-xs-6 col-md-9">
									<div class="form-group row">
											<label class="col-md-1 control-label">Title</label>
											<div class="col-md-4">
												<input type="text" class="form-control"  value="<?php echo $category['name']; ?>">
											</div>
											<label class="col-md-1 control-label">Button link</label>
											<div class="col-md-4">
												<input type="text" class="form-control"  value="<?php echo $category['link']; ?>">
											</div>
									</div>
									<hr/>
									<div class="form-group row">
											<label class="col-md-1 control-label">File input</label>
											<div class="col-md-4">
												<input type="file" class="btn btn-default" >
											</div>
											<label class="col-md-1 control-label">Image Link</label>
											<div class="col-md-6">
												<input type="text" class="form-control"  value="<?php echo $category['img_link']; ?>">
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
		
		
		