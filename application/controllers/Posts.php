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
			$post_id= $data['post']['id'];
			$data['comments'] = $this->comments_model->get_comments($post_id);

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

			$data['categories'] = $this->posts_model->get_categories();

			$this->form_validation->set_rules('title','Title','required');
			$this->form_validation->set_rules('body','Body','required');

			if($this->form_validation->run() === FALSE){

				$this->load->view('includes/header');
				$this->load->view('posts/create',$data);
				$this->load->view('includes/footer');
			}else{

				//Upload Image configs
				$config['upload_path']= 'assets/img/posts';
				$config['allowed_types'] ='gif|jpg|png|jpeg';
				$config['max_size']='2048';
				$config['max_width']='500';
				$config['max_heighy']='500';

				//upload library loading...

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){

					$errors= array('errors'=>$this->upload->display_errors());
					$post_img='no-iamge.png';

				}else{

					$data= array('upload_data' => $this->upload->data() );
					$post_img = $_FILES['userfile']['name'];

				}

				$this->posts_model->create_post($post_img);
				$this->session->set_flashdata('post_created','Your post have been created');
					redirect('posts');
				//$this->load->view('posts/success');
			}

		}

		public function delete($id){
			$this->posts_model->delete_post($id);
			$this->session->set_flashdata('post_deleted','Your post have been deleted');
			redirect('posts');
		}

		public function edit($slug){
			$data['post'] = $this->posts_model->get_posts($slug);

			if(empty($data['post'])){
				show_404();
			}

			$data['title']= 'Edit Post';

			$data['categories'] = $this->posts_model->get_categories();

			$this->load->view('includes/header');
			$this->load->view('posts/edit',$data);
			$this->load->view('includes/footer');
		}

		public function update(){

			$this->posts_model->update_post();
			$this->session->set_flashdata('post_updated','Your post have been updated');
			redirect('posts');

		}
	}