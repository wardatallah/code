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
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url().'assets/images/'; ?>favicon.ico"/>
	
	<script src="<?php echo base_url() .'assets/js/dashboard/bootbox.js'; ?>" type="text/javascript"></script>
	<script src="<?php echo base_url() .'assets/js/bootstrap.min.js'; ?>" type="text/javascript"></script>
 <script>
window.ajax = function(url, method,body) {
    var fullURL = "http://[::1]/code/" + url;
    var deferred = $.Deferred();
    var settings = {
        type: method,
		contentType: false,
        cache: false,
		processData:false,
        url: fullURL,
        error: function (error) {
            console.log(error);
            deferred.reject(error);
        },
        success: function (response) {
			console.log("done");
            deferred.resolve(response);
        }
    };

    if (body) {
        settings.data =  body ;
    }

    $.ajax(settings);
    return deferred;
};


$( document ).ready(function() {
	$("#fileImage").change(function(evt) {
		        console.log("test");
				var input = evt.target;
				if (input.files && input.files[0]) {
				  var that = this;
				  var reader = new FileReader();
				  reader.onload = function (e) {
					  var data = e.target.result;
					  $('#displayImg').attr('src', data ) ; 
				  };
				
				 reader.readAsDataURL(input.files[0]);
				 
				}
				
				
				$("#formImage").submit() ;
				 
	});
	
		
	$("#formImage").submit(function(e) {
		
		e.preventDefault();
		ajax('imageItem/uploadImages', 'POST', new FormData(this)).fail(function(error){
						console.log(error);
					}).done(function(data) {
						console.log(data);
					});
					
	});
	
});

var alertDelete = function(id){
				bootbox.confirm("Are you sure you want to delete this image?", function(result) {
					if(result===true){
						$('#'+id).submit();
					}
				  
				});
				return false;
				
				
}

var callLibrary = function(){
		$('.imagelibrary').addClass('active');
		$('.imageUpload').removeClass('active');
		$('.libraryContent').css('display','block');
		$('.uploadContent').css('display','none');
	}
	
	
var callUpload = function(){
		$('.imageUpload').addClass('active');
		$('.imagelibrary').removeClass('active');
		$('.uploadContent').css('display','block');
		$('.libraryContent').css('display','none');
	}
</script>

<style>
 .modal-body , .modal-footer {
	 background:#fff;
 }
.modal-footer { 
	border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
}
.modal-dialog {
    
	height : 600px;	
    margin: 30px auto;
}


.uploadedImage {
	height: 200px;
	width: 200px;
	margin: 0 40px;
}

.uploadedButton{
	border: 1px #e5e2e2 solid;
	padding: 5px;width: 150px;
	text-align: center;
	border-radius: 5px;cursor: hand;
	background: #f8f8f8;
}

.uploadedContent {
	border:1px solid #ccc ; 
	border-top : 0px;
	height : 400px ;
	display:none;
}

.libraryContent {
	border:1px solid #ccc ; border-top : 0px;
	height : 400px ;
	overflow-y : scroll  ;	
}

