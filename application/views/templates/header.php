<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>INTERMED CERAMICA</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- Developer : Ward Atallah -->
<!-- FONTS ONLINE -->
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" type="image/png" href="<?php echo base_url().'assets/images/'; ?>favicon.ico"/>
<!--MAIN STYLE-->
<link href="<?php echo base_url().'assets/'; ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url().'assets/'; ?>css/main.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url().'assets/'; ?>css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url().'assets/'; ?>css/responsive.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url().'assets/'; ?>css/animate.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url().'assets/'; ?>css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<script src="https://code.jquery.com/jquery-2.1.4.js"></script>

<!-- ADD YOUR OWN STYLING HERE. AVOID TO USE STYLE.CSS AND MAIN.CSS. IT WILL BE HELPFUL FOR YOU IN FUTURE UPDATES -->
<link href="<?php echo base_url().'assets/'; ?>css/custom.css" rel="stylesheet" type="text/css">

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/'; ?>rs-plugin/css/settings.css" media="screen" />


<script src="<?php echo base_url().'assets/'; ?>js/modernizr.js"></script>

<script>
function checkPassword() {
	document.getElementById("txtHint").innerHTML = "";
	str=document.getElementById("collectionpassword").value;
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "<div class='alert alert-warning'>Please enter your password !</div>";
        return;
    } else {
		var letters = /[\<\>!@#\$%^&\*,]+/i;
		
		if(str.match(letters)){
			document.getElementById("txtHint").innerHTML = "<div class='alert alert-danger'>Please input alphanumeric characters only!</div>";
		} else {
		
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				if (this.responseText == "error")
					document.getElementById("txtHint").innerHTML = "<div class='alert alert-danger'>Invalid password !</div>";
				else if (this.responseText == "success")
					window.location.replace("<?php echo base_url() . 'collection/'; ?>");
            }
        };
        xmlhttp.open("POST", "<?php echo base_url() . 'checkPass/'; ?>" + str, true);
        xmlhttp.send();
		}
    }
}
</script>


</head>
<body>
<!-- LOADER ===========================================-->
<div id="loader">
  <div class="loader">
    <div class="position-center-center"> <img src="<?php echo base_url().'assets/'; ?>images/intermed-logo.png" alt="">
      <p class="font-playfair text-center">Please Wait...</p>
      <div class="loading">
        <div class="ball"></div>
        <div class="ball"></div>
        <div class="ball"></div>
      </div>
    </div>
  </div>
</div>

