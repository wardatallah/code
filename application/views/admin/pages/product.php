			<div style="position:absolute;min-width:20px;">
			 <input type="submit" class="save-section" value="Save" />
			</div>
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
										  <img src="<?php echo $product->img_path;?>" alt="<?php echo $product->name;?>">
										</div>
										<div class="form-group row astable">
													<div class="col-md-4">
														<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Edit Image</button>
													</div>
										</div>
									</div>
									<div class="col-xs-6 col-md-10">
										<div class="form-group row">
												<label class="col-md-1 control-label">Name</label>
												<div class="col-md-11">
													<input type="text" class="form-control"  value="<?php echo $product->name;?>">
												</div>
										</div>
										<hr/>
										<div class="form-group row">
												<label class="col-md-1 control-label">Description</label>
												<div class="col-md-11">
													<textarea class="form-control" rows="10" ><?php echo $product->prod_text;?></textarea>
												</div>
										</div>
										<hr/>
										<div class="form-group row">
												<label class="col-md-1 control-label">Country</label>
												<div class="col-md-5">
													<input type="text" class="form-control"  value="<?php echo $product->country; ?>">
												</div>
												<label class="col-md-1 control-label">Type</label>
												<div class="col-md-5">
													<input type="text" class="form-control"  value="<?php echo $product->type; ?>">
												</div>
										</div>
										<hr/>
										<div class="form-group row">
												<label class="col-md-1 control-label">Color</label>
												<div class="col-md-5">
													<input type="text" class="form-control"  value="<?php echo $product->color; ?>">
												</div>
												<label class="col-md-1 control-label">Size</label>
												<div class="col-md-5">
													<input type="text" class="form-control"  value="<?php echo $product->size; ?>">
												</div>
										</div>
										<hr/>
										<div class="form-group row">
												<label class="col-md-2 control-label">Is Private ?</label>
												
												<div class="col-md-10">
													<label class="radio-inline"><input type="radio" name="optradio" <?php if($product->isPrivate==0) echo "checked='checked'"; ?> >No</label>
													<label class="radio-inline"><input type="radio" name="optradio" <?php if($product->isPrivate==1) echo "checked='checked'"; ?> >Yes</label>
												</div>			
										</div>
										
									</div>
								</div>
							</div>
		  				</div>
		  			</div>
  				</div>
			</div>