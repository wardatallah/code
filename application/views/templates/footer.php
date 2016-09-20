<!--======= Footer =========-->
  <footer>
    <div class="container">
      
      <!--  Footer Links -->
      <div class="footer-link row">
        <div class="col-md-6">
          <ul>
            
			<!-- MY ACCOUNT -->
            <li class="col-sm-6">
              <h5><?php echo $footer_about->title; ?></h5>
              <div class="footer-logo"> <a href="#"><img src="<?php echo $footer_logo->path; ?>" alt=""></a></div>
			  <p class="intro-small"><?php echo $footer_about->subtitle; ?></p>
            </li>
			
            <!--  INFOMATION -->
            <li class="col-sm-6">
              <h5>LEARN MORE</h5>
              <ul class="f-links">
			  <?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
                <li <?php if($actual_link===base_url().'about/') echo 'class="active"'; ?>><a href="<?php echo base_url(); ?>about/">About Us</a></li>
                <li <?php if($actual_link===base_url().'products/') echo 'class="active"'; ?> class="meganav"><a href="<?php echo base_url(); ?>products/">Products</a> </li>
                <li <?php if($actual_link===base_url().'projects/') echo 'class="active"'; ?>><a href="<?php echo base_url(); ?>projects/">PROJECTS</a></li>
				<li <?php if($actual_link===base_url().'collection/') echo 'class="active"'; ?>><a href="#" data-toggle="modal" data-target="#myModal" >Collection</a></li>
				<li <?php if($actual_link===base_url().'contact-us/') echo 'class="active"'; ?>><a href="<?php echo base_url(); ?>contact-us/">CONTACT US</a></li>
              </ul>
            </li>
            
          </ul>
        </div>
        
        <!-- Second Row -->
        <div class="col-md-6">
          <ul class="row">
            
            <!-- TWITTER -->
            <li class="col-sm-6">
              <h5>TWITTER</h5>
              <p>Check out new work on my @Behance portfolio: "BCreative_Multipurpose Theme" http://on.be.net/1zOOfBQ </p>
            </li>
            
            <!-- FLICKR PHOTO -->
            <li class="col-sm-6">
              <h5>CONTACT INFORMATION</h5>
              <div>
				  <ul class="location infooter">
					<li> <i class="fa fa-location-arrow"></i><p><?php echo $locations[0]['address']; ?></p></li>
					<li> <i class="fa fa-phone"></i><p><?php echo $locations[0]['Tel']; ?></p></li>
					<li> <i class="fa fa-fax"></i><p><?php echo $locations[0]['Fax']; ?></p></li>
					<li> <i class="fa fa-envelope"></i><p><?php echo $locations[0]['email']; ?></p></li>
				  </ul>
			  </div>
            </li>
          </ul>
        </div>
      </div>
      
      <!-- Rights -->
      <div class="rights">
        <p>&copy; <?php echo $footer_copyright->subtitle; ?></p>
      </div>
    </div>
  </footer>
  <!-- GO TO TOP --> 
  <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a> 
  <!-- GO TO TOP End --> 
</div>
<!-- Wrap End --> 
<script src="<?php echo base_url().'assets/'; ?>js/jquery-1.11.3.js"></script> 
<script src="<?php echo base_url().'assets/'; ?>js/wow.min.js"></script> 
<script src="<?php echo base_url().'assets/'; ?>js/bootstrap.min.js"></script> 
<script src="<?php echo base_url().'assets/'; ?>js/own-menu.js"></script> 
<script src="<?php echo base_url().'assets/'; ?>js/owl.carousel.min.js"></script> 
<script src="<?php echo base_url().'assets/'; ?>js/jquery.magnific-popup.min.js"></script> 
<script src="<?php echo base_url().'assets/'; ?>js/jquery.flexslider-min.js"></script> 
<script src="<?php echo base_url().'assets/'; ?>js/jquery.isotope.min.js"></script> 
<!-- Developer : Ward Atallah -->
<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="<?php echo base_url().'assets/'; ?>rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url().'assets/'; ?>rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
<script src="<?php echo base_url().'assets/'; ?>js/main.js"></script>
<script src="<?php echo base_url().'assets/'; ?>js/products.js"></script>
</body>
</html>