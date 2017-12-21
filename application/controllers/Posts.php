<?php

	class Posts extends CI_Controller
	{
		
		
		public function index(){

			$data['title']= 'Latest Posts';

			$data['posts']= $this->posts_model->get_posts();
			
			$this->load->view('includes/header');
			$this->load->view('posts/index',$data);
			$this->load->view('includes/footer');
		}
		public function view($slug = NULL){
			$data['post'] = $this->posts_model->get_posts($slug);

			if(empty($data['post'])){
				show_404();
			}

			$data['title']= $data['post']['title'];
			$this->load->view('includes/header');
			$this->load->view('posts/view',$data);
			$this->load->view('includes/footer');
		}
	}