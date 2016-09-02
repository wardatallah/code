<?php
class About_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		
		public function get_heading($page,$section){
				$array = array('page' => $page, 'section' => $section);
				$this->db->where($array);
				$query = $this->db->get('heading');
				return $query->row();
		}
		
		
		public function get_what_we_do($page){
				$array = array('page' => $page);
				$this->db->where($array);
				$query = $this->db->get('what-we-do');
			    return $query->result_array();
		}
		
		public function get_what_clients_say($page){
				$array = array('page' => $page);
				$this->db->where($array);
				$query = $this->db->get('what-clients-say');
			    return $query->result_array();
		}
		
		public function get_our_clients($page){
				$array = array('page' => $page);
				$this->db->where($array);
				$query = $this->db->get('our-client');
			    return $query->result_array();
		}

		public function get_our_clients_heading($page,$section){
				$array = array('page' => $page, 'section' => $section);
				$this->db->where($array);
				$query = $this->db->get('heading');
				return $query->result_array();
		}		
		
		public function get_banner($page){
				$this->db->where('page', $page);
				$query = $this->db->get('banner-home');
				return $query->result_array();
		}
		
		
		public function get_locations($page){
				$this->db->where('page', $page);
				$query = $this->db->get('locations');
				return $query->result_array();
		}
		
		
		
		
}