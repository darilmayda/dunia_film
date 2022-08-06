<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymovie extends MX_Controller {
	public function __construct(){
        parent::__construct();
        
        $user_id = $this->session->userdata("user_id");
        if (!isset($user_id)) {
            redirect('login');
        }
        $this->load->model('Movie_models');
    }

	public function index(){
		$this->template->write_view('content', 'My_movie', TRUE);
        $this->template->render(); 
	}

    function getListmyMovie(){
        $data = $this->input->post();
        $response = $this->Movie_models->getModelMyFilm($data);
        
        echo json_encode($response);
    }

    function FilmEdit(){
        $data = $this->input->post();
        $response = $this->Movie_models->updateListSewa($data);
        
        echo json_encode($response);
    }
}
