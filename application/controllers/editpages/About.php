<?php
class About extends CI_Controller {


		public function __construct()
        {
				parent::__construct();
				$this->load->model('header_model');
				$this->load->model('about_model');
                $this->load->helper('url_helper');
				
                
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
					 
					 $data['welcome_section'] = $this->about_model->get_heading("about","welcome");
					 $data['whatwedo_section'] = $this->about_model->get_what_we_do("about","whatwedo");
					 $data['about_banner_section'] = $this->about_model->get_banner("about");
					 $data['locations_section'] = $this->about_model->get_locations("about");
				 	 $data['clients_say_section'] = $this->about_model->get_what_clients_say("about");
					 $data['our_clients_section'] = $this->about_model->get_our_clients("about");
					 $data['our_clients_heading'] = $this->about_model->get_our_clients_heading("about","ourclient");
					 
					 
					 $this->load->view('admin/template/header', $data);
					 $this->load->view('admin/pages/about',$data);
					 $this->load->view('admin/template/footer', $data);	
			   }
			   else {
				   redirect("admin","refresh");
			   }
        }
		
}