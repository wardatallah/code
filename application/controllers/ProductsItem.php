<?php
class ProductsItem extends CI_Controller {


		public function __construct()
        {
				parent::__construct();
				$this->load->model('product_model');
                $this->load->helper('url_helper');
				
        }
		
        public function view($page = 'products')
        {
			
        }
		

		public function getproducts() 
		{
			
			 $country = null ; $type = null ;  $size=null ; $color=null;
			 
			 if(isset($_POST["country"])) {
					$country = $_POST["country"];
			 }
			 
			 if(isset($_POST["type"])) {
					$type = $_POST["type"] ;
			 }
			 
			 if(isset($_POST["size"])) {
					$size = $_POST["size"] ;
			 }
			 
			 if(isset($_POST["color"])) {
					$color = $_POST["color"] ;
			 }
			 
			 $data['product_by_condition'] = $this->product_model->get_products($country,$type,$size,$color) ;
			 
			
			 echo json_encode($data);
		}
		
}

