<?php
class About extends CI_Controller {


		public function __construct()
        {
				parent::__construct();
				$this->load->model('header_model');
				$this->load->model('about_model');
                $this->load->helper('url_helper');
				
        }
		
		
        public function index()
        {
			
				if ( ! file_exists(APPPATH.'views/pages/about.php'))
				{
					// Whoops, we don't have a page for that!
					show_404();
				}
				$data['header_logo'] = $this->header_model->get_logo("header");
				$data['social_media'] = $this->header_model->get_social();
				$data['private_gallery'] = $this->header_model->get_heading("all","header");
				
				// Capitalize the first letter
				$data['title'] = ucfirst("About Us"); 
				
				$data['welcome_section'] = $this->about_model->get_heading("about","welcome");
				$data['whatwedo_section'] = $this->about_model->get_what_we_do("about","whatwedo");
				$data['about_banner_section'] = $this->about_model->get_banner("about");
				$data['locations_section'] = $this->about_model->get_locations("about");
				$data['clients_say_section'] = $this->about_model->get_what_clients_say("about");
				$data['our_clients_section'] = $this->about_model->get_our_clients("about");
				$data['our_clients_heading'] = $this->about_model->get_our_clients_heading("about","ourclient");
				
				$this->load->helper('url');
				
                $this->load->view('templates/header', $data);
				$this->load->view('pages/about', $data);
				$this->load->view('templates/footer', $data);
        }
		
}