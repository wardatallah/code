			<div style="position:absolute;min-width:20px;">
			 <input type="submit" class="save-section" value="Save" form="product-form" />
			</div>
			<form id="product-form" action="<?php echo base_url(). 'Save/saveProduct'; ?>" method="post">
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-12">
						<div class="panel-default">
							<div class="content-box-header  panel-heading">
								<div class="panel-title"><a href="<?php echo base_url() . 'editpages/products'; ?>" >Products</a> <i class="glyphicon glyphicon-menu-right"></i> <?php echo $product->name;?></div>
							</div>
							<div class="content-box-large box-with-header">
								<div class="row">
									<div class="col-xs-6 col-md-2">
										<div  class="thumbnail">
										  <img id="productimg" src="<?php echo $product->img_path;?>" alt="<?php echo $product->name;?>">
										  <input type="text" class="hidden" name="productId" value="<?php echo $product->id;?>">
										  <input id="productinput" type="text" class="hidden" name="productImage" value="<?php echo $product->img_path;?>">
										</div>
										<div class="form-group row astable">
													<div class="col-md-4">
														<button type="button" id="upload-productimg-productinput" class="btn btn-info btn-lg uploadImage" data-toggle="modal" data-target="#myModal">Edit Image</button>
													</div>
										</div>
									</div>
									<div class="col-xs-6 col-md-10">
										<div class="form-group row">
												<label class="col-md-2 control-label">Name</label>
												<div class="col-md-10">
													<input type="text" class="form-control" name="productName" value="<?php echo $product->name;?>">
												</div>
										</div>
										<hr/>
										<div class="form-group row">
												<label class="col-md-2 control-label">Description</label>
												<div class="col-md-10">
													<textarea class="form-control" rows="10" name="productDesc" ><?php echo $product->prod_text;?></textarea>
												</div>
										</div>
										<hr/>
										<div class="form-group row">
												<label class="col-md-2 control-label">Country</label>
												<div class="col-md-4">
													<select class="form-control" name="productCountry">
													<?php foreach($countries as $country): 
															echo '<option '; 
															if ($country["cat_item_name"]==$product->country){ 
																echo ' selected >'; 
															}  
															else {
																echo '>'; 
															}
															echo $country['cat_item_name'] . '</option>'; 
													endforeach; ?>
													</select>
												</div>
												<label class="col-md-2 control-label">Type</label>
												<div class="col-md-4">
													<select class="form-control" name="productType">
													<?php foreach($types as $type): 
															echo '<option '; 
															if ($type["cat_item_name"]==$product->type){ 
																echo ' selected >'; 
															}  
															else {
																echo '>'; 
															}
															echo $type['cat_item_name'] . '</option>'; 
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
															echo '<option '; 
															if ($color["cat_item_name"]==$product->color){ 
																echo ' selected >'; 
															}  
															else {
																echo '>'; 
															}
															echo $color['cat_item_name'] . '</option>'; 
													endforeach; ?>
													</select>
												</div>
												<label class="col-md-2 control-label" >Size</label>
												<div class="col-md-4">
													<select class="form-control" name="productSize">
													<?php foreach($sizes as $size): 
															echo '<option '; 
															if ($size["cat_item_name"]==$product->size){ 
																echo ' selected >'; 
															}  
															else {
																echo '>'; 
															}
															echo $size['cat_item_name'] . '</option>'; 
													endforeach; ?>
													</select>
												</div>
										</div>
										<hr/>
										<div class="form-group row">
												<label class="col-md-2 control-label">Is Private ?</label>
												
												<div class="col-md-10">
													<select class="form-control" name="productPrivacy">
															<option <?php if($product->isPrivate==1) echo "selected"; ?>>Yes</option>
															<option <?php if($product->isPrivate==0) echo "selected"; ?>>No</option>
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