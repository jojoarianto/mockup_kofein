<?php

class Opsi_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getOpsi() {
        $this->db->order_by("no_soal", "asc"); 
        $this->db->order_by("no_opsi", "asc"); 
        $query = $this->db->get('opsi_jawaban');

        return $query;
    }

}
