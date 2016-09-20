<?php
Class User extends CI_Model
{
			// Read data using username and password
			public function login($data) {

				$condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . md5($data['password']) . "'";
				$this->db->select('*');
				$this->db->from('admin_user');
				$this->db->where($condition);
				$this->db->limit(1);
				$query = $this->db->get();

			if ($query->num_rows() == 1) {
				return true;
			} else {
				return false;
			}
			}
			
			// Read data from database to show data in admin page
			public function read_user_information($username) {

				$condition = "username =" . "'" . $username . "'";
				$this->db->select('*');
				$this->db->from('admin_user');
				$this->db->where($condition);
				$this->db->limit(1);
				$query = $this->db->get();

				if ($query->num_rows() == 1) {
					return $query->result();
				} else {
					return false;
				}
			}
			
			public function checkPassword($password) {

				$condition = "password =" . "'" . md5($password) . "'";
				$this->db->select('*');
				$this->db->from('admin_user');
				$this->db->where($condition);
				$this->db->limit(1);
				$query = $this->db->get();

				if ($query->num_rows() == 1) {
					return true;
				} else {
					return false;
				}
			}
			
			public function changePassword($data) {
				$data=array('password'=>md5($data['newpassword']));
				$this->db->where('username','admin');
				$this->db->update('admin_user',$data);
				
				return true;
			}
			
			
			
			public function checkColPassword($password){
				$condition = "userpass =" . "'" . md5($password) . "'";
				$this->db->select('*');
				$this->db->from('private-gallery-pass');
				$this->db->where($condition);
				$this->db->limit(1);
				$query = $this->db->get();

				if ($query->num_rows() == 1) {
					return true;
				} else {
					return false;
				}
			}
			
			public function get_users_pass($id = false){
				if ($id ===false){
					$query = $this->db->get('private-gallery-pass');
					return $query->result_array();
				} else {
					$this->db->where("id",$id);
					$query = $this->db->get('private-gallery-pass');
					return $query->row();
				}
				
			}
			
			public function update_user_pass($id,$pass){
				$enddata=array('curpass' =>$pass ,'userpass'=>md5($pass));
				$this->db->where('id',$id);
				$this->db->update('private-gallery-pass',$enddata);
			}
			
			public function add_user_pass($data){
			
				$enddata=array('username'=>$data['username'],'userpass'=>md5($data['password']),'curpass'=>$data['password'],'email'=>$data['email']);
				$this->db->insert('private-gallery-pass',$enddata);

			}
			
			public function remove_user_pass($id){
			
				$this->db->where('id',$id);
				$this->db->delete('private-gallery-pass');

			}
}
?>