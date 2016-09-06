<?php
class Projects extends CI_Controller {


		public function __construct()
        {
				parent::__construct();
				$this->load->model('header_model');
				$this->load->model('projects_model');
                $this->load->helper('url_helper');
				
        }
		
		
        public function index()
        {
			
				$data['header_logo'] = $this->header_model->get_logo("header");
				$data['social_media'] = $this->header_model->get_social();
				$data['private_gallery'] = $this->header_model->get_heading("all","header");
				
				// Capitalize the first letter
				$data['title'] = ucfirst("projects"); 
				
				// get Projects
				$data['projects'] = $this->projects_model->get_projects();
				
				$this->load->helper('url');
				
                $this->load->view('templates/header', $data);
				$this->load->view('pages/projects', $data);
				$this->load->view('templates/footer', $data);
        }
		
		
		public function view($id = NULL){
			
				$data['header_logo'] = $this->header_model->get_logo("header");
				$data['social_media'] = $this->header_model->get_social();
				$data['private_gallery'] = $this->header_model->get_heading("all","header");
				
				// Capitalize the first letter
				$data['title'] = ucfirst("projects"); 
				
				$this->load->helper('url');
				
				$data['project'] = $this->projects_model->get_projects($id);
				
				
				$this->load->view('templates/header', $data);
				$this->load->view('pages/project', $data);
				$this->load->view('templates/footer', $data);
				
		}
}