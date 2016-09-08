<?php
class ImageItem extends CI_Controller {


		public function __construct()
        {
				parent::__construct();
                $this->load->helper('url_helper');
				
        }
		
  		
 
		public function uploadImages() 
		{
			
			if(isset($_FILES['fileImage']))
				{
					 $img = $_FILES['fileImage']['name'];
					 $tmp = $_FILES['fileImage']['tmp_name'];
					  
					 // get uploaded file's extension
					 $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
					 
					 // can upload same image using rand function
					 $final_image = rand(1000,1000000).$img;
					 
					 // check's valid format
					 define ('SITE_ROOT', getcwd());
					 
					  $path =  strtolower(SITE_ROOT."/assets/images/uploaded/".$final_image); 
					  move_uploaded_file($tmp,$path) ;    
					  $data['name'] =  $final_image  ;
				}

			
			 echo json_encode($data);
		}
}

