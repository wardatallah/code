
  <!-- CONTENT START -->
  <div class="content"> 
    
    <!--======= SUB BANNER =========-->
    <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
      <div class="container">
        <h4>Best Of Our Work</h4>
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Projects</li>
        </ol>
      </div>
    </section>
    
    <!--======= PAGES INNER =========-->
    <section class="section-p-30px pages-in">
      <div class="container">
        <div class="row"> 
          <!--======= ITEMS =========-->
          <div class="col-sm-12 animate fadeInUp" data-wow-delay="0.4s">
            <div class="items-short-type animate fadeInUp" data-wow-delay="0.4s"> 
              
              
              <!--======= VIEW ITEM NUMBER =========-->
              <div class="view-num">
				<div class="search-box">
					<input id="searchItem" type="text" class="form-control" placeholder="Search" />
				</div>
			  
                <div class="short-by">
				<select id="country_cat" class="selectpicker">
                    <option>By Country</option>
					<?php foreach ($country_cat as $item): ?>
						<option><?php echo $item['cat_item_name']; ?> </option>
					<?php endforeach; ?>					
                  </select>
				  <select  id="type_cat" class="selectpicker">
                    <option>By Type</option>
                    <?php foreach ($type_cat as $item): ?>
						<option><?php echo $item['cat_item_name']; ?> </option>
					<?php endforeach; ?>
                  </select>
                  <select  id="color_cat" class="selectpicker">
                    <option>By Color</option>
                    <?php foreach ($color_cat as $item): ?>
						<option><?php echo $item['cat_item_name']; ?> </option>
					<?php endforeach; ?>
                  </select>
                  <select  id="size_cat" class="selectpicker">
                    <option>By Size</option>
					<?php foreach ($size_cat as $item): ?>
						<option><?php echo $item['cat_item_name']; ?> </option>
					<?php endforeach; ?>
                  </select>
                </div>
              </div>
            </div>
            
            <!--======= Products =========-->
            <div class="popurlar_product animate fadeInUp" data-wow-delay="0.4s">
<<<<<<< HEAD
              <ul class="row productlist">
				 <li class="col-sm-3 animate fadeIn productitemsample" data-wow-delay="0.2s" style="display:none;">
					  <div class="items-in"> 
						<!-- Image --> 
						<img src="<?php echo base_url().'assets/images/products/'; ?>#img_name" alt=""> 
						<!-- Hover Details -->
						<div class="over-item">
						  <ul class="animated fadeIn">
							<li> <a href="<?php echo base_url().'assets/images/products/'; ?>#img_name_a" data-lighter><i class="ion-search"></i></a></li>
							<li> <a href="#."><i class="ion-shuffle"></i></a></li>
							<li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
							<li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
							<!-- Rating Stars -->
							<li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
						  </ul>
						</div>
						<!-- Item Name -->
						<div class="details-sec"> <a href="#.">#name</a></div>
					  </div>
				 </li>
=======
              <ul class="row">
                
                <?php foreach($products as $product): ?>
                <li class="col-sm-3 animate fadeIn" data-wow-delay="0.2s">
                  <div class="items-in"> 
                    <!-- Image --> 
                    <img src="<?php echo base_url().'assets/'; ?>images/new-item-1.jpg" alt=""> 
                    <!-- Hover Details -->
                    <div class="over-item">
                      <ul class="animated fadeIn">
                        <li> <a href="<?php echo base_url().'assets/'; ?>images/new-item-1.jpg" data-lighter><i class="ion-search"></i></a></li>
                        <li> <a href="<?php echo $product['id']; ?>"><i class="fa fa-link"></i></a></li>
                        <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                        <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                        
                      </ul>
                    </div>
                    <!-- Item Name -->
                    <div class="details-sec"> <a href="<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a> </div>
                  </div>
                </li>
                <?php endforeach; ?>
                
>>>>>>> 6413e5a1de0684009f78307700a4e5ae27cb459d
              </ul>
            </div>
            
            <!--======= PAGINATION =========-->
            <ul class="pagination animate fadeInUp" data-wow-delay="0.4s">
              <li><a href="#.">1</a></li>
              <li><a href="#.">2</a></li>
              <li><a href="#.">3</a></li>
              <li><a href="#.">4</a></li>
              <li><a href="#.">5</a></li>
              <li><a href="#."><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!--
  
  <script>
	jQuery(document).ready(function($) {
	  
	  //  Price Filter ( noUiSlider Plugin)
		$("#price-range").noUiSlider({
		range: {
		  'min': [ 0 ],
		  'max': [ 1000 ]
		},
		start: [40, 940],
			connect:true,
			serialization:{
				lower: [
			$.Link({
			  target: $("#price-min")
			})
		  ],
		  upper: [
			$.Link({
			  target: $("#price-max")
			})
		  ],
		  format: {
		  // Set formatting
			decimals: 2,
			prefix: '$'
		  }
			}
	  })
	})

  </script> --!>