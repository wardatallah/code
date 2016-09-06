<?php
class Contact extends CI_Controller {


		public function __construct()
        {
				parent::__construct();
				$this->load->model('header_model');
				$this->load->model('contact_model');
                $this->load->helper('url_helper');
				
        }
		
		
        public function index()
        {
				if ( ! file_exists(APPPATH.'views/pages/contact-us.php'))
				{
					// Whoops, we don't have a page for that!
					show_404();
				}
				$data['header_logo'] = $this->header_model->get_logo("header");
				$data['social_media'] = $this->header_model->get_social();
				$data['private_gallery'] = $this->header_model->get_heading("all","header");
				
				// Capitalize the first letter
				$data['title'] = ucfirst("projects"); 
				
				$data['locations'] = $this->contact_model->get_locations("about");
				$data['map_logo'] = $this->header_model->get_logo("map");
				
				$this->load->helper('url');
				
                $this->load->view('templates/header', $data);
				$this->load->view('pages/contact-us', $data);
				$this->load->view('templates/footer', $data);
        }
		
}