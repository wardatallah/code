<?php
class Project extends CI_Controller {


		public function __construct()
        {
				parent::__construct();
				$this->load->model('header_model');
				$this->load->model('projects_model');
				$this->load->model('project_model');
                
				// important load
				$this->load->helper('url_helper');
				$this->load->helper('form');
				$this->load->library('form_validation');
				$this->load->library('session');
				
        }
		
		
        public function edit($id)
        {
			
				if ( ! file_exists(APPPATH.'views/admin/pages/project.php'))
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
		
		public function remove($id)
        {
			
				
				if($this->session->userdata('logged_in'))
			   {
					 $session_data = $this->session->userdata('logged_in');
					 $data['username'] = $session_data['username'];
					 
					 $result = $this->project_model->remove_project($id);
					 
					 redirect("editpages/projects","refresh");
			   }
			   else {
					redirect("admin","refresh");
			   }
        }
		
		public function add()
        {
			
				if ( ! file_exists(APPPATH.'views/admin/pages/addProject.php'))
				{
					// Whoops, we don't have a page for that!
					show_404();
				}
				
				if($this->session->userdata('logged_in'))
			   {
					 $this->load->library('form_validation');
					 $session_data = $this->session->userdata('logged_in');
					 $data['username'] = $session_data['username'];
					 
					 
					 $this->load->view('admin/template/header', $data);
					 $this->load->view('admin/pages/addProject',$data);
					 $this->load->view('admin/template/footer', $data);	
			   }
			   else {
				   redirect("admin","refresh");
			   }
        }
		
		
}