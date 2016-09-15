  <!--======= HOME MAIN SLIDER =========-->
  <section class="home-slider">
    <div class="tp-banner-container">
      <div class="tp-banner">
        <ul>
          <?php foreach($banner_home as $ban): ?>
          <li data-transition="fade" data-slotamount="7"> <img src="<?php echo $ban['img_path']; ?>" data-bgposition="center top" alt="" /> 
            
            <!-- Layer -->
            <div class="tp-caption sfb text-uppercase font-montserrat text-center tp-resizeme" 
                  data-x="<?php echo $ban['xposition']; ?>" 
                  data-y="center" 
                  data-speed="700" 
                  data-start="1200" 
                  data-easing="easeOutBack"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-elementdelay="0.1" 
                  data-endelementdelay="0.1" 
                  data-endspeed="300" 
                  data-captionhidden="on" 
                  style="color: #272727; font-size: <?php echo $ban['fontsize']; ?>px; font-weight:bold;"> <?php echo $ban['title']; ?> </div>
            
            <!-- Layer -->
            <div class="tp-caption sfb text-uppercase font-montserrat no-space text-left tp-resizeme" 
                  data-x="<?php echo $ban['xposition']; ?>" 
                  data-y="center" data-voffset="70" 
                  data-speed="700" 
                  data-start="1600" 
                  data-easing="easeOutBack"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-elementdelay="0.1" 
                  data-endelementdelay="0.1" 
                  data-endspeed="300" 
                  data-captionhidden="on" 
                  style="color: #272727; font-size: <?php echo $ban['fontsize']*0.6; ?>px; font-weight:400; line-height:24px;"> <?php echo $ban['sub_title']; ?> </div>
            
            <!-- Layer -->
            <div class="tp-caption sfb tp-resizeme" 
                  data-x="<?php echo $ban['xposition']; ?>" 
                  data-y="500" 
                  data-speed="700" 
                  data-start="2000" 
                  data-easing="easeOutBack"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-elementdelay="0.1" 
                  data-endelementdelay="0.1" 
                  data-endspeed="300" 
                  data-captionhidden="on"> <a href="<?php echo $ban['btn_link']; ?>" class="btn btn-small btn-dark"><?php echo $ban['btn_text']; ?></a> </div>
          </li>
		  <? endforeach ; ?>
        </ul>
      </div>
    </div>
  </section>
  
  <!-- CONTENT START -->
  <div class="content"> 
    
    <!--======= FURNITURE LARGE =========-->
    <section class="furniture-large animate fadeInUp" data-wow-delay="0.4s">
      <div class="fur-slide"> 
        
        <?php foreach ($slider_home as $slider){ ?>
        <div class="item"> <img src="<?php echo $slider['img_path']; ?>" alt="" >
          <div class="item-inn">
            <div class="item-hover">
              <div class="position-center-center text-center">
                <h3><?php echo $slider['title']; ?></h3>
                <p><?php echo $slider['sub_title']; ?> </p>
                <a href="<?php echo $slider['btn_link']; ?>" class="btn btn-small"><?php echo $slider['btn_text']; ?></a> </div>
            </div>
          </div>
        </div>
        <?php } ?>
		
      </div>
    </section>
    
	
	<!--======= WHAT WE DO  =========-->
    <section class="section-p-30px feature-con">
      <div class="container"> 
        
        <!-- TITTLE -->
        <div class="tittle tittle-cont  animate fadeInUp" data-wow-delay="0.4s">
          <h3><?php echo $welcome_section->title; ?></h3>
          <hr>
          <p><?php echo $welcome_section->subtitle; ?></p>
        </div>
      </div>
    </section>
	
	
	
	<div class="add-bnr-4">
      <div class="container">
		<div class="tittle tittle-cont  animate fadeInUp" data-wow-delay="0.4s">
          <h3>What You Are Looking For ?</h3>
          <hr>
        </div>
        <ul class="row">
          
          <?php foreach($categories as $category): ?>
          <li class="col-md-4 animate fadeInRight" data-wow-delay="0.4s">
            <div class="inn-sec"> <img src="<?php echo $category['img_link']; ?>" alt="">
              <div class="upper">
                <h4 class="text-uppercase"><?php echo $category['name']; ?></h4>
                <a href="<?php echo $category['link']; ?>">SHOP NOW</a> </div>
            </div>
          </li>
          <? endforeach; ?>
          
        </ul>
      </div>
    </div>
	
	
    <section class="parallex parallex-fur animate fadeInUp" data-wow-delay="0.4s" data-stellar-background-ratio="0.5">
      <div class="overlay banner">
        <div class="container">
          <div class="col-sm-8"><h3 class="text-left" ><?php echo $banner_quote[0]['title']; ?> </h3></div>
          <div class="col-sm-4"><a href="<?php echo $banner_quote[0]['btn_link']; ?>" class="btn margin-top-20"><?php echo $banner_quote[0]['btn_text']; ?></a> </div>
		</div>
      </div>
    </section>
	
	
   
    <section class="section-p-60px no-padding-b">
      <div class="container"> 
        <!--  Title -->
        <div class="tittle tittle-2 animate fadeInUp" data-wow-delay="0.4s">
          <h5><?php echo $products_section->title; ?></h5>
          <hr>
          <p><?php echo $products_section->subtitle; ?></p>
        </div>
      </div>
      
      <!-- ITEMS -->
      <ul class="items-fer animate fadeInUp" data-wow-delay="0.4s">
        
		<?php 	$delayer=0.2;
				foreach ($products_view as $product){ ?>
        <li class="animate fadeInUp" data-wow-delay="<?php echo $delayer; ?>s">
          <div class="item-inn"> 
            <!-- ITEM IMAGE --> 
            <img class="img-responsive" src="<?php echo $product['img_path']; ?>" alt="" > 
            <!-- HOVER -->
            <div class="item-hover">
              <div class="position-center-center"> <a class="zoom" href="<?php echo $product['img_path']; ?>" data-lighter><i class="fa fa-search"></i></a> </div>
              <!-- ITEM DETAILS -->
              <div class="item-detail">
                <h6><?php echo $product['name']; ?></h6>
                <div class="some-info"> <a href="#."><i class="ion-ios-cart"></i></a> <a href="#."><i class="fa fa-heart-o"></i></a> <a href="#."><i class="ion-shuffle"></i></a> </div>
              </div>
            </div>
          </div>
        </li>
        <?php 
		if ($delayer==1)
			$delayer=0.2;
		else
			$delayer+=0.2;
				} ?>
      </ul>
    </section>
	
	
	<!--======= PARALLAX SECTION =========-->
    <section class="parallex parallex-fur animate fadeInUp" data-wow-delay="0.4s" data-stellar-background-ratio="0.5">
      <div class="overlay banner">
        <div class="container">
          <div class="col-sm-8"><h3 class="text-left" ><?php echo $banner_quote[1]['title']; ?> </h3></div>
          <div class="col-sm-4"><a href="<?php echo $banner_quote[1]['btn_link']; ?>" class="btn margin-top-20"><i class="fa fa-android android-size" aria-hidden="true"></i><?php echo $banner_quote[1]['btn_text']; ?></a> </div>
		</div>
      </div>
    </section>
	
	
	<!--======= Portfolio =========-->
    <section class="no-padding-b full-width portfolio port-wrap portfolio-style-2">
      <div class="container-fluid"> 
        <!-- Portfolio Row -->
        <ul class="port-folio-row row col-4 items animate fadeInUp" data-wow-delay="0.4s">
          
          <?php foreach ($types_view as $type){ ?>
          <li class="item int arch build col-sm-3">
            <article> <img src="<?php echo $type['img_path']; ?>" alt="<?php echo $type['name']; ?>"> 
              <div class="hover-port">
                <div class="position-center-center"> <a href="<?php echo $type['img_path']; ?>" data-lighter><i class="fa fa-search"></i></a> <a href="<?php echo $type['link']; ?>"><i class="fa fa-link"></i></a>
                  <h6><?php echo $type['name']; ?></h6>
                </div>
              </div>
            </article>
          </li>
		  <?php } ?>
		  
        </ul>
      </div>
    </section>
  </div>
  <div></div>