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
			if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
			{
                // Whoops, we don't have a page for that!
                show_404();
			}
		$data['header_logo'] = $this->header_model->get_logo("header");
		$data['social_media'] = $this->header_model->get_social();
		
		
		if ($page == 'home'){
			$data['banner_home'] = $this->home_model->get_slider("banner");
			$data['slider_home'] = $this->home_model->get_slider("slider-home");
			$data['welcome_section'] = $this->home_model->get_heading("home","welcome");
			$data['banner_quote'] = $this->home_model->get_banner("home");
			$data['products_section'] = $this->home_model->get_heading("home","products");
			$data['products_view'] = $this->home_model->get_products();
			$data['types_view'] = $this->home_model->get_types();
			
		}
		
		if ($page == 'about'){   
			$data['welcome_section'] = $this->about_model->get_heading("about","welcome");
			$data['whatwedo_section'] = $this->about_model->get_what_we_do("about","whatwedo");
			$data['about_banner_section'] = $this->about_model->get_banner("about");
			$data['locations_section'] = $this->about_model->get_locations("about");
			$data['clients_say_section'] = $this->about_model->get_what_clients_say("about");
			$data['our_clients_section'] = $this->about_model->get_our_clients("about");
			$data['our_clients_heading'] = $this->about_model->get_our_clients_heading("about","ourclient");
		} 
    
		if ($page == 'contact-us'){
			$data['locations'] = $this->contact_model->get_locations("about");
			$data['map_logo'] = $this->header_model->get_logo("map");
		}

		
		if ($page == 'products'){   
			$data['country_cat'] = $this->product_model->get_categories("products","country");
			$data['type_cat'] = $this->product_model->get_categories("products","type");
			$data['color_cat'] = $this->product_model->get_categories("products","color");
			$data['size_cat'] = $this->product_model->get_categories("products","size");
			$data['product_by_condition'] = $this->product_model->get_products(null,null,null,null);
		} 

		
		$data['title'] = ucfirst($page); // Capitalize the first letter
		$data['private_gallery'] = $this->header_model->get_heading("all","header");
		$this->load->helper('url');
		
		
		
		
		
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
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

