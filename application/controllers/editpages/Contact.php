<?php
class Contact extends CI_Controller {


		public function __construct()
        {
				parent::__construct();
				$this->load->model('header_model');
				$this->load->model('contact_model');
                $this->load->helper('url_helper');
				
                
				// important load
				$this->load->helper('url_helper');
				$this->load->helper('form');
				$this->load->library('form_validation');
				$this->load->library('session');
				
        }
		
		
        public function view()
        {
			
				if ( ! file_exists(APPPATH.'views/admin/pages/contact.php'))
				{
					// Whoops, we don't have a page for that!
					show_404();
				}
				
				if($this->session->userdata('logged_in'))
			   {
					 $this->load->library('form_validation');
					 $session_data = $this->session->userdata('logged_in');
					 $data['username'] = $session_data['username'];
					 
					 $data['locations'] = $this->contact_model->get_locations("about");
					 $data['map_logo'] = $this->header_model->get_logo("map");
					 
					 
					 $this->load->view('admin/template/header', $data);
					 $this->load->view('admin/pages/contact',$data);
					 $this->load->view('admin/template/footer', $data);	
			   }
			   else {
				   redirect("admin","refresh");
			   }
        }
		
}