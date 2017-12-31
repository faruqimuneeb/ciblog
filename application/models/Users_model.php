<?php
	/**
	* Users model to deal with database operations
	*/
	class Users_model extends CI_Model
	{
		
		function __construct()
		{
			$this->load->database();
		}

		public function register($password){

			$data= array(
				'name' => $this->input->post('name'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => $password,
				'zipcode' => $this->input->post('zip_code')
			);
			return $this->db->insert('users',$data);
		}
	}