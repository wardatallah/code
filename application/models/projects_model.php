<?php
class Projects_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		
		
		public function get_Projects($id = FALSE){
			
				if ($id === FALSE)
				{
					$query = $this->db->get('projects');
					
					return $query->result_array();
				}

				$query = $this->db->get_where('projects', array('id' => $id));
				
				return $query->row();
				
		}
		
		
		
			
}