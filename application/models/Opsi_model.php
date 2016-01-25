<?php

class Opsi_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getOpsi() {
        $query = $this->db->get('opsi_jawaban');
        return $query;
    }

}
