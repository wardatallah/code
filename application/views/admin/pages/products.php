			<div class="col-md-10">

				<div class="row">
					<div class="col-md-12">
						<div class="panel-default">
							<div class="content-box-header  panel-heading">
								<div class="panel-title">Products</div>
								
								<div class="panel-options">
									<a href="<?php echo base_url() . 'editpages/product/add'; ?>"><i class="glyphicon glyphicon-plus-sign"></i></a>
								</div>
							</div>
							<div class="content-box-large box-with-header">
								<div class="row product-panel">
									<?php 	$prod_count=0;
											foreach($products as $product): ?>
												<div class="col-md-3">
													<div>
														<div  class="thumbnail">
															<img src="<?php echo $product['img_path']; ?>" alt="<?php echo $product['name']; ?>">
														</div>
														<div class="row product-panel">
															<div class="col-md-10">
																<label class="control-label product-name"><?php echo $product['name']; ?></label>
															</div>
															<div class="col-md-2">
																<a href="<?php echo base_url() . 'editpages/product/remove/'.$product['id']; ?>" onclick="return confirm('Are You Sure?')"><i class="glyphicon glyphicon-remove"></i></a>
																<a href="<?php echo base_url() . 'editpages/product/edit/'.$product['id']; ?>"><i class="glyphicon glyphicon-cog"></i></a>
															</div>
														</div>
													</div>
												</div>
												<?php if ($prod_count%3==0 && $prod_count>0){
													echo '<div class="clearfix row"><hr width="90%"/></div>';
													$prod_count=-1;
												}
												?>
												
									<?php $prod_count++;endforeach; ?>
									
								</div>
							</div>
		  				</div>
		  			</div>
  				</div>
			</div>
