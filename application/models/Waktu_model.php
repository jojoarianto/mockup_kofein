<?php

class Waktu_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getWaktuByUserId($id) {
        $this->db->where('user_id', $id);
        $query = $this->db->get('waktu_ujian');
        return $query;
    }

    public function insert($user_id, $ujian_id, $time_start, $time_end){
        $data = array(
            'user_id'       => $user_id,
            'time_start'    => $time_start,
            'time_end'      => $time_end,
            'ujian_id'      => $ujian_id
        );
        $this->db->insert('waktu_ujian', $data);
        return $this->db->insert_id();
    }

}
