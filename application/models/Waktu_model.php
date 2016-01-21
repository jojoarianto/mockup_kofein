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

    public function insert($user_id, $time_start, $time_end){
        $data = array(
            'user_id'       => $user_id,
            'time_start'    => $time_start,
            'time_end'      => $time_end
        );
        $this->db->insert('waktu_ujian', $data);
        return $this->db->insert_id();
    }

 //    public function insertMember($username, $email, $password, $salt, $kota, $hp) {
 //        $date = date('Y-m-d');
 //        $data = array(
 //            'id_region' => 0,
 //            'id_voucher' => 0,
 //            'id_konfirmasi' => 0,
 //            'username' => $username,
 //            'email' => $email,
 //            'password' => $password,
 //            'salt' => $salt,
 //            'kota_asal' => $kota,
 //            'join_date' => $date,
 //            'member_hp' => $hp,
 //        );
 //        $this->db->insert('member', $data);
 //    }
}
