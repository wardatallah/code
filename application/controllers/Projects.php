<?php
class Projects extends CI_Controller {


		public function __construct()
        {
				parent::__construct();
				$this->load->model('header_model');
				$this->load->model('projects_model');
				$this->load->model('contact_model');
                $this->load->helper('url_helper');
				
        }
		
		
        public function index()
        {
			
				if ( ! file_exists(APPPATH.'views/pages/projects.php'))
				{
					// Whoops, we don't have a page for that!
					show_404();
				}
				$data['header_logo'] = $this->header_model->get_logo("header");
				$data['footer_logo'] = $this->header_model->get_logo("footer");
				$data['social_media'] = $this->header_model->get_social();
				$data['private_gallery'] = $this->header_model->get_heading("all","header");
				$data['footer_about'] = $this->header_model->get_heading("all","footer");
				$data['footer_copyright'] = $this->header_model->get_heading("down","footer");
				
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
				$data['footer_logo'] = $this->header_model->get_logo("footer");
				$data['social_media'] = $this->header_model->get_social();
				$data['private_gallery'] = $this->header_model->get_heading("all","header");
				$data['locations'] = $this->contact_model->get_locations("about");
				$data['footer_about'] = $this->header_model->get_heading("all","footer");
				$data['footer_copyright'] = $this->header_model->get_heading("down","footer");
				
				// Capitalize the first letter
				$data['title'] = ucfirst("projects"); 
				
				$this->load->helper('url');
				
				$data['project'] = $this->projects_model->get_projects($id);
				
				
				$this->load->view('templates/header', $data);
				$this->load->view('pages/project', $data);
				$this->load->view('templates/footer', $data);
				
		}
}