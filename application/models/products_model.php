<?php
class Products_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		
		
		public function get_ProductById($id = false,$private=0){
			
				if ($id === false)
				{
					if ($private===0)
						$query = $this->db->get_where('products', array('isPrivate' => $private));
					else
						$query = $this->db->get('products');
					return $query->result_array();
				}

				$query = $this->db->get_where('products', array('id' => $id));
				
				return $query->row();
				
		}
		
		
		
			
}