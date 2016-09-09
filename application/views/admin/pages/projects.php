			<div class="col-md-10">

				<div class="row">
					<div class="col-md-12">
						<div class="panel-default">
							<div class="content-box-header  panel-heading">
								<div class="panel-title">Projects</div>
							</div>
							<div class="content-box-large box-with-header">
								<div class="row project-panel">
									<?php 	$prod_count=0;
											foreach($projects as $project): ?>
												<div class="col-md-3">
													<div>
														<div  class="thumbnail">
															<img src="<?php echo $project['img_path']; ?>" alt="<?php echo $project['title']; ?>">
														</div>
														<div class="row project-panel">
															<div class="col-md-10">
																<label class="control-label project-name"><?php echo $project['title']; ?></label>
															</div>
															<div class="col-md-2">
																<a href="<?php echo base_url() . 'editpages/project/edit/'.$project['id']; ?>" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
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
