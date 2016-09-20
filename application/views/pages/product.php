	<?php 
		$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		if (!isset($this->session->userdata['private_user']) && $private == true ) {

			header("location: $actual_link");
		}
	?>
  
  <!-- CONTENT START -->
  <div class="content"> 
    
    <!--======= SUB BANNER =========-->
    <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
      <div class="container">
        <h4><?php echo $product->name; ?></h4>
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url(); ?>">Home</a></li>
          <li><a href="<?php echo base_url() . 'products/'; ?>">PRODUCTS</a></li>
          <li class="active"><?php echo $product->name; ?></li>
        </ol>
      </div>
    </section>
    
    <!--======= PAGES INNER =========-->
    <section class="section-p-30px pages-in item-detail-page">
      <div class="container">
        <div class="row"> 
          
          <!--======= IMAGES SLIDER =========-->
          <div class="col-sm-6 large-detail animate fadeInLeft" data-wow-delay="0.4s"> 
          	<img class="zoom_05 img-responsive" src="<?php echo $product->img_path; ?>" >
          </div>
          
          <!--======= ITEM DETAILS =========-->
          <div class="col-sm-6 animate fadeInRight" data-wow-delay="0.4s">
            <div class="row">
              <div class="col-sm-12">
                <h5 class="product-name"><?php echo $product->name; ?></h5>
				<hr>
              </div>
              <!--<div class="col-sm-12"> <span class="code">PRODUCT CODE: SKU: PDID-BC-01.</span>
                <div class="some-info no-border"> <br>
                  <div class="in-stoke"> <i class="fa fa-check-circle"></i> IN STOCK</div>
			  </div>
                <hr>
              </div>-->
            </div>
			
            <p class="get-black"><?php echo $product->prod_text; ?></p>
            <hr>
			<div class="row">
              <div class="col-sm-12">
                <span class="prod-class">Country : <?php echo $product->country; ?></span>
              </div>
            </div>
			<hr>
			<div class="row">
              <div class="col-sm-12">
                <span class="prod-class">Type : <?php echo $product->type; ?></span>
              </div>
            </div>
			<hr>
            <div class="row">
              <div class="col-sm-12">
                <span class="prod-class">Color : <?php echo $product->color; ?></span>
              </div>
            </div>
			<hr>
			<div class="row">
              <div class="col-sm-12">
                <span class="prod-class">Size : <?php echo $product->size; ?></span>
              </div>
            </div>
			<hr>
			<div class="row"> 
              <!-- QUIENTY -->
              <div class="col-sm-12">
                <div class="fun-share">
                  <input type="number" min="1" max="10" value="1" class="form-control">
                  <a href="#." class="btn btn-small btn-dark">ADD TO CART</a> 
				</div>
              </div>
            </div>
          </div>
        </div>
        
        
      
      <!--======= RELATED PRODUCTS =========-->
      <section class="section-p-60px new-arrival new-arri-w-slide">
         <div class="container"> 
          
          <!--  Tittle -->
          <div class="tittle tittle-2 animate fadeInUp" data-wow-delay="0.4s">
            <h5>RELATED PRODUCTS</h5>
            <p class="font-playfair">Our Best Products</p>
          </div>
          
          <!--  New Arrival Tabs Products  -->
          <div class="popurlar_product client-slide animate fadeInUp" data-wow-delay="0.4s"> 
            <!--  New Arrival  -->
            <?php foreach($products as $prod): ?>
            <div class="items-in"> 
              <!-- Image --> 
              <img src="<?php echo $prod['img_path'];?>" alt="<?php echo $prod['name'];?>"> 
              <!-- Hover Details -->
              <div class="over-item">
                <ul class="animated fadeIn">
                  <li> <a href="<?php echo $prod['img_path'];?>" data-lighter><i class="ion-search"></i></a></li>
							<li> <a href="<?php echo base_url() ."products/" .$prod['id'];?>"><i class="fa fa-link"></i></a></li>
                  <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                </ul>
              </div>
              <!-- Item Name -->
              <div class="details-sec"> <a href="<?php echo base_url() ."products/" .$prod['id'];?>"><?php echo $prod['name'];?></a> <span class="font-montserrat"><!-- price --></span> </div>
            </div>
			<?php endforeach; ?>
            
          </div>
        </div>
      </section>
    </section>
  </div>