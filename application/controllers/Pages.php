<?php
class Pages extends CI_Controller {


		public function __construct()
        {
				parent::__construct();
                $this->load->model('home_model');
				
                $this->load->helper('url_helper');
				
        }
		
		
        public function view($page = 'home')
        {
			if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
			{
                // Whoops, we don't have a page for that!
                show_404();
			}

		if ($page == 'home'){
			$data['banner_home'] = $this->home_model->get_slider("banner");
			$data['slider_home'] = $this->home_model->get_slider("slider-home");
			$data['welcome_section'] = $this->home_model->get_heading("home","welcome");
			$data['banner_quote'] = $this->home_model->get_banner("home");
			$data['products_section'] = $this->home_model->get_heading("home","products");
			$data['products_view'] = $this->home_model->get_products();

		}
    

		$data['title'] = ucfirst($page); // Capitalize the first letter
		$this->load->helper('url');
		
		
		
		
		
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
        }
		
		
}