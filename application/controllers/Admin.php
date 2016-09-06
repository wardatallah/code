<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller {

			 function __construct()
			 {
				   parent::__construct();
				   $this->load->model('header_model');
				   $this->load->helper('url_helper');
			 }

			 function index()
			 {
				 $this->load->library('form_validation');
				 $data['header_logo'] = $this->header_model->get_logo("header");
				 $data['social_media'] = $this->header_model->get_social();
			   if($this->session->userdata('logged_in'))
			   {
				 $session_data = $this->session->userdata('logged_in');
				 $data['username'] = $session_data['username'];
				 $this->load->view('admin/dashboard');
			   }
			   else
			   {
				 //If no session, redirect to login page
				 
				$data['title'] = ucfirst("Login Panel"); // Capitalize the first letter
				$data['private_gallery'] = $this->header_model->get_heading("all","header");
		
		
		
		
				$this->load->view('templates/header', $data);
        
				 $this->load->view('admin/login');
			
				$this->load->view('templates/footer', $data);
        
				}
			 }

			 function logout()
			 {
			   $this->session->unset_userdata('logged_in');
			   session_destroy();
			   $this->load->view('admin/login');
			 }

}

?>