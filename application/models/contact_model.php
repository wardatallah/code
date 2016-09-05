<?php
class Contact_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		
		
		public function get_locations($page){
				$this->db->where('page', $page);
				$query = $this->db->get('locations');
				return $query->result_array();
		}
		
		
		
		
}