		<div style="position:absolute;min-width:20px;">
		 <input type="submit" class="save-section" value="Save" form="cat-form" />
		</div>
		
		
		<form id="cat-form" action="<?php echo base_url(). 'Save/saveCat'; ?>" method="post">
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
									  <img id="catimg<?php echo $category['id']; ?>" src="<?php echo $category['img_link']; ?>" alt="<?php echo $category['name']; ?>">
									  <input type="text" class="hidden" name="id[]" value="<?php echo $category['id']; ?>" >
									  <input id="catinput<?php echo $category['id']; ?>" type="text" class="hidden" name="img_link[]" value="<?php echo $category['img_link']; ?>" >
									</div>
									<div class="form-group row astable">
												<div class="col-md-4">
													<button type="button" id="upload-catimg<?php echo $category['id']; ?>-catinput<?php echo $category['id']; ?>" class="btn btn-info btn-lg uploadImage" data-toggle="modal" data-target="#myModal">Edit Image</button>
												</div>
									</div>
								</div>
								<div class="col-xs-6 col-md-9">
									<div class="form-group row">
											<label class="col-md-3 control-label">Title</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="name[]" value="<?php echo $category['name']; ?>">
											</div>
											
									</div>
									<hr width="90%" />
									<div class="form-group row">
											<label class="col-md-3 control-label">Button link</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="link[]" value="<?php echo $category['link']; ?>">
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