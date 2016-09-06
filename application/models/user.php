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
}
?>