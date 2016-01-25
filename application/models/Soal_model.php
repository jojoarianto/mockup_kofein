<?php

class Soal_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getSoal() {
        $query = $this->db->get('soals');
        return $query;
    }

}
