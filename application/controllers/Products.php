<?php
class Products extends CI_Controller {


		public function __construct()
        {
				parent::__construct();
				$this->load->model('header_model');
				$this->load->model('products_model');
                $this->load->helper('url_helper');
				
        }
		
		
        public function index()
        {
			
				if ( ! file_exists(APPPATH.'views/pages/projects.php'))
				{
					// Whoops, we don't have a page for that!
					show_404();
				}
				$data['header_logo'] = $this->header_model->get_logo("header");
				$data['social_media'] = $this->header_model->get_social();
				$data['private_gallery'] = $this->header_model->get_heading("all","header");
				
				// Capitalize the first letter
				$data['title'] = ucfirst("products"); 
				
				// get Projects
				$data['products'] = $this->products_model->get_products();
				
				$this->load->helper('url');
				
                $this->load->view('templates/header', $data);
				$this->load->view('pages/products', $data);
				$this->load->view('templates/footer', $data);
        }
		
		
		public function view($id = NULL){
			
				$data['header_logo'] = $this->header_model->get_logo("header");
				$data['social_media'] = $this->header_model->get_social();
				$data['private_gallery'] = $this->header_model->get_heading("all","header");
				
				// Capitalize the first letter
				$data['title'] = ucfirst("products"); 
				
				$this->load->helper('url');
				
				$data['product'] = $this->products_model->get_products($id);
				
				
				$this->load->view('templates/header', $data);
				$this->load->view('pages/product', $data);
				$this->load->view('templates/footer', $data);
				
		}
}