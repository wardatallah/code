
  
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
          	<img class="zoom_05 img-responsive" src="<?php echo $product->img_path; ?>" data-zoom-image="<?php echo $product->img_path; ?>">
          </div>
          
          <!--======= ITEM DETAILS =========-->
          <div class="col-sm-6 animate fadeInRight" data-wow-delay="0.4s">
            <div class="row">
              <div class="col-sm-12">
                <h5><?php echo $product->name; ?></h5>
              </div>
              <div class="col-sm-12"> <span class="code">PRODUCT CODE: SKU: PDID-BC-01.</span>
                <div class="some-info no-border"> <br>
                  <div class="in-stoke"> <i class="fa fa-check-circle"></i> IN STOCK</div>
                  <a href="#review"  class="review">(3) Review</a> &nbsp;&nbsp;&nbsp; <a href="#review-form" class="review">Add Your Review</a></div>
                <hr>
              </div>
            </div>
            <p><?php echo $product->prod_text; ?></p>
            <hr>
            <div class="row">
              <div class="col-sm-12">
                <div class="item-select"> 
                  <!-- COLOR -->
                  <p>*COLOR</p>
                  <select class="selectpicker">
                    <option>PLEASE SELETCT</option>
                    <option>RED</option>
                    <option>BLUE</option>
                    <option>GREEN</option>
                    <option>YELLOW</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="item-select"> 
                  <!--  SIZE -->
                  <p>*SIZE</p>
                  <select class="selectpicker">
                    <option>PLEASE SELETCT</option>
                    <option>Small</option>
                    <option>Large </option>
                    <option>X Large</option>
                    <option>XX Large</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row"> 
              <!-- QUIENTY -->
              <div class="col-sm-12">
                <div class="fun-share">
                  <input type="text" value="1">
                  <a href="#." class="btn btn-small btn-dark">ADD TO CART</a> <a href="#." class="share-sec"><i class="ion-shuffle"></i></a> <a class="share-sec" href="#."><i class="fa fa-heart-o"></i></a> </div>
              </div>
              <!-- SHARE -->
              <div class="col-sm-12">
                <ul class="share-with">
                  <li>
                    <p>SHARE WITH</p>
                  </li>
                  <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#."><i class="fa fa-dribbble"></i></a></li>
                  <li><a href="#."><i class="fa fa-pinterest"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        
        <!--======= PRODUCT DESCRIPTION =========-->
        <div class="item-decribe">
          <div class="text-center"> 
            <!-- Nav tabs -->
            <ul class="nav nav-tabs animate fadeInUp" data-wow-delay="0.4s" role="tablist">
              <li role="presentation"><a href="#descr" aria-controls="men" role="tab" data-toggle="tab">DESCRIPTION</a></li>
              <li role="presentation" class="active"><a href="#review" aria-controls="women" role="tab" data-toggle="tab">REVIEW (03)</a></li>
              <li role="presentation"><a href="#tags" aria-controls="access" role="tab" data-toggle="tab">TAGS</a></li>
            </ul>
          </div>
          <!-- Tab panes -->
          <div class="tab-content animate fadeInUp" data-wow-delay="0.4s"> 
            <!-- DESCRIPTION -->
            <div role="tabpanel" class="tab-pane fade" id="descr">
              <p><?php echo $product->prod_text; ?></p>
            </div>
            
            <!-- REVIEW -->
            <div role="tabpanel" class="tab-pane fade  in active" id="review">
              <h6>3 REVIEWS FOR SHIP YOUR IDEA</h6>
              
              <!-- REVIEW PEOPLE 1 -->
              <div class="media">
                <div class="media-left"> 
                  <!--  Image -->
                  <div class="avatar"> <a href="#"> <img class="media-object" src="<?php echo base_url().'assets/images/'; ?>avatar-1.jpg" alt=""> </a> </div>
                </div>
                <!--  Details -->
                <div class="media-body">
                  <p class="font-playfair">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.”</p>
                  <h6>TYRION LANNISTER <span class="pull-right">June 7, 2013</span> </h6>
                </div>
              </div>
              
              <!-- REVIEW PEOPLE 1 -->
              
              <div class="media">
                <div class="media-left"> 
                  <!--  Image -->
                  <div class="avatar"> <a href="#"> <img class="media-object" src="<?php echo base_url().'assets/images/'; ?>avatar-2.jpg" alt=""> </a> </div>
                </div>
                <!--  Details -->
                <div class="media-body">
                  <p class="font-playfair">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.”</p>
                  <h6>TYRION LANNISTER <span class="pull-right">June 7, 2013</span> </h6>
                </div>
              </div>
              
              <!-- ADD REVIEW -->
              <h6 class="margin-t-40">ADD REVIEW</h6>
              <form id="review-form">
                <ul class="row">
                  <li class="col-sm-6">
                    <label> *NAME
                      <input type="text" value="" placeholder="">
                    </label>
                  </li>
                  <li class="col-sm-6">
                    <label> *EMAIL
                      <input type="email" value="" placeholder="">
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <label> *YOUR REVIEW
                      <textarea></textarea>
                    </label>
                  </li>
                  <li class="col-sm-6"> 
                    <!-- Rating Stars -->
                    <div class="stars"> <span>YOUR RATING</span> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                  </li>
                  <li class="col-sm-6">
                    <button type="submit" class="btn btn-dark btn-small pull-right no-margin">POST REVIEW</button>
                  </li>
                </ul>
              </form>
            </div>
            
            <!-- TAGS -->
            <div role="tabpanel" class="tab-pane fade" id="tags"> </div>
          </div>
        </div>
      </div>
      
      <!--======= RELATED PRODUCTS =========-->
      <section class="section-p-60px new-arrival new-arri-w-slide">
         <div class="container"> 
          
          <!--  Tittle -->
          <div class="tittle tittle-2 animate fadeInUp" data-wow-delay="0.4s">
            <h5>RELATED PRODUCTS</h5>
            <p class="font-playfair">Most haver in your Shop </p>
          </div>
          
          <!--  New Arrival Tabs Products  -->
          <div class="popurlar_product client-slide animate fadeInUp" data-wow-delay="0.4s"> 
            
            <!--  New Arrival  -->
            
            <div class="items-in"> 
              <!-- Image --> 
              <img src="<?php echo base_url().'assets/images/'; ?>new-item-1.jpg" alt=""> 
              <!-- Hover Details -->
              <div class="over-item">
                <ul class="animated fadeIn">
                  <li> <a href="<?php echo base_url().'assets/images/'; ?>new-item-1.jpg" data-lighter><i class="ion-search"></i></a></li>
                  <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                  <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                  <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                  <!-- Rating Stars -->
                  <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                </ul>
              </div>
              <!-- Item Name -->
              <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
            </div>
            
            <!--  New Arrival  -->            
            <div class="items-in"> 
              <!-- Image --> 
              <img src="<?php echo base_url().'assets/images/'; ?>new-item-2.jpg" alt=""> 
              <!-- Hover Details -->
              <div class="over-item">
                <ul class="animated fadeIn">
                  <li> <a href="<?php echo base_url().'assets/images/'; ?>new-item-2.jpg" data-lighter><i class="ion-search"></i></a></li>
                  <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                  <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                  <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                  <!-- Rating Stars -->
                  <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                </ul>
              </div>
              <!-- Item Name -->
              <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
            </div>
            
            <!--  New Arrival  -->            
            <div class="items-in"> 
              <!--  Tags  -->
              <div class="new-tag"> NEW </div>
              
              <!-- Image --> 
              <img src="<?php echo base_url().'assets/images/'; ?>new-item-3.jpg" alt=""> 
              <!-- Hover Details -->
              <div class="over-item">
                <ul class="animated fadeIn">
                  <li> <a href="<?php echo base_url().'assets/images/'; ?>new-item-3.jpg" data-lighter><i class="ion-search"></i></a></li>
                  <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                  <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                  <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                  <!-- Rating Stars -->
                  <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                </ul>
              </div>
              <!-- Item Name -->
              <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
            </div>
            
            <!--  New Arrival  -->            
            <div class="items-in"> 
              <!--  Tags  -->
              <div class="hot-tag"> HOT </div>
              <!-- Image --> 
              <img src="<?php echo base_url().'assets/images/'; ?>new-item-4.jpg" alt=""> 
              <!-- Hover Details -->
              <div class="over-item">
                <ul class="animated fadeIn">
                  <li> <a href="<?php echo base_url().'assets/images/'; ?>new-item-4.jpg" data-lighter><i class="ion-search"></i></a></li>
                  <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                  <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                  <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                  <!-- Rating Stars -->
                  <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                </ul>
              </div>
              <!-- Item Name -->
              <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
            </div>
          </div>
        </div>
      </section>
    </section>
  </div>
  
<script>
$(".zoom_05").elevateZoom({ 
	zoomType	: "inner", 
	cursor		: "crosshair"
}); 
</script>