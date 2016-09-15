<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Save extends CI_Controller {

			 function __construct()
			 {
				   parent::__construct();
				   $this->load->model('header_model');
				   $this->load->model('admin/save_model');
				   $this->load->helper('url_helper');
				   // Load form helper library
					$this->load->helper('form');

					// Load form validation library
					$this->load->library('form_validation');

					// Load session library
					$this->load->library('session');
			 }
			 
			 
			 function saveHeader(){
				 if(isset($this->session->userdata['logged_in'])){
					 
					 $data = array(
						'logo' => $this->input->post('logo'),
						'facebook_link' => $this->input->post('facebook_link'),
						'twitter_link' => $this->input->post('twitter_link'),
						'youtube_link' => $this->input->post('youtube_link'),
						'linkedin_link' => $this->input->post('linkedin_link')
						
						);
					 
					 
					 $result = $this->save_model->update_header($data);
					 
					 redirect('Admin/header_section', 'refresh');
					 
				 } else {
					 redirect('admin', 'refresh');
				 }
			 }

			 
			 function saveCat(){
				 if(isset($this->session->userdata['logged_in'])){
					 
					 $ids = $this->input->post('id');
					 $img_links = $this->input->post('img_link');
					 $names = $this->input->post('name');
					 $links = $this->input->post('link');
					 $data = array();
					 $length = count($ids);
					 for($i = 0; $i < $length; $i++) {
						$data[$i]['id'] = $ids[$i];
						$data[$i]['name'] = $names[$i];
						$data[$i]['img_link'] = $img_links[$i];
						$data[$i]['link'] = $links[$i];
						
					 }
					 
					 $result = $this->save_model->update_categories($data);
					 
					 redirect('Admin/categories', 'refresh');
					 
				 } else {
					 redirect('admin', 'refresh');
				 }
			 }
			 
			 
			 function saveAbout(){
				 if(isset($this->session->userdata['logged_in'])){
					 $data = array();
					 
					 $data['welcomeTitle'] = $this->input->post('welcomeTitle');
					 $data['welcomeSubTitle'] = $this->input->post('welcomeSubTitle');
					 
					 $whatIds = $this->input->post('whatId');
					 $whatTitles = $this->input->post('whatTitle');
					 $whatSubTitles = $this->input->post('whatSubTitle');
					 $whatIcons = $this->input->post('whatIcon');
					 
					 $whatData = array();
					 $whatLength = count($whatIds);
					 
					 for($i = 0; $i < $whatLength; $i++) {
						$whatData[$i]['id'] = $whatIds[$i];
						$whatData[$i]['title'] = $whatTitles[$i];
						$whatData[$i]['subtitle'] = $whatSubTitles[$i];
						$whatData[$i]['icon'] = $whatIcons[$i];
					 }
					 
					 $data['quoteBannerTitle'] = $this->input->post('quoteBannerTitle');
					 $data['quoteBtnText'] = $this->input->post('quoteBtnText');
					 $data['quoteBtnLink'] = $this->input->post('quoteBannerTitle');
					 
					 
					 $testoIds = $this->input->post('testoId');
					 $testoImages = $this->input->post('testoImages');
					 $testoNames = $this->input->post('testoName');
					 $testoPositions = $this->input->post('testoPosition');
					 $testoText = $this->input->post('testoText');
					 
					 $testoData = array();
					 $testoLength = count($testoIds);
					 
					 
					 for($j = 0; $j < $testoLength; $j++) {
						$testoData[$j]['id'] = $testoIds[$j];
						$testoData[$j]['img_link'] = $testoImages[$j];
						$testoData[$j]['client_name'] = $testoNames[$j];
						$testoData[$j]['client_position'] = $testoPositions[$j];
						$testoData[$j]['client_text'] = $testoText[$j];		

					 }
					 
					 
					 $data['clientsTitle'] = $this->input->post('clientsTitle');
					 $data['clientsSubTitle'] = $this->input->post('clientsSubTitle');
					 
					 $clientsId = $this->input->post('clientsId');
					 $clientsImages = $this->input->post('clientsImages');
					 $clientsLink = $this->input->post('clientsLink');
					 
					 $clientsData = array();
					 $clientsLength = count($clientsId);
					 
					 for($k = 0; $k < $clientsLength; $k++) {
						$clientsData[$k]['id'] = $clientsId[$k];
						$clientsData[$k]['img_path'] = $clientsImages[$k];
						$clientsData[$k]['client_link'] = $clientsLink[$k];
											
					 }
					 
					 
					 $result = $this->save_model->update_about($whatData,$testoData,$clientsData,$data);
					 
					 redirect('editpages/about', 'refresh');
					 
				 } else {
					 redirect('admin', 'refresh');
				 }
			 }
			 
			 function saveHome(){
				 if(isset($this->session->userdata['logged_in'])){
					 $data = array();
					 
					 $sliderIds = $this->input->post('sliderIds');
					 $sliderImages = $this->input->post('sliderImages');
					 $sliderTitles = $this->input->post('sliderTitles');
					 $sliderSubTitles = $this->input->post('sliderSubTitles');
					 $sliderBtnTitles = $this->input->post('sliderBtnTitles');
					 $sliderBtnLinks = $this->input->post('sliderBtnLinks');
					 $sliderPosition = $this->input->post('sliderPosition');
					 $sliderFont = $this->input->post('sliderFont');
					 
					 $sliderFont = str_replace("px","",$sliderFont);
					 
					 $sliderData = array();
					 $SliderLength = count($sliderIds);
					 
					 for($i = 0; $i < $SliderLength; $i++) {
						$sliderData[$i]['id'] = $sliderIds[$i];
						$sliderData[$i]['img_path'] = $sliderImages[$i];
						$sliderData[$i]['title'] = $sliderTitles[$i];
						$sliderData[$i]['sub_title'] = $sliderSubTitles[$i];
						$sliderData[$i]['btn_text'] = $sliderBtnTitles[$i];
						$sliderData[$i]['btn_link'] = $sliderBtnLinks[$i];
						$sliderData[$i]['xposition'] = $sliderPosition[$i];
						$sliderData[$i]['fontsize'] = $sliderFont[$i];
						
					 }
					 
					 
					 $carouselIds = $this->input->post('carouselIds');
					 $carouselImages = $this->input->post('carouselImages');
					 $carouselTitles = $this->input->post('carouselTitles');
					 $carouselSubTitles = $this->input->post('carouselSubTitles');
					 $carouselBtnTitles = $this->input->post('carouselBtnTitles');
					 $carouselBtnLinks = $this->input->post('carouselBtnLinks');
					 					 
					 $carouselData = array();
					 $carouselLength = count($carouselIds);
					 
					 
					 for($k = 0; $k < $carouselLength; $k++) {
						$carouselData[$k]['id'] = $carouselIds[$k];
						$carouselData[$k]['img_path'] = $carouselImages[$k];
						$carouselData[$k]['title'] = $carouselTitles[$k];
						$carouselData[$k]['sub_title'] = $carouselSubTitles[$k];
						$carouselData[$k]['btn_text'] = $carouselBtnTitles[$k];
						$carouselData[$k]['btn_link'] = $carouselBtnLinks[$k];
						
						
						
					 }
					 
					 
					 $data['welcomeTitle'] = $this->input->post('welcomeTitle');
					 $data['welcomeSubTitle'] = $this->input->post('welcomeSubTitle');
					 
					 $data['quoteBannerId'] = $this->input->post('quoteBannerId');
					 $data['quoteBannerTitle'] = $this->input->post('quoteBannerTitle');
					 $data['quoteBtnText'] = $this->input->post('quoteBtnText');
					 $data['quoteBtnLink'] = $this->input->post('quoteBannerTitle');
					 
					 $data['AndoridId'] = $this->input->post('AndoridId');
					 $data['AndoridTitle'] = $this->input->post('AndoridTitle');
					 $data['AndoridBtnText'] = $this->input->post('AndoridBtnText');
					 $data['AndoridBtnLink'] = $this->input->post('AndoridBtnLink');
					 
					 
					 $typeIds = $this->input->post('typeIds');
					 $typeImages = $this->input->post('typeImages');
					 $typeTitles = $this->input->post('typeTitles');
					 $typeLinks = $this->input->post('typeLinks');
					 
					 $typeData = array();
					 $typeLength = count($typeIds);
					 
					 
					 for($j = 0; $j < $typeLength; $j++) {
						$typeData[$j]['id'] = $typeIds[$j];
						$typeData[$j]['img_path'] = $typeImages[$j];
						$typeData[$j]['name'] = $typeTitles[$j];
						$typeData[$j]['link'] = $typeLinks[$j];

					 }
					 
					 
					 
					 
					 $result = $this->save_model->update_home($sliderData,$carouselData,$typeData,$data);
					 
					 redirect('editpages/home', 'refresh');
					 
				 } else {
					 redirect('admin', 'refresh');
				 }
			 }
			 
			 function saveContact(){
				 if(isset($this->session->userdata['logged_in'])){
					 
					 $ids = $this->input->post('locationId');
					 $img_links = $this->input->post('locationImage');
					 $titles = $this->input->post('locationTitle');
					 $lats = $this->input->post('locationLat');
					 $lngs = $this->input->post('locationLng');
					 $addresses = $this->input->post('locationAddr');
					 $emails = $this->input->post('locationEmail');
					 $tels = $this->input->post('locationTel');
					 $mobiles = $this->input->post('locationMob');
					 $faxes = $this->input->post('locationFax');
					 
					 $data = array();
					 $length = count($ids);
					 for($i = 0; $i < $length; $i++) {
						$data[$i]['id'] = $ids[$i];
						$data[$i]['title'] = $titles[$i];
						$data[$i]['img_path'] = $img_links[$i];
						$data[$i]['address'] = $addresses[$i];
						$data[$i]['Tel'] = $tels[$i];
						$data[$i]['Fax'] = $faxes[$i];
						$data[$i]['Mobile'] = $mobiles[$i];
						$data[$i]['email'] = $emails[$i];
						$data[$i]['lat'] = $lats[$i];
						$data[$i]['lng'] = $lngs[$i];
						
					 }
					 
					 $result = $this->save_model->update_contact($data);
					 
					 redirect('editpages/contact', 'refresh');
					 
				 } else {
					 redirect('admin', 'refresh');
				 }
			 }
			 
			 function saveProduct(){
				 if(isset($this->session->userdata['logged_in'])){
					 $data = array();
					 
					 $data['productId'] = $this->input->post('productId');
					 $data['productImage'] = $this->input->post('productImage');
					 $data['productName'] = $this->input->post('productName');
					 $data['productDesc'] = $this->input->post('productDesc');
					 $data['productCountry'] = $this->input->post('productCountry');
					 $data['productType'] = $this->input->post('productType');
					 $data['productColor'] = $this->input->post('productColor');
					 $data['productSize'] = $this->input->post('productSize');
					 $data['productPrivacy'] = $this->input->post('productPrivacy');
					 
					 if ($data['productPrivacy']==='Yes'){
						 $data['productPrivacy']=1;
					 } else {
						 $data['productPrivacy']=0;
					 }
					 
					 
					 $result = $this->save_model->update_product($data);
					 
					 
					 redirect('editpages/product/edit/'.$data['productId'], 'refresh');
					 
					 
				 } else {
					 redirect('admin', 'refresh');
				 }
			 }
			 
			 
			 function addProduct(){
				 if(isset($this->session->userdata['logged_in'])){
					 $data = array();
					 
					 $data['productImage'] = $this->input->post('productImage');
					 $data['productName'] = $this->input->post('productName');
					 $data['productDesc'] = $this->input->post('productDesc');
					 $data['productCountry'] = $this->input->post('productCountry');
					 $data['productType'] = $this->input->post('productType');
					 $data['productColor'] = $this->input->post('productColor');
					 $data['productSize'] = $this->input->post('productSize');
					 $data['productPrivacy'] = $this->input->post('productPrivacy');
					 
					 if ($data['productPrivacy']==='Yes'){
						 $data['productPrivacy']=1;
					 } else {
						 $data['productPrivacy']=0;
					 }
					 
					 
					 $result = $this->save_model->add_product($data);
					 
					 
					 redirect('editpages/products', 'refresh');
					 
					 
				 } else {
					 redirect('admin', 'refresh');
				 }
			 }
			 
			 function addProject(){
				 if(isset($this->session->userdata['logged_in'])){
					 $data = array();
					 
					 $data['projectImage'] = $this->input->post('projectImage');
					 $data['projectName'] = $this->input->post('projectName');
					 $data['projectDesc'] = $this->input->post('projectDesc');
					 $data['projectClient'] = $this->input->post('projectClient');
					 $data['projectDate'] = $this->input->post('projectDate');
					 
					 
					 $result = $this->save_model->add_project($data);
					 
					 
					 redirect('editpages/projects', 'refresh');
					 
					 
				 } else {
					 redirect('admin', 'refresh');
				 }
			 }
			 
			 function saveProject(){
				 if(isset($this->session->userdata['logged_in'])){
					 $data = array();
					 
					 $data['projectId'] = $this->input->post('projectId');
					 $data['projectImage'] = $this->input->post('projectImage');
					 $data['projectName'] = $this->input->post('projectName');
					 $data['projectDesc'] = $this->input->post('projectDesc');
					 $data['projectClient'] = $this->input->post('projectClient');
					 $data['projectDate'] = $this->input->post('projectDate');
					 
					 
					 
					 
					 $result = $this->save_model->update_project($data);
					 
					 
					 redirect('editpages/project/edit/'.$data['projectId'], 'refresh');
					 
					 
				 } else {
					 redirect('admin', 'refresh');
				 }
			 }
			 
			 
}

?>