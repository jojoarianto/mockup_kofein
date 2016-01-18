<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{		
		$this->load->view('pre_header');
		$this->load->view('login/index_content');
		$this->load->view('footer');
	}

	public function register(){
		$this->load->view('pre_header');
		$this->load->view('register/index_content');
		$this->load->view('footer');	
	}

	public function home(){
		$this->load->view('pre_header');
		$this->load->view('header');
		$data_alert = [
			'type' => 'success',
			'dismiss' => true,
			'title' => 'Selamat Datang!',
			'message' => 'Try out dapat dilaksanakan pada tanggal 5 Februari 2015 pukul 08.00 WIB sampai dengan 6 Februari pukul 24.00 WIB'
		];
		$this->load->view('_alert', $data_alert);
		$this->load->view('home/index_content');
		$this->load->view('footer');
	}

	public function pengumuman_pending(){
		$this->load->view('pre_header');
		$this->load->view('header');
		$data_alert = [
			'type' => 'danger',
			'dismiss' => true,
			'title' => 'Waktu anda habis!',
			'message' => 'Waktu pengerjaan anda telah habis'
		];
		$this->load->view('_alert', $data_alert);
		$this->load->view('home/pengumuman_pending');
		$this->load->view('footer');	
	}

	public function pengumuman(){
		$this->load->view('pre_header');
		$data_header['non_aktif'] = true;
		$this->load->view('header', $data_header);
		$data_alert = [
			'type' => 'danger',
			'dismiss' => true,
			'title' => '!',
			'message' => 'Waktu pengerjaan anda telah habis'
		];
		// $this->load->view('_alert', $data_alert);
		$this->load->view('pengumuman/index_content');
		$this->load->view('footer');	
	}
}
