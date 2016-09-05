			
			<?php 
				$i = 0;
				foreach ($header_menu as $item): ?>
			<li <?php if ($i == 0) {echo 'class="active"'; ?> ><a href="<?php echo base_url().$item['slug']; ?>"><?php echo $item['name']; ?></a>
				<?php 
				if ($item)
				<ul class="dropdown">
					<li><a href="index.html">Index Defult</a></li>
				</ul>
			
			
			
			</li>
            <li><a href="<?php echo base_url(); ?>about/">About Us</a></li>
            <li class="meganav"><a href="<?php echo base_url(); ?>products/">Products</a> 
              <!--======= MEGA MENU =========-->
              <ul class="megamenu full-width">
                <li class="row nav-post">
                  <div class="col-sm-4">
                    <h6>By Country</h6>
                    <ul>
                      <li><a href="#">Lebanon</a></li>
					  <li><a href="#">Spain</a></li>
					  <li><a href="#">China</a></li>
                      
                    </ul>
                  </div>
                  <div class="col-sm-4">
                    <h6>By Type</h6>
                    <ul>
                      <li><a href="#">Type 1</a></li>
					  <li><a href="#">Type 2</a></li>
					  <li><a href="#">Type 3</a></li>                      
                    </ul>
                  </div>
                  <div class="col-sm-4">
                    <h6>By Material</h6>
                    <ul>
                      <li><a href="#">Material 1</a></li>
					  <li><a href="#">Material 2</a></li>
					  <li><a href="#">Material 3</a></li>                      
                    </ul>
                  </div>
                </li>
              </ul>
            </li>
            <li><a href="<?php echo base_url(); ?>projects/">PROJECTS</a></li>
			<li><a href="#" data-toggle="modal" data-target="#myModal" >PRIVATE GALLARY</a></li>
            <li><a href="<?php echo base_url(); ?>contact-us/">CONTACT US</a></li>
			<?php $i++; endforeach; ?>