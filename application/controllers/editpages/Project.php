<?php
class Project extends CI_Controller {


		public function __construct()
        {
				parent::__construct();
				$this->load->model('header_model');
				$this->load->model('projects_model');
				
                
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
					 
					 $data['project'] = $this->projects_model->get_projects($id);
					 
					 
					 $this->load->view('admin/template/header', $data);
					 $this->load->view('admin/pages/project',$data);
					 $this->load->view('admin/template/footer', $data);	
			   }
			   else {
				   redirect("admin","refresh");
			   }
        }
		
		
}