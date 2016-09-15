		  
		  <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div class="panel-default">
		  				<div class="content-box-header  panel-heading">
							<div class="panel-title">Media Library</div>
						</div>
		  				<div class="content-box-large box-with-header">
							<div class="row astable">
								<?php 	$imgCounter = 0;
										$dir    = $_SERVER['DOCUMENT_ROOT'].'/code/assets/images';
										if ($handle = opendir($dir)) {
										$files =  scandir($dir);
										foreach($files as $file):
										$entry=$_SERVER['DOCUMENT_ROOT'].'/code/assets/images/'.$file;
										if ($file !== "." && $file !== ".."){
											if (!is_dir($entry) ){
												$ext = pathinfo($file, PATHINFO_EXTENSION);
												if ($ext === 'png' || $ext === 'jpg' || $ext === 'jpeg'){ 
															$path=base_url() . 'assets/images/';
															print_img($path,$file); 
												}
											
											} else {
													$subdir=$_SERVER['DOCUMENT_ROOT'].'/code/assets/images/'.$file;
													$subfiles=get_sub($subdir,$file);
														
														foreach($subfiles as $sub):
														
															$entry=$_SERVER['DOCUMENT_ROOT'].'/code/assets/images/'.$file .'/'.$sub;
															if (!is_dir($entry) ){
																$ext = pathinfo($sub, PATHINFO_EXTENSION);
																if ($ext === 'png' || $ext === 'jpg' || $ext === 'jpeg'){
																	$imgpath = base_url() . 'assets/images/' .$file.'/';
																	print_img($imgpath,$sub);
																}
															}
														endforeach;
													
											}
										}
										endforeach; 
										if ($imgCounter%6!==0 && $imgCounter>0){
											echo '</div>';
										}
										echo '<div class="clearfix"></div>';}?>
							</div>
		  				</div>
		  			</div>
		  		</div>
		  	</div>
		</div>
		
		
		<?php 
		function get_sub($dir,$sub){
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
		
		
		function print_img($path,$name){
			global $imgCounter;
			$imgCounter++;
			
			if ($imgCounter==1 || $imgCounter%5==1){
				echo "<ul class='imgflex'>";
			}
			echo '<li>';
			echo '<div class="col-md-2 img-container" style="background:url(' . $path . $name . ') no-repeat 50%;background-size: contain;">';
						echo '<a class="img-lighter" href="' . $path . $name . '" data-lighter ></a>';
						echo '<form action="'.base_url().'Admin/deleteImg" method="post" id="imgform'.$imgCounter.'" >';
							echo '<input type="text" name="path" value="' . $path . $name . '" class="hidden" />';
							echo '<div class="delete" onclick="alertDelete(\'imgform'.$imgCounter.'\')"></div>';
						echo '</form>';
					echo '</div>';
			echo '</li>';
			if ($imgCounter%5==0){
				echo '</ul><div class="clearfix"></div>';
				//$imgCounter=0;
			}
			
			
			
		}
		
		?>