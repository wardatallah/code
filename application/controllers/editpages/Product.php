<?php
class Product extends CI_Controller {


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
		
		
        public function edit($id)
        {
			
				if ( ! file_exists(APPPATH.'views/admin/pages/product.php'))
				{
					// Whoops, we don't have a page for that!
					show_404();
				}
				
				if($this->session->userdata('logged_in'))
			   {
					 $this->load->library('form_validation');
					 $session_data = $this->session->userdata('logged_in');
					 $data['username'] = $session_data['username'];
					 
					 $data['product'] = $this->products_model->get_ProductById($id,1);
					 $data['countries'] = $this->product_model->get_categories("products","country");
					 $data['types'] = $this->product_model->get_categories("products","type");
					 $data['colors'] = $this->product_model->get_categories("products","color");
					 $data['sizes'] = $this->product_model->get_categories("products","size");
					 
					 
					 $this->load->view('admin/template/header', $data);
					 $this->load->view('admin/pages/product',$data);
					 $this->load->view('admin/template/footer', $data);	
			   }
			   else {
				   redirect("admin","refresh");
			   }
        }
		
		public function remove($id)
        {
			
				
				if($this->session->userdata('logged_in'))
			   {
					 $session_data = $this->session->userdata('logged_in');
					 $data['username'] = $session_data['username'];
					 
					 $result = $this->product_model->remove_product($id);
					 
					 redirect("editpages/products","refresh");
			   }
			   else {
					redirect("admin","refresh");
			   }
        }
		
		public function add()
        {
			
				
				if ( ! file_exists(APPPATH.'views/admin/pages/addProduct.php'))
				{
					// Whoops, we don't have a page for that!
					show_404();
				}
				
				if($this->session->userdata('logged_in'))
			   {
					 $this->load->library('form_validation');
					 $session_data = $this->session->userdata('logged_in');
					 $data['username'] = $session_data['username'];
					 
					 $data['countries'] = $this->product_model->get_categories("products","country");
					 $data['types'] = $this->product_model->get_categories("products","type");
					 $data['colors'] = $this->product_model->get_categories("products","color");
					 $data['sizes'] = $this->product_model->get_categories("products","size");
					 
					 
					 $this->load->view('admin/template/header', $data);
					 $this->load->view('admin/pages/addProduct',$data);
					 $this->load->view('admin/template/footer', $data);	
			   }
			   else {
				   redirect("admin","refresh");
			   }
        }
		
		
}