<?php

class Users_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getMemberByEmail($id) {
        $this->db->where('email', $id);
        $query = $this->db->get('users');
        return $query;
    }

    public function getMember($id, $password) {
        $this->db->where('email', $id);
        $this->db->where('password', $password);
        $query = $this->db->get('users');
        return $query;
    }

    public function getMemberByID($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('users');
        return $query;
    }

 //    public function isVoucherAvailable($v) {
 //        $this->db->where('id_voucher', $v);
 //        $query = $this->db->get('member');
 //        if ($query->num_rows() > 0) {
 //            return true;
 //        } else {
 //            return false;
 //        }
 //    }

 //    public function step1($id, $region, $voucher) {
 //        $data = array(
 //            'id_region' => $region,
 //            'id_voucher' => $voucher
 //        );
 //        $this->db->where('id_member', $id);
 //        $this->db->update('member', $data);
 //    }

 //    public function updatePassword($target, $pass, $salt) {
 //        $data = array(
 //            'password' => $pass,
 //            'salt' => $salt
 //        );
 //        $this->db->where('id_member', $target);
 //        $this->db->update('member', $data);
 //    }

 //    public function expirePasswordCode($code){
 //      $data = array(
 //        'expired' => '1'
 //      );
 //      $this->db->where('kode', $code);
 //      $this->db->update('reset_password', $data);
 //    }

 //    public function updateMemberKonfirmasi($target, $conf) {
 //        $data = array(
 //            'id_konfirmasi' => $conf
 //        );
 //        $this->db->where('id_member', $target);
 //        $this->db->update('member', $data);
 //    }


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

 //    public function updateStatusCetak($id){
 //    	$data = array(
 //    		'status_cetak' => "1");
 //    	$this->db->where('id_member', $id);
 //    	$this->db->update('member', $data);
	// }

 //  public function insertResetPassword($member, $kode){
 //    $data = array(
 //      'id_member' => $member,
 //      'kode' => $kode,
 //      'expired' => '0'
 //    );
 //    $this->db->insert('reset_password', $data);
 //  }

 //  public function getResetPassword($kode){
 //    $this->db->where('kode', $kode);
 //    $query = $this->db->get('reset_password');
 //    return $query;
 //  }
}
