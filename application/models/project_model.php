<?php
class Project_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function remove_project($id){
				$this->db->where('id',$id);
				$query = $this->db->delete('projects');
			
		}
		
		
		
}