<?php

Class CheckPass extends CI_Controller {

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
			
		}

		public function check($pass) {
			
			$result = $this->user->checkColPassword($pass);
			if ($result == true){
				$session_data = array(
								'password' => md5($pass)
								);
				$this->session->set_userdata('private_user', $session_data);
				
				echo "success";
				
				
				
			} else {
				echo "error";
			}
			
		}
		
		
}

?>