			<div style="position:absolute;min-width:20px;">
				<input type="submit" class="save-section" value="Save" form="addpassword" />
			</div>
			  <div class="col-md-10">
				<div class="row">
					<div class="col-md-12">
						<div class="panel-default">
							<div class="content-box-header  panel-heading">
								<div class="panel-title">Add User Password</div>
							</div>
							<div class="content-box-large box-with-header">
								<div class="row">
									<form id="addpassword" method="post" action="<?php echo base_url(). 'Save/saveUserPass'; ?>" class="form-horizontal">
										  <div class="form-group row">
												<label for="Username" class="col-sm-2 control-label">Username</label>
												<div class="col-sm-10">
												<input type="text" class="form-control hidden" id="userid" name="userid" value=""  />
												  <input type="text" class="form-control" id="Username" name="Username" value="" placeholder="Username" />
												</div>
											</div>
											<hr>
										<div class="form-group row">
												<label for="email" class="col-sm-2 control-label">E-mail</label>
												<div class="col-sm-10">
												  <input type="text" class="form-control" id="email" name="email" value="" placeholder="E-mail" />
												</div>
										 </div>
										 <hr>
										  <div class="form-group row">
											<label for="Password" class="col-sm-2 control-label">Password</label>
											<div class="col-sm-10">
											  <input type="text" class="form-control" id="Password" name="password" value="" required placeholder="Password" />
											</div>
										  </div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>