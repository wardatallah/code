<?php
class Save_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function update_header($data){
			
			$enddata=array('link'=>$data['facebook_link']);
			$this->db->where('type','facebook');
			$this->db->update('social_media',$enddata);
			
			$enddata=array('link'=>$data['youtube_link']);
			$this->db->where('type','youtube');
			$this->db->update('social_media',$enddata);
			
			$enddata=array('link'=>$data['twitter_link']);
			$this->db->where('type','twitter');
			$this->db->update('social_media',$enddata);
			
			$enddata=array('link'=>$data['linkedin_link']);
			$this->db->where('type','linkedin');
			$this->db->update('social_media',$enddata);
			
			$enddata=array('path'=>$data['logo']);
			$this->db->where('section','header');
			$this->db->update('logo_images',$enddata);

		}
		
		public function update_footer($data){
			
			
			$enddata=array('path'=>$data['footer_logo']);
			$this->db->where('section','footer');
			$this->db->update('logo_images',$enddata);
			
			$enddata=array('title'=>$data['title'],'subtitle'=>$data['subtitle']);
			$this->db->where(array('section'=>'footer','page'=>'all'));
			$this->db->update('heading',$enddata);
			
			$enddata=array('subtitle'=>$data['copyright']);
			$this->db->where(array('section'=>'footer','page'=>'down'));
			$this->db->update('heading',$enddata);
			
		}


		public function update_categories($data){
			
			
			for ($i = 0; $i< sizeof($data); $i++){
				$enddata=array('img_link'=>$data[$i]['img_link'],'name'=>$data[$i]['name'],'link'=>$data[$i]['link']);
				$this->db->where('id',$data[$i]['id']);
				$this->db->update('main-categories',$enddata);
			}
		}
		
		public function update_about($whatData,$testoData,$clientsData,$data){
				$enddata=array('title'=>$data['welcomeTitle'] , 'subtitle'=>$data['welcomeSubTitle']);
				$this->db->where('page', 'about');
				$this->db->where('section', 'welcome');
				$this->db->update('heading',$enddata);
				
				
				$enddata=array('title'=>$data['quoteBannerTitle'] , 'btn_text'=>$data['quoteBtnText'] , 'btn_link'=>$data['quoteBtnLink']);
				$this->db->where('page', 'about');
				$this->db->update('banner-home',$enddata);
				
				
				$enddata=array('title'=>$data['clientsTitle'] , 'subtitle'=>$data['clientsSubTitle']);
				$this->db->where('page', 'about');
				$this->db->where('section', 'ourclient');
				$this->db->update('heading',$enddata);
				
				
				for ($i = 0; $i< sizeof($whatData); $i++){
					$enddata=array('title'=>$whatData[$i]['title'],'subtitle'=>$whatData[$i]['subtitle'],'icon'=>$whatData[$i]['icon']);
					$this->db->where('id',$whatData[$i]['id']);
					$this->db->update('what-we-do',$enddata);
				}
				
				
				for ($j = 0; $j< sizeof($testoData); $j++){
					$enddata=array('img_link'=>$testoData[$j]['img_link'],'client_name'=>$testoData[$j]['client_name'],'client_position'=>$testoData[$j]['client_position'] ,'client_text'=>$testoData[$j]['client_text']);
					$this->db->where('id',$testoData[$j]['id']);
					$this->db->update('what-clients-say',$enddata);
				}
			
			
				for ($k = 0; $k< sizeof($clientsData); $k++){
					$enddata=array('img_path'=>$clientsData[$k]['img_path'],'client_link'=>$clientsData[$k]['client_link']);
					$this->db->where('id',$clientsData[$k]['id']);
					$this->db->update('our-client',$enddata);
				}
			
			
		}
		
		public function update_home($sliderData,$carouselData,$typeData,$data){
				$enddata=array('title'=>$data['welcomeTitle'] , 'subtitle'=>$data['welcomeSubTitle']);
				$this->db->where('page', 'home');
				$this->db->where('section', 'welcome');
				$this->db->update('heading',$enddata);
				
				
				$enddata=array('title'=>$data['quoteBannerTitle'] , 'btn_text'=>$data['quoteBtnText'] , 'btn_link'=>$data['quoteBtnLink']);
				$this->db->where('id', $data['quoteBannerId']);
				$this->db->update('banner-home',$enddata);
				
				$enddata=array('title'=>$data['AndoridTitle'] , 'btn_text'=>$data['AndoridBtnText'] , 'btn_link'=>$data['AndoridBtnLink']);
				$this->db->where('id', $data['AndoridId']);
				$this->db->update('banner-home',$enddata);
				
				
				
				
				for ($i = 0; $i< sizeof($sliderData); $i++){
					$enddata=array('title'=>$sliderData[$i]['title'],'sub_title'=>$sliderData[$i]['sub_title'],'btn_text'=>$sliderData[$i]['btn_text'] ,'btn_link'=>$sliderData[$i]['btn_link'] ,'xposition'=>$sliderData[$i]['xposition'] ,'fontsize'=>$sliderData[$i]['fontsize'] ,'img_path'=>$sliderData[$i]['img_path'] );
					$this->db->where('id',$sliderData[$i]['id']);
					$this->db->update('slider',$enddata);
				}
				
				
				for ($j = 0; $j< sizeof($carouselData); $j++){
					$enddata=array('title'=>$carouselData[$j]['title'],'sub_title'=>$carouselData[$j]['sub_title'],'btn_text'=>$carouselData[$j]['btn_text'] ,'btn_link'=>$carouselData[$j]['btn_link'], 'xposition'=>'' ,'fontsize'=>0 ,'img_path'=>$carouselData[$j]['img_path'] );
					$this->db->where('id',$carouselData[$j]['id']);
					$this->db->update('slider',$enddata);
				}
			
			
				for ($k = 0; $k< sizeof($typeData); $k++){
					$enddata=array('img_path'=>$typeData[$k]['img_path'],'name'=>$typeData[$k]['name'] , 'link'=>$typeData[$k]['link']);
					$this->db->where('id',$typeData[$k]['id']);
					$this->db->update('home-type',$enddata);
				}
			
			
		}
		
		public function add_product($data){
			
				$enddata=array('name'=>$data['productName'],'prod_text'=>$data['productDesc'],'img_path'=>$data['productImage'],'country'=>$data['productCountry'],'type'=>$data['productType'],'color'=>$data['productColor'],'size'=>$data['productSize'],'isPrivate'=>$data['productPrivacy']);
				$this->db->insert('products',$enddata);

		}
		
		public function update_product($data){
			
				$enddata=array('name'=>$data['productName'],'prod_text'=>$data['productDesc'],'img_path'=>$data['productImage'],'country'=>$data['productCountry'],'type'=>$data['productType'],'color'=>$data['productColor'],'size'=>$data['productSize'],'isPrivate'=>$data['productPrivacy']);
				$this->db->where('id',$data['productId']);
				$this->db->update('products',$enddata);

		}
		
		public function add_project($data){
			
				$enddata=array('title'=>$data['projectName'],'proj_text'=>$data['projectDesc'],'img_path'=>$data['projectImage'],'client'=>$data['projectClient'],'proj_date'=>$data['projectDate']);
				$this->db->insert('projects',$enddata);

		}
		
		public function update_project($data){
			
				$enddata=array('title'=>$data['projectName'],'proj_text'=>$data['projectDesc'],'img_path'=>$data['projectImage'],'client'=>$data['projectClient'],'proj_date'=>$data['projectDate']);
				$this->db->where('id',$data['projectId']);
				$this->db->update('projects',$enddata);

		}
		
		
		public function update_contact($data){
			for ($i = 0; $i< sizeof($data); $i++){
				$enddata=array('title'=>$data[$i]['title'],'img_path'=>$data[$i]['img_path'],'address'=>$data[$i]['address'],'Tel'=>$data[$i]['Tel'],'Fax'=>$data[$i]['Fax'],'Mobile'=>$data[$i]['Mobile'],'email'=>$data[$i]['email'],'lat'=>$data[$i]['lat'],'lng'=>$data[$i]['lng']);
				$this->db->where('id',$data[$i]['id']);
				$this->db->update('locations',$enddata);
			}

		}
		
		
		
}