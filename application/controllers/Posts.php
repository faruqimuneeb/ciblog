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
		public function create(){

			$data['title']= 'Create post';

			$this->form_validation->set_rules('title','Title','required');
			$this->form_validation->set_rules('body','Body','required');

			if($this->form_validation->run() === FALSE){

				$this->load->view('includes/header');
				$this->load->view('posts/create',$data);
				$this->load->view('includes/footer');
			}else{

				$this->posts_model->create_post();
					redirect('posts');
				//$this->load->view('posts/success');
			}

		}

		public function delete($id){
			$this->posts_model->delete_post($id);
			redirect('posts');
		}

		public function edit($slug){
			$data['post'] = $this->posts_model->get_posts($slug);

			if(empty($data['post'])){
				show_404();
			}

			$data['title']= 'Edit Post';
			$this->load->view('includes/header');
			$this->load->view('posts/edit',$data);
			$this->load->view('includes/footer');
		}

		public function update(){

			$this->posts_model->update_post();
			redirect('posts');

		}
	}