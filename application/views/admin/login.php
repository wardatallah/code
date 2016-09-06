  
	<?php
	if (isset($this->session->userdata['logged_in'])) {

			header("location: http://localhost/code/Userlogin/login");
	}
?>


  <!-- CONTENT START -->
  <div class="content"> 
    <!--======= SUB BANNER =========-->
	  <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
		<div class="container">
		  <h4>ADMIN LOG IN</h4>
		  <!-- Breadcrumb -->
		  <ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>">Home</a></li>
			<li class="active">LOG IN</li>
		  </ol>
		</div>
	  </section>
	  
<?php
if (isset($message_display)) {
echo "<div class='message'>";
echo $message_display;
echo "</div>";
}
?>
    <!--======= Contact Us =========-->
    <section class="section-p-30px conact-us animate fadeInUp" data-wow-delay="0.4s"> 
      <!--======= CONTACT FORM =========-->
      <div class="container"> 
        <div class="contact section-p-30px no-padding-b">
          <div class="contact-form"> 
            <!--======= FORM  =========-->
			<?php 	$attributes = array('class' => 'contact-form', 'id' => 'contact_form');
					echo form_open('Userlogin/login',$attributes); ?>
			<?php
				if (isset($error_message)) {
				echo "<div class='alert alert-danger'>";
					echo $error_message;
					echo validation_errors();
				echo "</div>";
				}
			?>	
              <div class="row">
                <div class="col-md-12">
                  <ul class="row">
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="username" id="name" placeholder="*USERNAME" required="true" />
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="*PASSWORD" required="true" />
                      </label>
                    </li>
					<li class="col-sm-12 no-margin">
                      <button type="submit" value="submit" class="btn btn-dark" id="btn_submit" >LOGIN</button>
                    </li>
                  </ul>
                </div>
                
              </div>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </section>
	
    
    
  </div>