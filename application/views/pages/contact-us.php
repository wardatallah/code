  
 
  <!-- CONTENT START -->
  <div class="content"> 
    <!--======= SUB BANNER =========-->
	  <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
		<div class="container">
		  <h4>CONTACT US</h4>
		  <!-- Breadcrumb -->
		  <ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>">Home</a></li>
			<li class="active">CONTACT US</li>
		  </ol>
		</div>
	  </section>
	   
    <!--======= Contact Us =========-->
    <section class="section-p-30px conact-us no-padding-b animate fadeInUp" data-wow-delay="0.4s"> 
      <!--======= CONTACT FORM =========-->
      <div class="container"> 
        <div class="contact section-p-30px no-padding-b">
          <div class="contact-form"> 
            <!--======= FORM  =========-->
            <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
              <div class="row">
                <div class="col-md-6">
                  <ul class="row">
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="*NAME">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="*EMAIL">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="company" id="company" placeholder="WEBSITE">
                      </label>
                    </li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="row">
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="website" id="website" placeholder="SUBJECT">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>
                        <textarea class="form-control" name="message" id="message" rows="5" placeholder="*MESSAGE"></textarea>
                      </label>
                    </li>
                    <li class="col-sm-12 no-margin">
                      <button type="submit" value="submit" class="btn" id="btn_submit" onClick="proceed();">SEND MESSAGE</button>
                    </li>
                  </ul>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    
    <!--======= BOXES =========-->
    <section class="section-p-60px contact-box animate fadeInUp" data-wow-delay="0.4s">
      <div class="container">
		
		<div class="row"> 
          
          <?php foreach ($locations as $location): ?>
          <div class="col-md-6 animate fadeInLeft" data-wow-delay="0.4s">
            <div class="boxes-in">
              <h6><?php echo $location['title']; ?></h6>
              <ul class="location">
                <li> <i class="fa fa-location-arrow"></i>
                  <p><?php echo $location['address']; ?></p>
                </li>
                <li> <i class="fa fa-phone"></i>
                  <p><?php echo $location['Tel']; ?></p>
                </li>
				<li> <i class="fa fa-fax"></i>
                  <p><?php echo $location['Fax']; ?></p>
                </li>
				<?php if ($location['Mobile']!='none'){ ?>
				<li> <i class="fa fa-mobile"></i>
                  <p><?php echo $location['Mobile']; ?></p>
                </li>
				<?php } ?>
                <li> <i class="fa fa-envelope"></i>
                  <p><?php echo $location['email']; ?></p>
                </li>
              </ul>
            </div>
          </div>
		  <?php endforeach; ?>
          
          
        </div>
		
		
      </div>
    </section>
	
	<!-- Map -->
    <div id="map" class="animate fadeInUp" data-wow-delay="0.4s"></div>
  </div>
  
<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script> 
<script type="text/javascript">
/*==========  Map  ==========*/
var map;
function initialize_map() {
if ($('#map').length) {
	var contentString = '<div id="map-content"> ' +
							'<div id="siteNotice"></div>' +
								'<img src="<?php echo $header_logo->path; ?>" width="200px">' + 
									'<div id="bodyContent" class="map-info">'+
										'<h6><?php echo $locations[0]['title']; ?></h6>' + '<div class="boxes-in"><ul class="location">' + 
											'<li> <i class="fa fa-location-arrow"></i>'+
												  '<p><?php echo $locations[0]['address']; ?></p></li>' +
											'<li> <i class="fa fa-phone"></i>'+
												  '<p><?php echo $locations[0]['Tel']; ?></p></li>' +
											'<li> <i class="fa fa-fax"></i>'+
												  '<p><?php echo $locations[0]['Fax']; ?></p></li>' +
											'<li> <i class="fa fa-envelope"></i>'+
												  '<p><?php echo $locations[0]['email']; ?></p></li>' +
										'</ul></div>' +
									'</div>'+
						'</div>';

    var infowindow = new google.maps.InfoWindow({
          content: contentString
    });
	
	
	
	var myLatLng = new google.maps.LatLng(<?php echo $locations[0]['lat']; ?> , <?php echo $locations[0]['lng']; ?>);
	var mapOptions = {
		zoom: 15,
		center: myLatLng,
		scrollwheel: false,
		panControl: false,
		zoomControl: true,
		scaleControl: false,
		mapTypeControl: false,
		streetViewControl: false
	};
	map = new google.maps.Map(document.getElementById('map'), mapOptions);
	var marker = new google.maps.Marker({
		position: myLatLng,
		map: map,
		title: 'Intermed',
		icon: '<?php echo $map_logo->path; ?>'
	});
	
	marker.addListener('click', function() {
          infowindow.open(map, marker);
    });
} else {
	return false;
}
}
google.maps.event.addDomListener(window, 'load', initialize_map);
</script>