<?php
class Map_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		
		public function get_info(){
				$query = $this->db->get('map_info');
				return $query->row();
		}
		

		
}