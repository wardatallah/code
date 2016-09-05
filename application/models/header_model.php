<?php
class Header_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		
		public function get_menu(){
				
		}
		
		public function get_heading($page,$section){
				$array = array('page' => $page, 'section' => $section);
				$this->db->where($array);
				$query = $this->db->get('heading');
				return $query->row();
		}
		
		public function get_logo($section){
			$this->db->where('section' , $section);
			$query = $this->db->get('logo_images');
			return $query->row();
		}
		
		public function get_social(){
				$query = $this->db->get('social_media');
				return $query->result_array();
		}
		
		
		
}