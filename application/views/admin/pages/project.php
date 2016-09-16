			<div style="position:absolute;min-width:20px;">
			 <input type="submit" class="save-section" value="Save" form="project-form" />
			</div>
			<form id="project-form" action="<?php echo base_url(). 'Save/saveProject'; ?>" method="post">
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-12">
						<div class="panel-default">
							<div class="content-box-header  panel-heading">
								<div class="panel-title"><a href="<?php echo base_url() . 'editpages/projects'; ?>" >Projects</a> <i class="glyphicon glyphicon-menu-right"></i> <?php echo $project->title;?></div>
							</div>
							<div class="content-box-large box-with-header">
								<div class="row">
									<div class="col-xs-6 col-md-2">
										<div  class="thumbnail">
										  <img id="projectimg" src="<?php echo $project->img_path;?>" alt="<?php echo $project->title;?>">
										  <input type="text" class="hidden" name="projectId" value="<?php echo $project->id;?>">
										  <input id="projectinput" type="text" class="hidden" name="projectImage" value="<?php echo $project->img_path;?>">
										</div>
										<div class="form-group row astable">
													<div class="col-md-4">
														<button type="button" id="upload-projectimg-projectinput" class="btn btn-info btn-lg uploadImage" data-toggle="modal" data-target="#myModal">Edit Image</button>
													</div>
										</div>
									</div>
									<div class="col-xs-6 col-md-10">
										<div class="form-group row">
												<label class="col-md-1 control-label">Name</label>
												<div class="col-md-11">
													<input type="text" class="form-control" name="projectName" value="<?php echo $project->title;?>">
												</div>
										</div>
										<hr/>
										<div class="form-group row">
												<label class="col-md-1 control-label">Description</label>
												<div class="col-md-11">
													<textarea class="form-control" rows="10" name="projectDesc" ><?php echo $project->proj_text;?></textarea>
												</div>
										</div>
										<hr/>
										<div class="form-group row">
												<label class="col-md-1 control-label">Client</label>
												<div class="col-md-5">
													<input type="text" class="form-control" name="projectClient"  value="<?php echo $project->client; ?>">
												</div>
												<label class="col-md-1 control-label">Date</label>
												<div class="col-md-5">
													<input type="date" class="form-control" name="projectDate" value="<?php echo $project->proj_date; ?>" placeholder="yyyy-mm-dd" />
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