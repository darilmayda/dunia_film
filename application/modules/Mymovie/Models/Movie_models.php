<?php

class Movie_models extends CI_Model {
    function __construct() {
              parent::__construct();
    }

    function getModelMyFilm($data) {
        $iduser   = $data['iduser'];
        $query = $this->db->query("SELECT sewa_film.*, film.thumbnail, film.judul_film FROM sewa_film JOIN film WHERE sewa_film.iduser = $iduser  AND sewa_film.status_sewa = 1 AND sewa_film.idfilm=film.id");
        return $query->result();
    }

    function getDetailFilm($data){
        $this->db->select("*");
        $this->db->from("film");
        $this->db->where("id", $data['id']);

        $q = $this->db->get();
        $data = $q->result();
        return $data;
    }

    function updateListSewa($data){
        $updatedValue['id'] = $data['id'];
        $updatedValue['status_sewa'] = $data['status_sewa'];

        $this->db->trans_start();
        $this->db->where('id', $data['id']);
        $this->db->update('sewa_film', $updatedValue);
        $this->db->trans_complete();

        $returnData = new \stdClass();
        $returnData->status_code = "200";
        $returnData->message = 'Success';

        return $returnData;
    }
 
}

?>
