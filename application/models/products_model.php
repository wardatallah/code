<?php
class Products_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		
		
		public function get_ProductById($id = FALSE){
			
				if ($id === FALSE)
				{
					$query = $this->db->get('products');
					
					return $query->result_array();
				}

				$query = $this->db->get_where('products', array('id' => $id));
				
				return $query->row();
				
		}
		
		
		
			
}