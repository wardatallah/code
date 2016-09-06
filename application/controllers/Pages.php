<?php
class Pages extends CI_Controller {


		public function __construct()
        {
				parent::__construct();
                $this->load->model('home_model');
				
				$this->load->model('contact_model');
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
		
			

			$data['title'] = ucfirst($page); // Capitalize the first letter
			$data['private_gallery'] = $this->header_model->get_heading("all","header");
			$this->load->helper('url');
			
			
			
			
			
			$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer', $data);
        }
		
		
}