<?php
class Products extends CI_Controller {


		public function __construct()
        {
				parent::__construct();
				$this->load->model('header_model');
				$this->load->model('products_model');
				$this->load->model('product_model');
				
                
				// important load
				$this->load->helper('url_helper');
				$this->load->helper('form');
				$this->load->library('form_validation');
				$this->load->library('session');
				
        }
		
		
        public function view()
        {
			
				if ( ! file_exists(APPPATH.'views/admin/pages/products.php'))
				{
					// Whoops, we don't have a page for that!
					show_404();
				}
				
				if($this->session->userdata('logged_in'))
			   {
					 $this->load->library('form_validation');
					 $session_data = $this->session->userdata('logged_in');
					 $data['username'] = $session_data['username'];
					 
					 $data['products'] = $this->products_model->get_ProductById();
					$data['country_cat'] = $this->product_model->get_categories("products","country");
					$data['type_cat'] = $this->product_model->get_categories("products","type");
					$data['color_cat'] = $this->product_model->get_categories("products","color");
					$data['size_cat'] = $this->product_model->get_categories("products","size");
					$data['product_by_condition'] = $this->product_model->get_products(null,null,null,null);
					 
					 
					 $this->load->view('admin/template/header', $data);
					 $this->load->view('admin/pages/products',$data);
					 $this->load->view('admin/template/footer', $data);	
			   }
			   else {
				   redirect("admin","refresh");
			   }
        }
		
}