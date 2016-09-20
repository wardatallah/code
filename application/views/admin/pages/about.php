		<div style="position:absolute;min-width:20px;">
		 <input type="submit" class="save-section" value="Save" form="about-form"/>
		</div>
		<form id="about-form" action="<?php echo base_url(). 'Save/saveAbout'; ?>" method="post">
		<div class="col-md-10">
		  	<div class="row">
  				<div class="col-md-12">
  					<div class="panel-default">
		  				<div class="content-box-header  panel-heading">
							<div class="panel-title">Welcome Section</div>
						</div>
		  				<div class="content-box-large box-with-header">
							<div class="row">
								<div class="col-xs-6 col-md-2">
									<label class="col-md-12 control-label">Title</label>
								</div>
								<div class="col-xs-6 col-md-10">
									<div class="form-group row">
											<input type="text" class="form-control" name="welcomeTitle" value="<?php echo $welcome_section->title; ?>">
									</div>
								</div>
								<hr/>
								<div class="col-xs-6 col-md-2">
									<label class="col-md-12 control-label">Sub Title</label>
								</div>
								<div class="col-xs-6 col-md-10">
									<div class="form-group row">
											<textarea rows="4" class="form-control" name="welcomeSubTitle" ><?php echo $welcome_section->subtitle; ?></textarea>
									</div>
								</div>
							</div>
		  				</div>
		  			</div>
  				</div>
			</div>
			
			<div class="row">
  				<div class="col-md-12">
  					<div class="panel-default">
		  				
						<div class="content-box-header  panel-heading">
							<div class="panel-title">What We Do Section</div>
						</div>
		  				<div class="content-box-large box-with-header">
							<?php foreach($whatwedo_section as $whatsection): ?>
							<div class="row">
								<div class="col-xs-6 col-md-1">
									<label class="col-md-12 control-label">Title</label>
								</div>
								<div class="col-xs-6 col-md-2">
									<div class="form-group row">
											<input type="text" class="hidden" name="whatId[]" value="<?php echo $whatsection['id']; ?>">
											<input type="text" class="form-control" name="whatTitle[]" value="<?php echo $whatsection['title']; ?>">
									</div>
								</div>
								<div class="col-xs-6 col-md-1">
									<label class="col-md-12 control-label">Sub Title</label>
								</div>
								<div class="col-xs-6 col-md-3">
									<div class="form-group row">
											<textarea rows="4" class="form-control" name="whatSubTitle[]" ><?php echo $whatsection['subtitle']; ?></textarea>
									</div>
								</div>
								<div class="col-xs-6 col-md-1">
									<label class="col-md-12 control-label">Icon</label>
								</div>
								<div class="col-xs-6 col-md-3">
									<div class="form-group row">
											<input type="text" class="form-control" name="whatIcon[]" value="<?php echo $whatsection['icon']; ?>" />
									</div>
								</div>
							</div>
							<hr/>
							<?php endforeach; ?>
		  				</div>
		  			</div>
  				</div>
			</div>
			
			<div class="row">
  				<div class="col-md-12">
  					<div class="panel-default">
		  				<div class="content-box-header  panel-heading">
							<div class="panel-title">Quote Banner</div>
						</div>
		  				<div class="content-box-large box-with-header">
							<div class="row">
								<div class="col-xs-6 col-md-3">
									<label class="col-md-12 control-label">Title</label>
								</div>
								<div class="col-xs-6 col-md-3">
									<div class="form-group row">
											<input type="text" class="form-control" name="quoteBannerTitle" value="<?php echo $about_banner_section[0]['title']; ?>">
									</div>
								</div>
								<div class="col-xs-6 col-md-3">
									<label class="col-md-12 control-label">Button Title</label>
								</div>
								<div class="col-xs-6 col-md-3">
									<div class="form-group row">
											<input type="text" class="form-control" name="quoteBtnText" value="<?php echo $about_banner_section[0]['btn_text']; ?>">
									</div>
								</div>
								<div class="col-xs-6 col-md-3">
									<label class="col-md-12 control-label">Button Link</label>
								</div>
								<div class="col-xs-6 col-md-9">
									<div class="form-group row">
											<input type="text" class="form-control" name="quoteBtnLink" value="<?php echo $about_banner_section[0]['btn_link']; ?>">
									</div>
								</div>
							</div>
		  				</div>
		  			</div>
  				</div>
			</div>
			
			<div class="row">
  				<div class="col-md-12">
  					<div class="panel-default">
		  				<div class="content-box-header  panel-heading">
							<div class="panel-title">Location</div>
						</div>
		  				<div class="content-box-large box-with-header">
							<div class="row">
								<div class="col-xs-6 col-md-12">
									<a href="<?php echo base_url() . 'editpages/contact'; ?>" >Click here to edit location section</a>
								</div>
							</div>
		  				</div>
		  			</div>
  				</div>
			</div>
			
			
			<div class="row">
  				<div class="col-md-12">
  					<div class="panel-default">
		  				<div class="content-box-header  panel-heading">
							<div class="panel-title">What Clients Say Section</div>
						</div>
		  				<div class="content-box-large box-with-header">
							<?php foreach($clients_say_section as $client): ?>
							<div class="row">
								<div class="col-xs-6 col-md-2">
									<div  class="thumbnail">
									  <img id="testoimg<?php echo $client['id']; ?>" src="<?php echo $client['img_link']; ?>" alt="<?php echo $client['client_name']; ?>">
									  <input type="text" class="hidden" name="testoId[]" value="<?php echo $client['id']; ?>">
									  <input id="testoinput<?php echo $client['id']; ?>" type="text" class="hidden" name="testoImages[]" value="<?php echo $client['img_link']; ?>">
									</div>
									<div class="form-group row astable">
												<div class="col-md-4">
													<button type="button" id="upload-testoimg<?php echo $client['id']; ?>-testoinput<?php echo $client['id']; ?>" class="btn btn-info btn-lg uploadImage" data-toggle="modal" data-target="#myModal">Edit Image</button>
												</div>
									</div>
								</div>
								<div class="col-xs-6 col-md-10">
									<div class="form-group row">
											<label class="col-md-2 control-label">Client Name</label>
											<div class="col-md-4">
												<input type="text" class="form-control" name="testoName[]" value="<?php echo $client['client_name']; ?>">
											</div>
											<label class="col-md-2 control-label">Position</label>
											<div class="col-md-4">
												<input type="text" class="form-control" name="testoPosition[]" value="<?php echo $client['client_position']; ?>" />
											</div>
									</div>
									<hr/>
									<div class="form-group row">
											<label class="col-md-2 control-label">Testimonial</label>
											<div class="col-md-10">
												<textarea rows="3" class="form-control" name="testoText[]" ><?php echo $client['client_text']; ?></textarea>
											</div>
									</div>
								</div>
							</div>
							<hr/>
							<?php endforeach; ?>
		  				</div>
		  			</div>
  				</div>
			</div>
			
			
			<div class="row">
  				<div class="col-md-12">
  					<div class="panel-default">
		  				<div class="content-box-header  panel-heading">
							<div class="panel-title">Our Clients Section</div>
						</div>
		  				<div class="content-box-large box-with-header">
							<div class="row">
								<div class="col-xs-6 col-md-2">
									<label class="col-md-12 control-label">Title</label>
								</div>
								<div class="col-xs-6 col-md-10">
									<div class="form-group row">
											<input type="text" class="form-control" name="clientsTitle" value="<?php echo $our_clients_heading[0]['title']; ?>">
									</div>
								</div>
								<hr/>
								<div class="col-xs-6 col-md-2">
									<label class="col-md-12 control-label">Sub Title</label>
								</div>
								<div class="col-xs-6 col-md-10">
									<div class="form-group row">
											<textarea rows="4" class="form-control" name="clientsSubTitle" ><?php echo $our_clients_heading[0]['subtitle']; ?></textarea>
									</div>
								</div>
							</div>
							<hr/>
							<?php foreach($our_clients_section as $client): ?>
							<div class="row">
								<div class="col-xs-6 col-md-2">
									<div  class="thumbnail">
									  <img id="clientimg<?php echo $client['id']; ?>" src="<?php echo $client['img_path']; ?>" alt="">
									  <input type="text" class="hidden" name="clientsId[]" value="<?php echo $client['id']; ?>">
									  <input id="clientinput<?php echo $client['id']; ?>" type="text" class="hidden" name="clientsImages[]" value="<?php echo $client['img_path']; ?>">
									</div>
									<div class="form-group row astable">
												<div class="col-md-4">
													<button type="button" id="upload-clientimg<?php echo $client['id']; ?>-clientinput<?php echo $client['id']; ?>" class="btn btn-info btn-lg uploadImage" data-toggle="modal" data-target="#myModal">Edit Image</button>
												</div>
									</div>
								</div>
								<div class="col-xs-6 col-md-10">
									<div class="form-group row">
											<label class="col-md-2 control-label">Client Link</label>
											<div class="col-md-10">
												<input type="text" class="form-control" name="clientsLink[]" value="<?php echo $client['client_link']; ?>">
											</div>
									</div>
									<div class="form-group row">
											<label class="col-md-11 control-label"></label>
											<div class="col-md-1">
												<div id="client-<?php echo $client['id']; ?>" class="deleteClient" ><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></div>
											</div>
									</div>
								</div>
							</div>
							<hr/>
							<?php endforeach; ?>
		  				</div>
		  			</div>
  				</div>
			</div>		
		</div>
		</form>
		<form action="<?php echo base_url() .'Admin/deleteClient'; ?>" method="post" id="deleteClient">
				<input type="text" class="hidden" name="clientId" id="clientId" value="">
		</form>