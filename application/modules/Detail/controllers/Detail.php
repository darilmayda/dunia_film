<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends MX_Controller {
	public function __construct(){
        parent::__construct();
        $user_id = $this->session->userdata("user_id");
        if (!isset($user_id)) {
            redirect('login');
        }
        $this->load->model('Detail_models');
    }

	public function index(){
		$this->template->write_view('content', 'Detail_film', TRUE);
        $this->template->render(); 
	}

    function getDataFilmDetail() {
        $data = $this->input->post();
        $response = $this->Detail_models->getDetailFilm($data);
        
        echo json_encode($response);
    }

    function insertSewa(){
        $data = $this->input->post();
        $response = $this->Detail_models->InsertSewa($data);
        
        echo json_encode($response);
    }

    function getListmyMovie(){
        $data = $this->input->post();
        $response = $this->Detail_models->getFilmBystatus($data);
        
        echo json_encode($response);
    }
}
