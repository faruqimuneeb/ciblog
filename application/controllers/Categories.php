<?php

	/**
	* 
	*/
	class Categories extends CI_Controller
	{
		public function index(){
			$data['title']= 'Categories';

			$data['categories']= $this->category_model->get_categories();
			$this->load->view('includes/header');
			$this->load->view('categories/index',$data);
			$this->load->view('includes/footer');
		}
		public function create(){

			$data['title'] = 'Add Category';

			$this->form_validation->set_rules('name','Name','required');

			if($this->form_validation->run()===FALSE){

				$data['errMsg']= TRUE;
				$this->load->view('includes/header');
				$this->load->view('categories/create',$data);
				$this->load->view('includes/footer');
				

			}else{
				$this->category_model->create_category();
				$this->session->set_flashdata('category_created','Your category has been created');
				redirect('categories');

			}
			
		}

		public function posts($id){

			$data['title']= $this->category_model->get_category($id)->name;

			$data['posts'] = $this->posts_model->get_post_by_category($id);

				$this->load->view('includes/header');
				$this->load->view('posts/index',$data);
				$this->load->view('includes/footer');
		}

	}