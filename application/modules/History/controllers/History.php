<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends MX_Controller {
	public function __construct(){
        parent::__construct();

        $user_id = $this->session->userdata("user_id");
        if (!isset($user_id)) {
            redirect('login');
        }
        $this->load->model('History_models');
    }

	public function index(){
		$this->template->write_view('content', 'History_view', TRUE);
        $this->template->render(); 
	}

    function getListHistory(){
        $data = $this->input->post();
        $response = $this->History_models->getHistoryFilm($data);
        $output = array(
            "data" => array()
        );

        foreach ($response as $row) {
                $output['data'][] = $row;
        }
        echo json_encode($output);
    }
}
