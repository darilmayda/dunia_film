<?php

class Detail_models extends CI_Model {
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

    function InsertSewa($data){
        $insertedValue['iduser'] = $data['iduser'];
        $insertedValue['idfilm'] = $data['idfilm'];
        $insertedValue['status_sewa'] = $data['status_sewa'];

        $this->db->trans_start();
        $this->db->insert('sewa_film', $insertedValue);
        $this->db->trans_complete();

        $returnData = new \stdClass();
        $returnData->status_code = "200";
        $returnData->message = 'Success';

        return $returnData;
    }

    function getFilmBystatus($data) {
        $idfilm   = $data['id'];
        $query = $this->db->query("SELECT sf.* FROM sewa_film sf JOIN film f on sf.idfilm = f.id WHERE sf.status_sewa = 1 AND f.id=$idfilm;");
        return $query->result();
    }
 
}

?>
