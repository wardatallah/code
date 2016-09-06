
  <!-- CONTENT START -->
  <div class="content"> 
    
    <!--======= SUB BANNER =========-->
    <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
      <div class="container">
        <h4>OUR PROJECTS</h4>
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Projects</li>
        </ol>
      </div>
    </section>
    
    <!-- Portfolio --> 
    <!--======= Portfolio =========-->
    <section class="section-p-60px portfolio port-wrap portfolio-style-2">
      <!--<div class="container"> 
        
        
        <ul class="nav-links filter filter-style-2 animate fadeInUp" data-wow-delay="0.4s">
          <li><a class="active" href="#." data-filter="*">ALL</a></li>
          <li><a href="#" data-filter=".int">MEN’S</a></li>
          <li><a href="#" data-filter=".arch">WOMAN</a></li>
          <li><a href="#" data-filter=".build">ACCESSORIES</a></li>
          <li><a href="#" data-filter=".plumb">SHOES</a></li>
        </ul>
      </div> -->
      <div class="container"> 
        <!-- Portfolio Row -->
        <ul class="port-folio-row row col-4 items animate fadeInUp" data-wow-delay="0.4s">
          
          <?php foreach($projects as $project): ?>
          <li class="item int plumb">
            <article> <img src="<?php echo base_url().'assets/images/projects/' . $project['img_name']; ?>" alt="<?php echo $project['title']; ?>"> 
              <!-- Hover Info -->
              <div class="hover-port">
                <div class="position-center-center"> <a href="<?php echo base_url().'assets/images/projects/' . $project['img_name']; ?>" data-lighter><i class="fa fa-search"></i></a> <a href="<?php echo $project['id']; ?>"><i class="fa fa-link"></i></a>
                  <h6><?php echo $project['title']; ?></h6>
                </div>
              </div>
            </article>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </section>
  </div>
  
  