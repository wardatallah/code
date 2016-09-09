<div class="content"> 
        <!--======= SUB BANNER =========-->
	  <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
		<div class="container">
		  <h4>ABOUT US</h4>
		  <!-- Breadcrumb -->
		  <ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">ABOUT US</li>
		  </ol>
		</div>
	  </section>
	  
	  
	<section class="section-p-60px services welcome">
      <div class="container"> 
        <!--  Tittle -->
         <div class="tittle tittle-cont  animate fadeInUp" data-wow-delay="0.4s">
          <h3><?php echo $welcome_section->title; ?></h3>
          <hr>
          <p><?php echo $welcome_section->subtitle; ?></p>
        </div>
        
        <!--  Services -->
		<div class="tittle   tittle-cont  animate fadeInUp" data-wow-delay="0.4s">
          <h5>WHAT WE DO</h5>
          <hr>
        </div>

        <ul class="row">
		 <?php foreach ($whatwedo_section as $item): ?>
		 
			<li class="col-sm-4  animate fadeInLeft" data-wow-delay="0.4s">
				<div class="icon"><i class="fa <?php echo $item['icon']; ?>"></i></div>
				<h5><?php echo $item['title']; ?></h5>
				<p><?php echo $item['subtitle']; ?></p>
			</li>
        		 
		 <?php endforeach; ?>
        </ul>
		
      </div>
    </section>
    
    <section class="parallex parallex-fur animate fadeInUp" data-wow-delay="0.4s" data-stellar-background-ratio="0.5">
      <div class="overlay banner">
        <div class="container">
          <div class="col-sm-8"><h3 class="text-left" ><?php  echo $about_banner_section[0]['title'] ; ?></h3></div>
          <div class="col-sm-4"><a href="<?php  echo $about_banner_section[0]['btn_link'] ; ?>" class="btn margin-top-20"><?php  echo $about_banner_section[0]['btn_text'] ; ?></a> </div>
		</div>
      </div>
    </section>
	<section class="section-p-60px team">
      <div class="container"> 
        
        <!-- TITTLE -->
        <div class="tittle tittle-cont  animate fadeInUp" data-wow-delay="0.4s">
          <h3>Our Locations</h3>
          <hr>
        </div>
        <ul class="row">
          <?php foreach ($locations_section as $location): ?>
          <!-- TEAM 1 -->
          <li class="col-md-3  animate fadeInLeft" data-wow-delay="0.4s"> <img class="img-responsive" src="<?php echo base_url().'assets/'; ?><?php  echo $location['img_name']  ; ?>" alt="" >
            <h4><?php  echo $location['title']  ; ?></h4>
          </li>
          <?php endforeach; ?>
          
        </ul>
      </div>
    </section>
	
	
    <!--======= TESTIMONIALS =========-->
    <section class="testimonial parallex parallex-fur animate fadeInUp" data-wow-delay="0.4s" data-stellar-background-ratio="0.5">
      <div class="section-p-60px overlay">
        <div class="container"> 
          
          <!-- Tittle -->
          <div class="tittle tittle-cont white  animate fadeInUp" data-wow-delay="0.4s animate fadeInUp" data-wow-delay="0.4s">
            <h3>WHAT CLIENTS SAY?</h3>
            <hr>
          </div>
          
          <!-- Slider Section -->
          <div class="testi-slides  animate fadeInUp" data-wow-delay="0.4s"> 
            <?php foreach ($clients_say_section as $client): ?>
            <div class="testi">
              <div class="avatar"> <img src="<?php echo $client['img_link']; ?>" alt="<?php echo $client['client_name']; ?>"> </div>
              <p>“<?php echo $client['client_text']; ?>”</p>
              <h5><?php echo $client['client_name']; ?></h5>
              <p class="posi"><?php echo $client['client_position']; ?></p>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
	
	
	
	<section class="section-p-60px our-clients">
		<div class="container"> 
		  <!--  Tittle -->
		  <div class="tittle tittle-cont  animate fadeInUp" data-wow-delay="0.4s">
			<h3>OUR CLIENTS</h3>
			<hr>
			
			<!--  Text Intro -->
			<p class="font-montserrat intro text-center"><?php echo $our_clients_heading[0]['subtitle']; ?></p>
		  </div>
		  
		  <!--  Client Logo Slider -->
		  <div class="client-slide  animate fadeInUp" data-wow-delay="0.4s">
		  <?php foreach ($our_clients_section as $client): ?>
			<div class="slide"><a href="<?php echo $client['client_link']; ?>"><img class="img-responsive" src="<?php echo $client['img_path']; ?>" alt=""></a></div>
		  <?php endforeach; ?>		 
		 </div>
		</div>
    </section>
  
     
  </div>
  