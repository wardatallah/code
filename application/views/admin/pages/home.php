<div style="position:absolute;min-width:20px;">
 <input type="submit" class="save-section" value="Save" />
</div>
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
								<div class="col-xs-6 col-md-3">
									<div  class="thumbnail">
									  <img src="<?php echo base_url() . 'assets/images/slides/' .$banner['img_name']; ?>" alt="<?php echo $banner['title']; ?>">
									</div>
								</div>
								<div class="col-xs-6 col-md-9">
									<div class="form-group row">
											<label class="col-md-1 control-label">File input</label>
											<div class="col-md-4">
												<input type="file" class="btn btn-default" >
											</div>
											<label class="col-md-1 control-label">Image Link</label>
											<div class="col-md-6">
												<input type="text" class="form-control"  value="<?php echo base_url() . 'assets/images/slides/' .$banner['img_name']; ?>">
											</div>
									</div>
									<hr/>
									<div class="form-group row">
											<label class="col-md-1 control-label">Title</label>
											<div class="col-md-4">
												<input type="text" class="form-control"  value="<?php echo $banner['title']; ?>">
											</div>
											<label class="col-md-1 control-label">Sub Title</label>
											<div class="col-md-6">
												<input type="text" class="form-control"  value="<?php echo $banner['sub_title']; ?>">
											</div>
									</div>
									<hr/>
									<div class="form-group row">
											<label class="col-md-1 control-label">Button Title</label>
											<div class="col-md-4">
												<input type="text" class="form-control"  value="<?php echo $banner['btn_text']; ?>">
											</div>
											<label class="col-md-1 control-label">Button Link</label>
											<div class="col-md-6">
												<input type="text" class="form-control"  value="<?php echo $banner['btn_link']; ?>">
											</div>
									</div>
									<hr/>
									<div class="form-group row">
											<label class="col-md-1 control-label">X-Position</label>
											<div class="col-md-4">
												<input type="text" class="form-control"  value="<?php echo $banner['xposition']; ?>">
											</div>
											<label class="col-md-1 control-label">Font Size</label>
											<div class="col-md-6">
												<input type="text" class="form-control"  value="<?php echo $banner['fontsize'].'px'; ?>">
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
								<div class="col-xs-6 col-md-3">
									<div  class="thumbnail">
									  <img src="<?php echo base_url() . 'assets/images/slides/' .$slider['img_name']; ?>" alt="<?php echo $slider['title']; ?>">
									</div>
								</div>
								<div class="col-xs-6 col-md-9">
									<div class="form-group row">
											<label class="col-md-1 control-label">File input</label>
											<div class="col-md-4">
												<input type="file" class="btn btn-default" >
											</div>
											<label class="col-md-1 control-label">Image Link</label>
											<div class="col-md-6">
												<input type="text" class="form-control"  value="<?php echo base_url() . 'assets/images/slides/' .$slider['img_name']; ?>">
											</div>
									</div>
									<hr/>
									<div class="form-group row">
											<label class="col-md-1 control-label">Title</label>
											<div class="col-md-4">
												<input type="text" class="form-control"  value="<?php echo $slider['title']; ?>">
											</div>
											<label class="col-md-1 control-label">Sub Title</label>
											<div class="col-md-6">
												<input type="text" class="form-control"  value="<?php echo $slider['sub_title']; ?>">
											</div>
									</div>
									<hr/>
									<div class="form-group row">
											<label class="col-md-1 control-label">Button Title</label>
											<div class="col-md-4">
												<input type="text" class="form-control"  value="<?php echo $slider['btn_text']; ?>">
											</div>
											<label class="col-md-1 control-label">Button Link</label>
											<div class="col-md-6">
												<input type="text" class="form-control"  value="<?php echo $slider['btn_link']; ?>">
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
											<input type="text" class="form-control" value="<?php echo $welcome_section->title; ?>">
									</div>
								</div>
								<hr/>
								<div class="col-xs-6 col-md-2">
									<label class="col-md-12 control-label">Sub Title</label>
								</div>
								<div class="col-xs-6 col-md-10">
									<div class="form-group row">
											<textarea rows="4" class="form-control" ><?php echo $welcome_section->subtitle; ?></textarea>
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
											<input type="text" class="form-control" value="<?php echo $banner_quote[0]['title']; ?>">
									</div>
								</div>
								<div class="col-xs-6 col-md-3">
									<label class="col-md-12 control-label">Button Title</label>
								</div>
								<div class="col-xs-6 col-md-3">
									<div class="form-group row">
											<input type="text" class="form-control" value="<?php echo $banner_quote[0]['btn_text']; ?>">
									</div>
								</div>
								<div class="col-xs-6 col-md-3">
									<label class="col-md-12 control-label">Button Link</label>
								</div>
								<div class="col-xs-6 col-md-9">
									<div class="form-group row">
											<input type="text" class="form-control" value="<?php echo $banner_quote[0]['btn_link']; ?>">
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
											<input type="text" class="form-control" value="<?php echo $banner_quote[1]['title']; ?>">
									</div>
								</div>
								<div class="col-xs-6 col-md-3">
									<label class="col-md-12 control-label">Button Title</label>
								</div>
								<div class="col-xs-6 col-md-3">
									<div class="form-group row">
											<input type="text" class="form-control" value="<?php echo $banner_quote[1]['btn_text']; ?>">
									</div>
								</div>
								<div class="col-xs-6 col-md-3">
									<label class="col-md-12 control-label">Download Link</label>
								</div>
								<div class="col-xs-6 col-md-9">
									<div class="form-group row">
											<input type="text" class="form-control" value="<?php echo base_url() . 'assets/'.$banner_quote[1]['btn_link']; ?>">
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
								<div class="col-xs-6 col-md-3">
									<div  class="thumbnail">
									  <img src="<?php echo base_url() . 'assets/images/types/' .$type['img_name']; ?>" alt="<?php echo $type['name']; ?>">
									</div>
								</div>
								<div class="col-xs-6 col-md-9">
									<div class="form-group row">
											<label class="col-md-2 control-label">File input</label>
												<div class="col-md-4">
													<input type="file" class="btn btn-default" >
												</div>
												<label class="col-md-2 control-label">Image Link</label>
												<div class="col-md-4">
													<input type="text" class="form-control"  value="<?php echo base_url() . 'assets/images/types/' .$type['img_name']; ?>">
												</div>
									</div>
									<hr/>
									<div class="form-group row">
											<label class="col-md-2 control-label">Title</label>
											<div class="col-md-4">
												<input type="text" class="form-control"  value="<?php echo $type['name']; ?>">
											</div>
											<label class="col-md-2 control-label">Button Link</label>
												<div class="col-md-4">
													<input type="text" class="form-control"  value="<?php echo $type['link']; ?>">
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