<!-- Page Wrap -->
<div id="wrap" class="furniture"> 
  
  <!-- Header -->
  <header class="<?php 
		$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		if ($actual_link==base_url())
			echo "header header-dark";
		else 
			echo "header-style-2";
  
  ?>"> 
    <!-- Top Bar -->
    <div class="top-bar">
      <div class="container"> 
        <!-- Language -->
        <div class="language"> <a href="#." class="active">EN</a> <a href="#.">FR</a> <a href="#.">AR</a> </div>
        <div class="top-links">
		  <?php if (isset($this->session->userdata['private_user'])) { ?><ul>
            <li><a href="<?php echo base_url() .'collection/logout'; ?>">Logout</a></li>
          </ul>
		  <?php } ?>
          <!-- Social Icons -->
          <ul class="social_icons">
            <?php foreach ($social_media as $media): ?>
			<li class="<?php echo $media['type']; ?>"><a href="<?php echo $media['link']; ?>" target="_new" ><i class="fa fa-<?php echo $media['type']; ?>"></i> </a></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
    
    <!-- Logo -->
    <div class="container">
      <div class="logo"> <a href="<?php echo base_url(); ?>"><img src="<?php echo $header_logo->path; ?>" alt=""></a> </div>
    </div>
    
    <!-- Nav -->
    <div class="sticky">
      <div class="container">
        <!-- Nav -->
        <nav class="webimenu"> 
          <!-- MENU BUTTON RESPONSIVE -->
          <div class="menu-toggle"> <i class="fa fa-bars"> </i> </div>
          <ul class="ownmenu">
            <li <?php if($actual_link===base_url()) echo 'class="active"'; ?>><a href="<?php echo base_url(); ?>">HOME</a></li>
            <li <?php if($actual_link===base_url().'about/') echo 'class="active"'; ?>><a href="<?php echo base_url(); ?>about/">About Us</a></li>
            <li <?php if($actual_link===base_url().'products/') echo 'class="active"'; ?> class="meganav"><a href="<?php echo base_url(); ?>products/">Products</a> 
              <!--======= MEGA MENU =========-->
              <ul class="megamenu full-width">
                <li class="row nav-post">
                  <div class="col-sm-4">
                    <h6>By Type</h6>
                    <ul>
                      <li><a href="#">Floor Tiles</a></li>
					  <li><a href="#">Wall Tiles</a></li>
					  <li><a href="#">Decoration Tiles</a></li>
					  <li><a href="#">Borders</a></li>
					  <li><a href="#">Bathroom Sets</a></li>
					  <li><a href="#">Jacuzzi</a></li>
					  <li><a href="#">Showers</a></li>
					  <li><a href="#">Bathroom Furniture</a></li>
					  <li><a href="#">Accessories</a></li>
					  <li><a href="#">Mixer</a></li>
					  <li><a href="#">Shower Panels</a></li>
					  <li><a href="#">Marble Basins</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-4">
                    <h6>By Origin</h6>
                    <ul>
                      <li><a href="#">Spanish Tiles</a></li>
					  <li><a href="#">Far East Tiles</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-4">
                    <h6>By Format</h6>
                    <ul>
                      <li><a href="#">32x65</a></li>
					  <li><a href="#">20x24</a></li>
					  <li><a href="#">45x45</a></li> 
					  <li><a href="#">30x90</a></li>
					  <li><a href="#">20x40</a></li>
					  <li><a href="#">80x80</a></li> 
                    </ul>
                  </div>
                </li>
              </ul>
            </li>
            <li <?php if($actual_link===base_url().'projects/') echo 'class="active"'; ?>><a href="<?php echo base_url(); ?>projects/">PROJECTS</a></li>
			<li <?php if($actual_link===base_url().'collection/') echo 'class="active"'; ?>><a <? if (!isset($this->session->userdata['private_user'])) { echo 'href="#" data-toggle="modal" data-target="#myModal"'; } else {
				echo "href='". base_url() . "collection/'"; 
			} ?>>Collection</a></li>
            <li <?php if($actual_link===base_url().'contact-us/') echo 'class="active"'; ?>><a href="<?php echo base_url(); ?>contact-us/">CONTACT US</a></li>
            
            <!--======= Shopping Cart =========-->
            <li class="shop-cart"><a href="#."><i class="fa fa-shopping-cart"></i></a> <span class="numb">2</span>
              <ul class="dropdown">
                <li>
                  <div class="media">
                    <div class="media-left">
                      <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="<?php echo base_url().'assets/'; ?>images/item-col-img-1.jpg" alt="..."> </a> </div>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading">DRAEY TRENCH COAT</h6>
                      <span class="qty">QTY: 01</span> </div>
                  </div>
                </li>
                <li class="no-padding no-border">
                  <div class="row">
                    <div class="col-xs-6"> <a href="#." class="btn btn-small">VIEW CART</a></div>
                    <div class="col-xs-6 "> <a href="#." class="btn btn-1 btn-small">CHECK OUT</a></div>
                  </div>
                </li>
              </ul>
            </li>
            <!--======= SEARCH ICON =========-->
            <li class="search-nav"><a href="#."><i class="fa fa-search"></i></a>
              <ul class="dropdown">
                <li class="row">
                  <div class="col-sm-4 no-padding">
                    <select class="selectpicker">
                      <option>TYPE</option>
                      <option>ORIGIN</option>
                      <option>FORMAT</option>
                    </select>
                  </div>
                  <div class="col-sm-8 no-padding">
                    <input type="search" class="form-control" placeholder="Search Here">
                    <button type="submit"> <i class="fa fa-search"></i> </button>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $private_gallery->title; ?></h4>
        </div>
		<form method="post" action="">
        <div class="modal-body">
          <p><?php echo $private_gallery->subtitle; ?></p>
		  <p>
				<label for="password">Password</label>
				<input name="password" id="collectionpassword" type="password" class="form-control" required="true" />
				<div id="txtHint"></div>
		   </p>
        </div>
        <div class="modal-footer">
          <div class="btn btn-default btn-dark" onclick="checkPassword()">Enter</div>
        </div>
		</form>
      </div>
      
    </div>
  </div>
  <!-- Header End --> 
  