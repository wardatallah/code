<?php
class Home extends CI_Controller {


		public function __construct()
        {
				parent::__construct();
				$this->load->model('header_model');
				$this->load->model('home_model');
				$this->load->model('');
				
                
				// important load
				$this->load->helper('url_helper');
				$this->load->helper('form');
				$this->load->library('form_validation');
				$this->load->library('session');
				
        }
		
		
        public function view()
        {
			
				if ( ! file_exists(APPPATH.'views/admin/pages/home.php'))
				{
					// Whoops, we don't have a page for that!
					show_404();
				}
				
				if($this->session->userdata('logged_in'))
			   {
					 $this->load->library('form_validation');
					 $session_data = $this->session->userdata('logged_in');
					 $data['username'] = $session_data['username'];
					 
					 $data['banner_home'] = $this->home_model->get_slider("banner");
					 $data['slider_home'] = $this->home_model->get_slider("slider-home");
					 $data['welcome_section'] = $this->home_model->get_heading("home","welcome");
					 $data['banner_quote'] = $this->home_model->get_banner("home");
					 $data['products_section'] = $this->home_model->get_heading("home","products");
					 $data['products_view'] = $this->home_model->get_products();
					 $data['types_view'] = $this->home_model->get_types();
					 
					 
					 $this->load->view('admin/template/header', $data);
					 $this->load->view('admin/pages/home',$data);
					 $this->load->view('admin/template/footer', $data);	
			   }
			   else {
				   redirect("admin","refresh");
			   }
        }
		
}