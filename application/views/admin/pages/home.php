		<div style="position:absolute;min-width:20px;">
		 <input type="submit" class="save-section" value="Save" form="home-form"/>
		</div>
		<form id="home-form" action="<?php echo base_url(). 'Save/saveHome'; ?>" method="post">
		<div class="col-md-10">
		  	<div class="row">
  				<div class="col-md-12">
  					<div class="panel-default">
		  				<div class="content-box-header  panel-heading">
							<div class="panel-title">Top Slider</div>
						</div>
		  				<div class="content-box-large box-with-header">
							<?php foreach($banner_home as $banner): ?>
							<div class="row">
								<div class="col-xs-6 col-md-2">
									<div  class="thumbnail">
									  <img id="sliderimg<?php echo $banner['id']; ?>" src="<?php echo $banner['img_path']; ?>" alt="<?php echo $banner['title']; ?>">
									  <input type="text" class="hidden" name="sliderIds[]" value="<?php echo $banner['id']; ?>">
									  <input id="sliderinput<?php echo $banner['id']; ?>" type="text" class="hidden" name="sliderImages[]" value="<?php echo $banner['img_path']; ?>">
									</div>
									<div class="form-group row astable">
												<div class="col-md-4">
													<button type="button" id="upload-sliderimg<?php echo $banner['id']; ?>-sliderinput<?php echo $banner['id']; ?>" class="btn btn-info btn-lg uploadImage" data-toggle="modal" data-target="#myModal">Edit Image</button>
												</div>
									</div>
								</div>
								<div class="col-xs-6 col-md-10">
									<div class="form-group row">
											<label class="col-md-1 control-label">Title</label>
											<div class="col-md-4">
												<input type="text" class="form-control" name="sliderTitles[]" value="<?php echo $banner['title']; ?>">
											</div>
											<label class="col-md-1 control-label">Sub Title</label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="sliderSubTitles[]" value="<?php echo $banner['sub_title']; ?>">
											</div>
									</div>
									<hr/>
									<div class="form-group row">
											<label class="col-md-1 control-label">Button Title</label>
											<div class="col-md-4">
												<input type="text" class="form-control" name="sliderBtnTitles[]" value="<?php echo $banner['btn_text']; ?>">
											</div>
											<label class="col-md-1 control-label">Button Link</label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="sliderBtnLinks[]" value="<?php echo $banner['btn_link']; ?>">
											</div>
									</div>
									<hr/>
									<div class="form-group row">
											<label class="col-md-1 control-label">X-Position</label>
											<div class="col-md-4">
												<input type="text" class="form-control" name="sliderPosition[]" value="<?php echo $banner['xposition']; ?>">
											</div>
											<label class="col-md-1 control-label">Font Size</label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="sliderFont[]" value="<?php echo $banner['fontsize'].'px'; ?>">
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
							<div class="panel-title">Carousel Slider</div>
						</div>
		  				<div class="content-box-large box-with-header">
							<?php foreach($slider_home as $slider): ?>
							<div class="row">
								<div class="col-xs-6 col-md-2">
									<div  class="thumbnail">
									  <img id="carouselimg<?php echo $slider['id']; ?>" src="<?php echo $slider['img_path']; ?>" alt="<?php echo $slider['title']; ?>">
									  <input type="text" class="hidden" name="carouselIds[]" value="<?php echo $slider['id']; ?>">
									  <input id="carouselinput<?php echo $slider['id']; ?>" type="text" class="hidden" name="carouselImages[]" value="<?php echo $slider['img_path']; ?>">
									</div>
									<div class="form-group row astable">
												<div class="col-md-4">
													<button id="upload-carouselimg<?php echo $slider['id']; ?>-carouselinput<?php echo $slider['id']; ?>" type="button" class="btn btn-info btn-lg uploadImage" data-toggle="modal" data-target="#myModal">Edit Image</button>
												</div>
									</div>
								</div>
								<div class="col-xs-6 col-md-10">
									<div class="form-group row">
											<label class="col-md-1 control-label">Title</label>
											<div class="col-md-4">
												<input type="text" class="form-control" name="carouselTitles[]" value="<?php echo $slider['title']; ?>">
											</div>
											<label class="col-md-1 control-label">Sub Title</label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="carouselSubTitles[]" value="<?php echo $slider['sub_title']; ?>">
											</div>
									</div>
									<hr/>
									<div class="form-group row">
											<label class="col-md-1 control-label">Button Title</label>
											<div class="col-md-4">
												<input type="text" class="form-control" name="carouselBtnTitles[]" value="<?php echo $slider['btn_text']; ?>">
											</div>
											<label class="col-md-1 control-label">Button Link</label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="carouselBtnLinks[]" value="<?php echo $slider['btn_link']; ?>">
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
  				<div class="col-md-6">
  					<div class="panel-default">
		  				<div class="content-box-header  panel-heading">
							<div class="panel-title">First Banner</div>
						</div>
		  				<div class="content-box-large box-with-header">
							<div class="row">
								<div class="col-xs-6 col-md-3">
									<label class="col-md-12 control-label">Title</label>
								</div>
								<div class="col-xs-6 col-md-3">
									<div class="form-group row">
											<input type="text" class="hidden" name="quoteBannerId" value="<?php echo $banner_quote[0]['id']; ?>">
											<input type="text" class="form-control" name="quoteBannerTitle" value="<?php echo $banner_quote[0]['title']; ?>">
									</div>
								</div>
								<div class="col-xs-6 col-md-3">
									<label class="col-md-12 control-label">Button Title</label>
								</div>
								<div class="col-xs-6 col-md-3">
									<div class="form-group row">
											<input type="text" class="form-control" name="quoteBtnText" value="<?php echo $banner_quote[0]['btn_text']; ?>">
									</div>
								</div>
								<div class="col-xs-6 col-md-3">
									<label class="col-md-12 control-label">Button Link</label>
								</div>
								<div class="col-xs-6 col-md-9">
									<div class="form-group row">
											<input type="text" class="form-control" name="quoteBtnLink" value="<?php echo $banner_quote[0]['btn_link']; ?>">
									</div>
								</div>
							</div>
		  				</div>
		  			</div>
  				</div>
			
  				<div class="col-md-6">
  					<div class="panel-default">
		  				<div class="content-box-header  panel-heading">
							<div class="panel-title">Android App Banner</div>
						</div>
		  				<div class="content-box-large box-with-header">
							<div class="row">
								<div class="col-xs-6 col-md-3">
									<label class="col-md-12 control-label">Title</label>
								</div>
								<div class="col-xs-6 col-md-3">
									<div class="form-group row">
											<input type="text" class="hidden" name="AndoridId" value="<?php echo $banner_quote[1]['id']; ?>">
											<input type="text" class="form-control" name="AndoridTitle" value="<?php echo $banner_quote[1]['title']; ?>">
									</div>
								</div>
								<div class="col-xs-6 col-md-3">
									<label class="col-md-12 control-label">Button Title</label>
								</div>
								<div class="col-xs-6 col-md-3">
									<div class="form-group row">
											<input type="text" class="form-control" name="AndoridBtnText" value="<?php echo $banner_quote[1]['btn_text']; ?>">
									</div>
								</div>
								<div class="col-xs-6 col-md-3">
									<label class="col-md-12 control-label">Download Link</label>
								</div>
								<div class="col-xs-6 col-md-9">
									<div class="form-group row">
											<input type="text" class="form-control" name="AndoridBtnLink" value="<?php echo $banner_quote[1]['btn_link']; ?>">
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
							<div class="panel-title">Types Section</div>
						</div>
		  				<div class="content-box-large box-with-header">
							<?php foreach($types_view as $type): ?>
							<div class="row">
								<div class="col-xs-6 col-md-2">
									<div  class="thumbnail">
									  <img id="typeimg<?php echo $type['id']; ?>" src="<?php echo $type['img_path']; ?>" alt="<?php echo $type['name']; ?>">
									  <input type="text" class="hidden" name="typeIds[]" value="<?php echo $type['id']; ?>">
									  <input id="typeinput<?php echo $type['id']; ?>" type="text" class="hidden" name="typeImages[]" value="<?php echo $type['img_path']; ?>">
									</div>
									<div class="form-group row astable">
												<div class="col-md-4">
													<button id="upload-typeimg<?php echo $type['id']; ?>-typeinput<?php echo $type['id']; ?>" type="button" class="btn btn-info btn-lg uploadImage" data-toggle="modal" data-target="#myModal">Edit Image</button>
												</div>
									</div>
								</div>
								<div class="col-xs-6 col-md-10">
									<div class="form-group row">
											<label class="col-md-2 control-label">Title</label>
											<div class="col-md-4">
												<input type="text" class="form-control" name="typeTitles[]" value="<?php echo $type['name']; ?>">
											</div>
											<label class="col-md-2 control-label">Button Link</label>
												<div class="col-md-4">
													<input type="text" class="form-control" name="typeLinks[]" value="<?php echo $type['link']; ?>">
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