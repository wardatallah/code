			<div style="position:absolute;min-width:20px;">
			 <input type="submit" class="save-section" value="Add" form="product-form" />
			</div>
			<form id="product-form" action="<?php echo base_url(). 'Save/addProduct'; ?>" method="post">
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-12">
						<div class="panel-default">
							<div class="content-box-header  panel-heading">
								<div class="panel-title"><a href="<?php echo base_url() . 'editpages/products'; ?>" >Products</a> <i class="glyphicon glyphicon-menu-right"></i> Add New Product</div>
							</div>
							<div class="content-box-large box-with-header">
								<div class="row">
									<div class="col-xs-6 col-md-2">
										<div  class="thumbnail">
										  <img src="<?php echo base_url() . 'assets/images/product-background.jpg'; ?>" alt="">
										  <input type="text" class="hidden" name="productId" value="<?php echo base_url() . 'assets/images/product-background.jpg'; ?>">
										  <input type="text" class="hidden" name="productImage" value="">
										</div>
										<div class="form-group row astable">
													<div class="col-md-4">
														<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Image</button>
													</div>
										</div>
									</div>
									<div class="col-xs-6 col-md-10">
										<div class="form-group row">
												<label class="col-md-2 control-label">Name</label>
												<div class="col-md-10">
													<input type="text" class="form-control" name="productName" value="">
												</div>
										</div>
										<hr/>
										<div class="form-group row">
												<label class="col-md-2 control-label">Description</label>
												<div class="col-md-10">
													<textarea class="form-control" rows="10" name="productDesc" ></textarea>
												</div>
										</div>
										<hr/>
										<div class="form-group row">
												<label class="col-md-2 control-label">Country</label>
												<div class="col-md-4">
													<select class="form-control" name="productCountry">
													<?php foreach($countries as $country): 
															echo '<option>' . $country['cat_item_name'] . '</option>'; 
													endforeach; ?>
													</select>
												</div>
												<label class="col-md-2 control-label">Type</label>
												<div class="col-md-4">
													<select class="form-control" name="productType">
													<?php foreach($types as $type): 
															echo '<option>' . $type['cat_item_name'] . '</option>'; 
													endforeach; ?>
													</select>
												</div>
										</div>
										<hr/>
										<div class="form-group row">
												<label class="col-md-2 control-label">Color</label>
												<div class="col-md-4">
													<select class="form-control" name="productColor">
													<?php foreach($colors as $color): 
															echo '<option>' . $color['cat_item_name'] . '</option>'; 
													endforeach; ?>
													</select>
												</div>
												<label class="col-md-2 control-label" >Size</label>
												<div class="col-md-4">
													<select class="form-control" name="productSize">
													<?php foreach($sizes as $size): 
															echo '<option>' . $size['cat_item_name'] . '</option>'; 
													endforeach; ?>
													</select>
												</div>
										</div>
										<hr/>
										<div class="form-group row">
												<label class="col-md-2 control-label">Is Private ?</label>
												
												<div class="col-md-10">
													<select class="form-control" name="productPrivacy">
															<option>Yes</option>
															<option>No</option>
													</select>
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