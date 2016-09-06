
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
					<input type="text" class="form-control" placeholder="Search" />
				</div>
			  
                <div class="short-by">
				<select class="selectpicker">
                    <option>By Country</option>
                    <option>Lebanon</option>
					<option>China</option>
					<option>Spain</option>                    
                  </select>
				  <select class="selectpicker">
                    <option>By Type</option>
                    <option>Marble</option>
                    <option>Granite</option>
                  </select>
                  <select class="selectpicker">
                    <option>By Price</option>
                    <option>100$ - 200$</option>
                    <option>1000$ - 2000$</option>
                    <option>10000$ - 20000$</option>
                  </select>
                  <select class="selectpicker">
                    <option>By Color</option>
                    <option>RED</option>
                    <option>BLUE</option>
                    <option>GREEN</option>
                    <option>YELLOW</option>
                  </select>
                  <select class="selectpicker">
                    <option>By Size</option>
                    <option>Small</option>
                    <option>Large </option>
                    <option>X Large</option>
                    <option>XX Large</option>
                  </select>
                </div>
              </div>
            </div>
            
            <!--======= Products =========-->
            <div class="popurlar_product animate fadeInUp" data-wow-delay="0.4s">
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

  </script>