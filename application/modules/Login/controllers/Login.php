<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {
	public function __construct(){
        parent::__construct();
        
        $this->load->model('Login_models');
    }
	public function index()
	{
			$user_id = $this->session->userdata("user_id");
			if($user_id) {
	             redirect('Dashboard');
	        } else {
	            $this->load->view('Login_views');
	        }
            
	}

	function logedin(){
		$data = $this->input->post();
        
        $response = $this->Login_models->login($data);
		if($response->status_code == 200){
			$this->session->set_userdata($response->data);
			// print_r($response->data['id']);die();
			$this->session->set_userdata('user_id', $response->data['id']);
		}
        echo json_encode($response);
	}

	public function logout(){
        session_destroy();
        redirect('Login','refresh');
    }
}
