<?php
class Product_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function remove_product($id){
				$this->db->where('id',$id);
				$query = $this->db->delete('products');
			
		}
		
		
		public function get_categories($page,$category){
				$array = array('page' => $page, 'cat_name' => $category);
				$this->db->where($array);
				$query = $this->db->get('categories');
				return $query->result_array();
		}
		
		
		public function get_products($country , $type , $color , $size,$private=0){
				$this->db->where('isPrivate',$private);
				if(isset($country)){
						$this->db->where('country',$country);
				}
				
				if(isset($type)){
						$this->db->where('type',$type);
				}
		
				if(isset($color)){
						$this->db->where('color',$color);
				}
				
				if(isset($size)){
						$this->db->where('size',$size);
				}
				
				$query = $this->db->get('products');
			    return $query->result_array();
		}
		
		
}