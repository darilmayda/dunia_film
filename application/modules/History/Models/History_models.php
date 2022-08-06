<?php

class History_models extends CI_Model {
    function __construct() {
              parent::__construct();
    }

    function getHistoryFilm($data) {
        $iduser   = $data['iduser'];
        $status_sewa   = $data['status_sewa'];

        $query = $this->db->query("SELECT distinct sewa_film.status_sewa, film.harga_sewa, film.durasi, film.judul_film, film.thumbnail FROM sewa_film JOIN film WHERE sewa_film.iduser = $iduser  AND sewa_film.status_sewa = 0 AND sewa_film.idfilm=film.id");
        return $query->result();
    }
 
}

?>
