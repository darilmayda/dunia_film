<?php

class Dashboard_models extends CI_Model {
    function __construct() {
              parent::__construct();
    }

    function getModelFilm() {
        $this->db->select("*")->from("film");
        $q = $this->db->get();
        return $q->result_array();
    }

    function getDetailFilm($data){
        $this->db->select("*");
        $this->db->from("film");
        $this->db->where("id", $data['id']);

        $q = $this->db->get();
        $data = $q->result();
        return $data;
    }
 
}

?>
