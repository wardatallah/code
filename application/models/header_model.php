<?php
class Header_model extends CI_Model {

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
		
		
		
		
}