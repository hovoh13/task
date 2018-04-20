<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class User_ajax extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	
	public function logon()
	{
		$name=$this->input->post('name');
		$pwd=$this->input->post('pwd');

		$this->load->model('user_ajax_model');
		if($user=$this->user_ajax_model->getUser($name, $pwd)){
			$this->session->set_userdata( "user",$user);
			echo json_encode($user);
			exit;
		}else{
			echo json_encode(['error'=>'no user']);
			exit;
		}
		
	}
	public function logout(){
		if($this->session->has_userdata('user')){
			// unset
			$this->session->unset_userdata('user');
		}
	}
	public function allActiv(){
		if($this->session->has_userdata( 'user' )){
			$this->load->model('user_ajax_model');
			if($user=$this->user_ajax_model->getActivUser()){
				echo json_encode($user);
				exit;
			}
			else
			{
				echo json_encode(['error'=>'no activ user']);
				exit;
			}
		}
	}

}