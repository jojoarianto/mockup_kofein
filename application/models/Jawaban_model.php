<?php

class Jawaban_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getJawaban($id_user, $no_soal){
    	$this->db->where('id_user', $id_user);
    	$this->db->where('no_soal', $no_soal);
    	$query = $this->db->get('jawaban_user');
    	return $query;
    }

    public function insertJawaban($id_user, $no_soal, $no_opsi) {
    	$data = array(
    		'id_user'	=> $id_user,
    		'no_soal'	=> $no_soal,
    		'no_opsi'	=> $no_opsi,
    		'is_delete'	=> 0,
    		'status'	=> 0
    		);
    	$this->db->insert('jawaban_user', $data);
    }

    public function updateJawaban($id_user, $no_soal, $no_opsi) {
    	$data = array(
    		'no_opsi'	=> $no_opsi,
    		'is_delete'	=> 0,
    		'status'	=> 0
    		);
    	$this->db->where('id_user', $id_user);
    	$this->db->where('no_soal', $no_soal);
    	$this->db->update('jawaban_user', $data);
    }

}
