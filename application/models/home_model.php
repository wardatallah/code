<?php
class Home_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		
		public function get_slider($type)
		{
				$this->db->where('type', $type);
				$query = $this->db->get('slider');
				return $query->result_array();
		}
		
		public function get_heading($page,$section){
				$array = array('page' => $page, 'section' => $section);
				$this->db->where($array);
				$query = $this->db->get('heading');
				return $query->row();
		}
		
		public function get_banner($page){
				$this->db->where('page', $page);
				$query = $this->db->get('banner-home');
				return $query->result_array();
		}
		
		
		public function get_products(){
				$query = $this->db->get('products');
				return $query->result_array();
		}
		
		
		
		
}