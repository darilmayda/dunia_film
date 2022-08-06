<?php

class Watchmovie_models extends CI_Model {
    function __construct() {
              parent::__construct();
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
