<?php

	/**
	* 
	*/
	class Comments extends CI_Controller{
		
		/*public function index(){

		}*/
		public function create($post_id){
			$slug= $this->input->post('slug');

			$data['post']= $this->posts_model->get_posts($slug);
			$data['title']= $data['post']['title'];

			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('email','Email','required');
			//$this->form_validation->set_rules('email','Email','valid_email');
			$this->form_validation->set_rules('body','Body','required');

			if($this->form_validation->run() === FALSE){

				$this->load->view('includes/header');
				$this->load->view('posts/view',$data);
				$this->load->view('includes/footer');

			}else{

				$this->comments_model->create_comment($post_id);
				redirect('posts/'.$slug);

			}

		}
	}