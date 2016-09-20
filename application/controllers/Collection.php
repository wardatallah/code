<?php
class Collection extends CI_Controller {


		public function __construct()
        {
				parent::__construct();
				$this->load->model('header_model');
				$this->load->model('products_model');
				$this->load->model('product_model');
				$this->load->model('contact_model');
                $this->load->helper('url_helper');
				
        }
		
		
        public function index()
        {
				if($this->session->userdata('private_user'))
			   {
			    $data['header_logo'] = $this->header_model->get_logo("header");
				$data['footer_logo'] = $this->header_model->get_logo("footer");
				$data['social_media'] = $this->header_model->get_social();
				$data['private_gallery'] = $this->header_model->get_heading("all","header");
				$data['locations'] = $this->contact_model->get_locations("about");
				$data['footer_about'] = $this->header_model->get_heading("all","footer");
				$data['footer_copyright'] = $this->header_model->get_heading("down","footer");
				
				
				
				// Capitalize the first letter
				$data['title'] = ucfirst("collection"); 
				
				// get Projects
				$data['products'] = $this->products_model->get_ProductById(false,1);
				$data['country_cat'] = $this->product_model->get_categories("products","country");
				$data['type_cat'] = $this->product_model->get_categories("products","type");
				$data['color_cat'] = $this->product_model->get_categories("products","color");
				$data['size_cat'] = $this->product_model->get_categories("products","size");
				$data['product_by_condition'] = $this->product_model->get_products(null,null,null,null);
				
				
				$this->load->helper('url');
				
                $this->load->view('templates/header', $data);
				$this->load->view('pages/collection', $data);
				$this->load->view('templates/footer', $data);
			   } else {
				   redirect("","refresh");
			   }
        }
		
		
		public function view($id = NULL){
			
				if($this->session->userdata('private_user')){
					
					$data['header_logo'] = $this->header_model->get_logo("header");
					$data['footer_logo'] = $this->header_model->get_logo("footer");
					$data['social_media'] = $this->header_model->get_social();
					$data['private_gallery'] = $this->header_model->get_heading("all","header");
					$data['locations'] = $this->contact_model->get_locations("about");
					$data['footer_about'] = $this->header_model->get_heading("all","footer");
					$data['footer_copyright'] = $this->header_model->get_heading("down","footer");
					
					
					$data['product'] = $this->products_model->get_ProductById($id);
					$res=$data['product'];
					$size=$res->size;
					$data['products'] = $this->products_model->getProductsBySize($size);
					
					// Capitalize the first letter
					$data['title'] = ucfirst("products"); 
					
					$this->load->helper('url');
					
					$data['private'] = true;
					
					
					$this->load->view('templates/header', $data);
					$this->load->view('pages/product', $data);
					$this->load->view('templates/footer', $data);
				} else {
					redirect("","refresh");
				}
				
		}
		
		function logout()
			 {
			   $sess_array = array(
				'password' => ''
				);
				$this->session->unset_userdata('private_user');
				session_destroy();
				redirect('', 'refresh');
			 }
}