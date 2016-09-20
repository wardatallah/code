			<div style="position:absolute;min-width:20px;">
				<input type="submit" class="save-section" value="Save" form="editingpassword" />
			</div>
			  <div class="col-md-10">
				<div class="row">
					<div class="col-md-12">
						<div class="panel-default">
							<div class="content-box-header  panel-heading">
								<div class="panel-title">Edit User Password</div>
								<div class="panel-options">
									<a href="<?php echo base_url() . 'admin/removePass/'.$user->id; ?>" onclick="return confirm('Are You Sure?')" ><i class="glyphicon glyphicon-remove"></i></a>
								</div>
							</div>
							<div class="content-box-large box-with-header">
								<div class="row">
									<form id="editingpassword" method="post" action="<?php echo base_url(). 'Save/saveUserPass'; ?>" class="form-horizontal">
										  <div class="form-group row">
												<label for="Username" class="col-sm-2 control-label">Username</label>
												<div class="col-sm-10">
												<input type="text" class="form-control hidden" id="userid" name="userid" value="<?php echo $user->id;?>"  />
												  <input type="text" class="form-control" id="Username" name="Username" value="<?php echo $user->username;?>" disabled />
												</div>
											</div>
											<hr>
										<div class="form-group row">
												<label for="email" class="col-sm-2 control-label">E-mail</label>
												<div class="col-sm-10">
												  <input type="text" class="form-control" id="email" name="email" value="<?php echo $user->email;?>" disabled />
												</div>
										 </div>
										 <hr>
										  <div class="form-group row">
											<label for="Password" class="col-sm-2 control-label">Password</label>
											<div class="col-sm-10">
											  <input type="text" class="form-control" id="Password" name="password" value="<?php echo $user->curpass;?>" required placeholder="Password" />
											</div>
										  </div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>