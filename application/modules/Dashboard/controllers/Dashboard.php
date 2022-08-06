<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {
	public function __construct(){
        parent::__construct();
        
        $this->load->model('Dashboard_models');
    }
	public function index()
	{
        $user_id = $this->session->userdata("user_id");
        if (!isset($user_id)) {
            redirect('login');
        }
		$this->template->write_view('content', 'Dashboard_view', TRUE);
        $this->template->render(); 
	}

	function details(){
		$this->template->write_view('content', 'Detail_film', TRUE);
        $this->template->render(); 
	}

	function getDataFilm(){
        $data = $this->Dashboard_models->getModelFilm();
        echo json_encode($data);
    }

    function getDataFilmDetail() {
        $data = $this->input->post();
        $response = $this->Dashboard_models->getDetailFilm($data);
        
        echo json_encode($response);
    }

    
}
