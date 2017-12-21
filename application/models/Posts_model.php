<?php

	/**
	* 
	*/
	class Posts_model extends CI_Model
	{
		
		public function __construct()
		{
			$this->load->database();
		}

		public function get_posts($slug = FALSE){

			if($slug === FALSE){
				$query= $this->db->get('tbl_posts');
				return $query->result_array();
			}

			$query = $this->db->get_where('tbl_posts', array('slug' => $slug ));
			return $query->row_array();
		}
	}