.modal-open .modal {
	padding-right: 0px !important;
	border-radius: 5px;
    width: 50%;
    left: 25%;
	top:5%;
    height: auto;
}
</style>
  </head>
  <body>
  
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Select Media</h4>
        </div>
        <div class="modal-body">
          <ul class="nav nav-tabs">
			<li role="presentation" class="imagelibrary active" onclick="callLibrary();">
			<a href="#">Library</a>
			</li>
			
			<li role="presentation" class="imageUpload " onclick="callUpload();" >
			<a href="#">Upload</a></li>
			
		  </ul>
		  <div class="libraryContent">
						 
		  				<div class="content-box-large box-with-header">
							<div class="row">
							
							 <?php 	$x1 =0;
										$dir1    = $_SERVER['DOCUMENT_ROOT'].'/code/assets/images';
										if ($handle1 = opendir($dir1)) {
										$files1 =  scandir($dir1);
										foreach($files1 as $file1):
										$entry1=$_SERVER['DOCUMENT_ROOT'].'/code/assets/images/'.$file1;
										if ($file1 !== "." && $file1 !== ".."){
											if (!is_dir($entry1) ){
												$ext1 = pathinfo($file1, PATHINFO_EXTENSION);
												if ($ext1 === 'png' || $ext1 === 'jpg' || $ext1 === 'jpeg'){ 
															$path1=base_url() . 'assets/images/';
															print_img1($path1,$file1); 
												}
											
											} else {
													$subdir1=$_SERVER['DOCUMENT_ROOT'].'/code/assets/images/'.$file1;
													$subfiles1=get_sub1($subdir1,$file1);
														
														foreach($subfiles1 as $sub1):
														
															$entry1=$_SERVER['DOCUMENT_ROOT'].'/code/assets/images/'.$file1 .'/'.$sub1;
															if (!is_dir($entry1) ){
																$ext1 = pathinfo($sub1, PATHINFO_EXTENSION);
																if ($ext1 === 'png' || $ext1 === 'jpg' || $ext1 === 'jpeg'){
																	$imgpath1 = base_url() . 'assets/images/' .$file1.'/';
																	print_img1($imgpath1,$sub1);
																}
															}
														endforeach;
											}
										}
										endforeach; }?>
							 
							</div>
						</div>
		  </div>
		  <div class="uploadContent uploadedContent" >
			   <div style="padding:40px;">
				<form id="formImage"  method="post" enctype="multipart/form-data">
				   <input type="file" id="fileImage" name="fileImage"   style="display:none;">
				   <span class="uploadedButton" onclick="$('#fileImage').click();">Upload Image</span>
				   <img id="displayImg"  class="uploadedImage">
				</form>  
			   </div>
		  </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background: #6196e1;color: #f4f4f4;border: 1px #6196e1 solid;">Done</button>
		  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <?php 
		function get_sub1($dir,$sub){
			if ($handle = opendir($dir)) {
			$files =  scandir($dir);
			$filesarray=array();
			
			$counter=0;
			foreach($files as $file):
				$entry=$dir . $file;
				if ($entry !== "." && $entry !== ".."){
					if (!is_dir($entry) ){
						$ext = pathinfo($file, PATHINFO_EXTENSION);
						if ($ext === 'png' || $ext === 'jpg' || $ext === 'jpeg'){
							$filesarray[$counter]= $file;
							$counter++;
						}
					}
				}
			endforeach;
			}
		return $filesarray;
		}
		
		
		function print_img1($path,$name){
			global $x;
			$x++;
			echo '<form action="'.base_url().'Admin/deleteImg" method="post" id="imgform'.$x.'" onsubmit="return confirm(\'Are you sure you want to delete this image?\');">';
			echo '<input type="text" name="path" value="' . $path . $name . '" class="hidden" />';
			echo '</form>';
			echo '<div class="col-md-1 img-container img-lib" style="background:url(' . $path . $name . ') no-repeat 50%;background-size: contain; width:100px;height:100px;cursor:hand;"  onclick= $(\'#img-lib\').addClass(\'aaa\')  >
						<a class="img-lighter" href="' . $path . $name . '" data-lighter ></a>
						 
					</div>';
				  
			if ($x%4==0 && $x!==0){
				echo '<div class="clearfix"></div>';
			}
		}
		
		?>
		
  <?php 
		$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		if (!isset($this->session->userdata['logged_in'])) {

			header("location: http://localhost/code/admin");
		}
	?>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-10">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="#">Intermed Ceramica Dashboard</a></h1>
	              </div>
	           </div>
	           <!--<div class="col-md-5">
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
	           </div>-->
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="<?php echo base_url() . 'Userlogin/logout'; ?>">Logout  <i class="glyphicon glyphicon-log-out"></i></a>
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
					<li <?php if ($actual_link==base_url(). 'Admin/header_section') echo 'class="active"';?> ><a href="<?php echo base_url() . 'Admin/header_section'; ?>"><i class="glyphicon glyphicon-menu-up"></i> Header</a></li>
					<li <?php if ($actual_link==base_url(). 'Admin/footer_section') echo 'class="active"';?> ><a href="<?php echo base_url() . 'Admin/footer_section'; ?>"><i class="glyphicon glyphicon-menu-down"></i> Footer</a></li>
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
					<li <?php if ($actual_link==base_url(). 'Admin/library') echo 'class="active"';?> ><a href="<?php echo base_url() . 'Admin/library'; ?>"><i class="glyphicon glyphicon-picture"></i> Media Library</a></li>
                    <li  <?php if ($actual_link==base_url(). 'Admin/categories') echo 'class="active"';?> ><a href="<?php echo base_url() . 'Admin/categories'; ?>"><i class="glyphicon glyphicon-th"></i>Categories</a></li>
                    <li <?php if ($actual_link==base_url(). 'Admin/settings') echo 'class="active"';?> ><a href="<?php echo base_url() . 'Admin/settings'; ?>"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
                </ul>
             </div>
		  </div>