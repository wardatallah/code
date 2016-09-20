<?php

Class Userlogin extends CI_Controller {

		public function __construct() {
			parent::__construct();

			// Load form helper library
			$this->load->helper('form');

			// Load form validation library
			$this->load->library('form_validation');

			// Load session library
			$this->load->library('session');

			// Load database
			$this->load->model('user');
			$this->load->model('header_model');
			$this->load->helper('url_helper');
		}

		// Show login page
		public function index() {
			$this->load->view('admin/login');
		}


		// Check for user login process
		public function login() {
		
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			
			
			
			if ($this->form_validation->run() == FALSE) {
					if(isset($this->session->userdata['logged_in'])){
						redirect('admin', 'refresh');
					}else{
						$data['footer_logo'] = $this->header_model->get_logo("footer");
						$data['header_logo'] = $this->header_model->get_logo("header");
						$data['social_media'] = $this->header_model->get_social();
						$data['locations'] = $this->contact_model->get_locations("about");
						$data['footer_about'] = $this->header_model->get_heading("all","footer");
						$data['footer_copyright'] = $this->header_model->get_heading("down","footer");
						$data['title'] = ucfirst("Login Panel"); // Capitalize the first letter
						$data['private_gallery'] = $this->header_model->get_heading("all","header");
						$this->load->view('templates/header', $data);
				
						$this->load->view('admin/login');
					
						$this->load->view('templates/footer', $data);	
					}
			} else {
					$data = array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password')
					);
					$result = $this->user->login($data);
					
					if ($result == TRUE) {

						$username = $this->input->post('username');
						$result = $this->user->read_user_information($username);
						
						if ($result != false) {
						$session_data = array(
							'username' => $result[0]->username,
							'email' => $result[0]->email,
							);
							// Add user data in session
							$this->session->set_userdata('logged_in', $session_data);
							redirect('admin', 'refresh');
						}
					} else {
						$data = array(
						'error_message' => 'Invalid Username or Password'
						);
						$data['footer_logo'] = $this->header_model->get_logo("footer");
						$data['header_logo'] = $this->header_model->get_logo("header");
						$data['social_media'] = $this->header_model->get_social();
						$data['locations'] = $this->contact_model->get_locations("about");
						$data['footer_about'] = $this->header_model->get_heading("all","footer");
						$data['footer_copyright'] = $this->header_model->get_heading("down","footer");
						$data['title'] = ucfirst("Login Panel"); // Capitalize the first letter
						$data['private_gallery'] = $this->header_model->get_heading("all","header");
						$this->load->view('templates/header', $data);
				
						$this->load->view('admin/login');
					
						$this->load->view('templates/footer', $data);	
					}
			}
		}

		// Logout from admin page
		public function logout() {

			// Removing session data
			$sess_array = array(
			'username' => ''
			);
			$this->session->unset_userdata('logged_in', $sess_array);
			$data['footer_copyright'] = $this->header_model->get_heading("down","footer");
			redirect('admin', 'refresh');
		}
		
		
		
		
		public function changePassword() {
		
			$this->form_validation->set_rules('currentPassword', 'Current Password', 'trim|required');
			$this->form_validation->set_rules('newPassword', 'New Password', 'trim|required');
			$this->form_validation->set_rules('confirmNewPassword', 'Confirm Password', 'trim|required');
			
			
			
			if ($this->form_validation->run() == FALSE) {
					if(isset($this->session->userdata['logged_in'])){
						$this->load->library('form_validation');
						$session_data = $this->session->userdata('logged_in');
						$data['username'] = $session_data['username'];
						$this->load->view('admin/template/header', $data);
						$this->load->view('admin/settings');
						$this->load->view('admin/template/footer', $data);
					}else{
						$data['footer_logo'] = $this->header_model->get_logo("footer");
						$data['header_logo'] = $this->header_model->get_logo("header");
						$data['social_media'] = $this->header_model->get_social();
						$data['locations'] = $this->contact_model->get_locations("about");
						$data['footer_about'] = $this->header_model->get_heading("all","footer");
						$data['footer_copyright'] = $this->header_model->get_heading("down","footer");
						$data['title'] = ucfirst("Login Panel"); // Capitalize the first letter
						$data['private_gallery'] = $this->header_model->get_heading("all","header");
						$this->load->view('templates/header', $data);
				
						$this->load->view('admin/login');
					
						$this->load->view('templates/footer', $data);	
					}
			} else { 
						$data = array(
						'password' => $this->input->post('currentPassword'),
						'newpassword' => $this->input->post('newPassword'),
						'confpassword' => $this->input->post('confirmNewPassword')
						);
						
					
					
					$password = $this->input->post('currentPassword');
					if ($data['newpassword'] === $data['confpassword']){
							$result = $this->user->checkPassword($password);
							
							if ($result == TRUE){
								$changed = $this->user->changePassword($data);
								
								$sess_array = array(
								'username' => ''
								);
								$this->session->unset_userdata('logged_in', $sess_array);
								$data['message_display'] = 'Successfully Logout';
								redirect('admin', 'refresh');
								
								
							} else {
								
								$data = array(
								'error_message' => 'Current Passsword is invalid !'
								);
								 $this->load->library('form_validation');
								 $session_data = $this->session->userdata('logged_in');
								 $data['username'] = $session_data['username'];
								 $this->load->view('admin/template/header', $data);
								 $this->load->view('admin/settings');
								 $this->load->view('admin/template/footer', $data);
								
							}
					} else {
						$data = array(
						'error_message' => 'Passwords don\'t match !'
						);
						 $this->load->library('form_validation');
						 $session_data = $this->session->userdata('logged_in');
						 $data['username'] = $session_data['username'];
						 $this->load->view('admin/template/header', $data);
						 $this->load->view('admin/settings');
						 $this->load->view('admin/template/footer', $data);
					}
					
			}
		}

}

?>