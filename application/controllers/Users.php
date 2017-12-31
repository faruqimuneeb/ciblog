<?php

	/**
	* Users Controller to handle login and users
	*/
	class Users extends CI_Controller{
		
		
		public function register_user(){
			$data['title']= 'Sign up';

			$this->form_validation->set_rules('name','Name', 'required');
			$this->form_validation->set_rules('username','User Name', 'required');
			$this->form_validation->set_rules('email','Email', 'required');
			$this->form_validation->set_rules('password','Password', 'required');
			$this->form_validation->set_rules('confirm_password','Confirm Password', 'matches[password]');

			if($this->form_validation->run() === FALSE){
				$data['errmsg']=true;
				$this->load->view('includes/header');
				$this->load->view('users/register',$data);
				$this->load->view('includes/footer');

			}else{

				$enc_pass= md5($this->input->post('password'));
				$this->session->set_flashdata('user_registered','You are registered now and can log in');
				$this->users_model->register($enc_pass);
				redirect('users/register');

			}
		}

		
	}