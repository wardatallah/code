 
  <!-- CONTENT START -->
  <div class="content"> 
    
    <!--======= SUB BANNER =========-->
    <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
      <div class="container">
        <h4><?php echo $project->title; ?></h4>
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url(); ?>">Home</a></li>
          <li><a href="<?php echo base_url() . 'projects/'; ?>">PROJECTS</a></li>
          <li class="active"><?php echo $project->title; ?></li>
        </ol>
      </div>
    </section>
    
    <!--======= Portfolio Single =========-->
    <section class="section-p-60px portfolio-single portfolio-left">
      <div class="container">
        <div class="row">
          <div class="col-md-6 animate fadeInLeft" data-wow-delay="0.4s">
            <div class="product-slides"> 
              <!-- Img 1 -->
              <div> <img class="img-responsive" src="<?php echo $project->img_path; ?>" alt=""> </div>
              <!-- Img 2 -->
            </div>
          </div>
          
          <!-- Details -->
          <div class="col-md-6 animate fadeInRight" data-wow-delay="0.4s">
            <div class="single-detail">
              <h6><?php echo $project->title; ?></h6>
              <p><?php echo $project->proj_text; ?></p>
              
              <!-- Client Details-->
              <ul class="client-info">
                <li>
                  <h6>CLIENT</h6>
                  <p><?php echo $project->client; ?></p>
                </li>
                <li>
                  <h6>DATE</h6>
                  <p><?php echo $project->proj_date; ?></p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        
        
      </div>
    </section>
  </div>
  
  