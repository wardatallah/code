<?php
class Home extends CI_Controller {


		public function __construct()
        {
				parent::__construct();
				$this->load->model('header_model');
				$this->load->model('home_model');
				$this->load->model('contact_model');
                $this->load->helper('url_helper');
				
        }
		
		
        public function view()
        {
			
				if ( ! file_exists(APPPATH.'views/pages/home.php'))
				{
					// Whoops, we don't have a page for that!
					show_404();
				}
				$data['header_logo'] = $this->header_model->get_logo("header");
				$data['footer_logo'] = $this->header_model->get_logo("footer");
				$data['social_media'] = $this->header_model->get_social();
				$data['private_gallery'] = $this->header_model->get_heading("all","header");
				$data['footer_about'] = $this->header_model->get_heading("all","footer");
				$data['locations'] = $this->contact_model->get_locations("about");
				
				
				// Capitalize the first letter
				$data['title'] = ucfirst("Home"); 
				
				$data['banner_home'] = $this->home_model->get_slider("banner");
				$data['slider_home'] = $this->home_model->get_slider("slider-home");
				$data['welcome_section'] = $this->home_model->get_heading("home","welcome");
				$data['categories'] = $this->home_model->get_main_categories();
				$data['banner_quote'] = $this->home_model->get_banner("home");
				$data['products_section'] = $this->home_model->get_heading("home","products");
				$data['products_view'] = $this->home_model->get_products();
				$data['types_view'] = $this->home_model->get_types();
				
				$this->load->helper('url');
				
                $this->load->view('templates/header', $data);
				$this->load->view('pages/home', $data);
				$this->load->view('templates/footer', $data);
        }
		
}