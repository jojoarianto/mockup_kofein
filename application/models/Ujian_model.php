<?php

class Ujian_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getUjianById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('ujians');
        return $query;
    }

}
