<html>
  <head>
    <title>Control Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(). 'assets/css/bootstrap.min.css'; ?>" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo base_url() .'assets/css/dashboard/styles.css'; ?>" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() .'assets/js/dashboard/jquery.lighter.js'; ?>" type="text/javascript"></script>
	<link href="<?php echo base_url() .'assets/css/dashboard/jquery.lighter.css'; ?>" rel="stylesheet" type="text/css" />

  </head>
  <body>
  <?php 
		$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		if (!isset($this->session->userdata['logged_in'])) {

			header("location: http://localhost/code/admin");
		}
	?>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="#">Intermed Ceramica Dashboard</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="#">Profile</a></li>
	                          <li><a href="<?php echo base_url() . 'Userlogin/logout'; ?>">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li <?php if ($actual_link==base_url(). 'admin') echo 'class="active"';?> ><a href="<?php echo base_url() . 'admin'; ?>"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li class="submenu <?php if (strpos($actual_link, 'editpages') !== false) echo "open";?>">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li <?php if ($actual_link==base_url(). 'editpages/home') echo 'class="active"';?>><a href="<?php echo base_url() . 'editpages/home'; ?>">Home</a></li>
							<li <?php if ($actual_link==base_url(). 'editpages/about') echo 'class="active"';?>><a href="<?php echo base_url() . 'editpages/about'; ?>">About Us</a></li>
							<li <?php if ($actual_link==base_url(). 'editpages/products') echo 'class="active"';?>><a href="<?php echo base_url() . 'editpages/products'; ?>">Products</a></li>
							<li <?php if ($actual_link==base_url(). 'editpages/projects') echo 'class="active"';?>><a href="<?php echo base_url() . 'editpages/projects'; ?>">Projects</a></li>
							<li <?php if ($actual_link==base_url(). 'editpages/contact') echo 'class="active"';?>><a href="<?php echo base_url() . 'editpages/contact'; ?>">Contact Us</a></li>
                        </ul>
                    </li>
					<li <?php if ($actual_link==base_url(). 'Admin/library') echo 'class="active"';?>><a href="<?php echo base_url() . 'Admin/library'; ?>"><i class="glyphicon glyphicon-picture"></i> Media Library</a></li>
                    <li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
                    <li><a href="tables.html"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
                    <li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>
                    <li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
                    <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>
                    <li <?php if ($actual_link==base_url(). 'Admin/settings') echo 'class="active"';?> ><a href="<?php echo base_url() . 'Admin/settings'; ?>"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
                </ul>
             </div>
		  </div>