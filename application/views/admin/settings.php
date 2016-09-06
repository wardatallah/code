		  
		  <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div class="panel-default">
		  				<div class="content-box-header  panel-heading">
							<div class="panel-title">Change Password</div>
						</div>
		  				<div class="content-box-large box-with-header">
		  					<?php 	
								$attributes = array('class' => 'form-horizontal', 'id' => 'form-horizontal');
								echo form_open('Userlogin/changePassword',$attributes); 
								
								if (isset($error_message)) {
								echo "<div class='alert alert-danger'>";
									echo $error_message. '</br>';
									echo validation_errors();
								echo "</div>";
									
								}
							?>
								  <div class="form-group">
								    <label for="currentPassword" class="col-sm-2 control-label">Current Password</label>
								    <div class="col-sm-10">
								      <input type="password" class="form-control" id="currentPassword" name="currentPassword" required placeholder="Current Password">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="newPassword" class="col-sm-2 control-label">New Password</label>
								    <div class="col-sm-10">
								      <input type="password" class="form-control" id="newPassword" name="newPassword" required placeholder="New Password">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="confirmNewPassword" class="col-sm-2 control-label">Confirm Password</label>
								    <div class="col-sm-10">
								      <input type="password" class="form-control" id="confirmNewPassword" name="confirmNewPassword" required placeholder="Confirm Password">
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="submit" value="submit" class="btn btn-primary" id="btn_submit">Save Changes</button>
								    </div>
								  </div>
								<?php echo form_close(); ?>
		  				</div>
		  			</div>
		  		</div>
		  	</div>
		</div>