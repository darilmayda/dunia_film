<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WatchMovie extends MX_Controller {
	public function __construct(){
        parent::__construct();
        
        $user_id = $this->session->userdata("user_id");
        if (!isset($user_id)) {
            redirect('login');
        }
        $this->load->model('Watchmovie_models');
    }

	public function index(){
		$this->template->write_view('content', 'watch_movie', TRUE);
        $this->template->render(); 
	}

    function getWatchMovie(){
        $data = $this->input->post();
        $response = $this->Watchmovie_models->getDetailFilm($data);
        
        echo json_encode($response);
    }
}
