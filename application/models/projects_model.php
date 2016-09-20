<?php
class Projects_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		
		
		public function get_Projects($id = FALSE, $num = FALSE){
			
				if ($id === FALSE)
				{
					if ($num !== FALSE){
						$this->db->limit($num);
					}
					$query = $this->db->get('projects');
					
					return $query->result_array();
				}
				
				$query = $this->db->get_where('projects', array('id' => $id));
				
				return $query->row();
				
		}
		
		
		
			
}