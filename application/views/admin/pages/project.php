			<div style="position:absolute;min-width:20px;">
			 <input type="submit" class="save-section" value="Save" />
			</div>
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-12">
						<div class="panel-default">
							<div class="content-box-header  panel-heading">
								<div class="panel-title"><a href="<?php echo base_url() . 'editpages/project'; ?>" >Projects</a> <i class="glyphicon glyphicon-menu-right"></i> <?php echo $project->title;?></div>
							</div>
							<div class="content-box-large box-with-header">
								<div class="row">
									<div class="col-xs-6 col-md-2">
										<div  class="thumbnail">
										  <img src="<?php echo $project->img_path;?>" alt="<?php echo $project->title;?>">
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
													<input type="text" class="form-control"  value="<?php echo $project->title;?>">
												</div>
										</div>
										<hr/>
										<div class="form-group row">
												<label class="col-md-1 control-label">Description</label>
												<div class="col-md-11">
													<textarea class="form-control" rows="10" ><?php echo $project->proj_text;?></textarea>
												</div>
										</div>
										<hr/>
										<div class="form-group row">
												<label class="col-md-1 control-label">Client</label>
												<div class="col-md-5">
													<input type="text" class="form-control"  value="<?php echo $project->client; ?>">
												</div>
												<label class="col-md-1 control-label">Date</label>
												<div class="col-md-5">
													<input type="date" class="form-control"  value="<?php echo $project->proj_date; ?>" placeholder="yyyy-mm-dd" />
												</div>
										</div>										
									</div>
								</div>
							</div>
		  				</div>
		  			</div>
  				</div>
			</div>