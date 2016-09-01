  
 
  <!-- CONTENT START -->
  <div class="content"> 
    <!--======= SUB BANNER =========-->
	  <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
		<div class="container">
		  <h4>CONTACT US</h4>
		  <!-- Breadcrumb -->
		  <ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">CONTACT US</li>
		  </ol>
		</div>
	  </section>
	  
   
    <!--======= Contact Us =========-->
    <section class="section-p-30px conact-us no-padding-b animate fadeInUp" data-wow-delay="0.4s"> 
      <!--======= CONTACT FORM =========-->
      <div class="container"> 
        <!-- Tittle -->
        <div class="tittle">
          <p>Please don’t hesitate to contact me if you have any questions, commnets or messages. <br>
            I’ll try to respond to everything!</p>
        </div>
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
          
          <!-- Shop Location -->
          <div class="col-md-4 animate fadeInLeft" data-wow-delay="0.4s">
            <div class="boxes-in">
              <h6>SHOP LOCATION</h6>
              <ul class="location">
                <li> <i class="fa fa-location-arrow"></i>
                  <p>1234 Heaven Stress, Beverly 
                    United State</p>
                </li>
                <li> <i class="fa fa-phone"></i>
                  <p>Phone: (800) 0123 4567 890</p>
                </li>
                <li> <i class="fa fa-envelope"></i>
                  <p>Support@democompany.com</p>
                </li>
                <li> <i class="fa fa-clock-o"></i>
                  <p>OPEN: 9AM - 8PM</p>
                </li>
              </ul>
            </div>
          </div>
          
          <!-- NEWSLETTER -->
          <div class="col-md-4 animate fadeInUp" data-wow-delay="0.4s">
            <div class="boxes-in">
              <h6>NETWORKS</h6>
              
              <!--======= FOOTER ICONS =========-->
              <ul class="social_icons">
                <li class="facebook"><a href="#."> <i class="fa fa-facebook"></i></a></li>
                <li class="twitter"><a href="#."> <i class="fa fa-twitter"></i></a></li>
                <li class="googleplus"><a href="#."> <i class="fa fa-google"></i></a></li>
                <li class="skype"><a href="#."> <i class="fa fa-skype"></i></a></li>
                <li class="pinterest"><a href="#."> <i class="fa fa-pinterest"></i></a></li>
                <li class="dribbble"><a href="#."> <i class="fa fa-dribbble"></i></a></li>
                <li class="flickr"><a href="#."> <i class="fa fa-flickr"></i></a></li>
                <li class="behance"><a href="#."> <i class="fa fa-behance"></i></a></li>
                <li class="linkedin"><a href="#."> <i class="fa fa-linkedin"></i></a></li>
                <li class="youtube"><a href="#."> <i class="fa fa-youtube"></i></a></li>
                <li class="instagram"><a href="#."> <i class="fa fa-instagram"></i></a></li>
                <li class="stumbleupon"><a href="#."> <i class="fa fa-stumbleupon"></i></a></li>
                <li class="soundcloud"><a href="#."> <i class="fa fa-soundcloud"></i></a></li>
              </ul>
            </div>
          </div>
          
          <!-- TESTIMONIAL -->
          <div class="col-md-4 animate fadeInRight" data-wow-delay="0.4s">
            <div class="boxes-in">
              <h6>SUPPORT PEPOLE</h6>
              <div class="media">
                <div class="media-left"> 
                  <!--  Image -->
                  <div class="avatar"> <a href="#"> <img class="media-object" src="<?php echo base_url().'assets/'; ?>images/avatar-11.jpg" alt=""> </a> </div>
                </div>
                <!--  Details -->
                <div class="media-body">
                  <h5>M_Adnan</h5>
                  <p>Support Manager</p>
                  <span><i class="fa fa-skype"></i> adnan.arif69</span> </div>
              </div>
            </div>
          </div>
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
	var myLatLng = new google.maps.LatLng(-37.814199, 144.961560);
	var mapOptions = {
		zoom: 17,
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
		title: 'Intermid',
		icon: '<?php echo base_url().'assets/'; ?>images/map-locator.png'
	});
} else {
	return false;
}
}
google.maps.event.addDomListener(window, 'load', initialize_map);
</script>