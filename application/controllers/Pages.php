<?php
class Pages extends CI_Controller {


		public function __construct()
        {
				parent::__construct();
                $this->load->model('home_model');
				
				$this->load->model('contact_model');
				$this->load->model('product_model');
				$this->load->model('header_model');
                $this->load->helper('url_helper');
				
        }
		
		
        public function view($page = 'home')
        {
			if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
			{
                // Whoops, we don't have a page for that!
                show_404();
			}
			$data['header_logo'] = $this->header_model->get_logo("header");
			$data['social_media'] = $this->header_model->get_social();
		
			

<<<<<<< HEAD
		
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
=======
			$data['title'] = ucfirst($page); // Capitalize the first letter
			$data['private_gallery'] = $this->header_model->get_heading("all","header");
			$this->load->helper('url');
			
			
			
			
			
			$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer', $data);
>>>>>>> 6413e5a1de0684009f78307700a4e5ae27cb459d
        }
		
		
}