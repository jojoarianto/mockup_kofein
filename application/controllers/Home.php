<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();

		// for redirect if session does't exist
		if ( !isset($_SESSION['logged_in']) && $_SESSION['logged_in'] !== true) {
			redirect(base_url() . 'login/');
		}
		$this->user_id 	= $_SESSION['user_id'];
		$this->ujian_id = $this->config->item('ujian_id');
	}

	public function index()
	{		
		$this->load->model('users_model');
		$this->load->model('waktu_model');
		$this->load->model('ujian_model');

		$data['data']['user']	 	= $this->users_model->getMemberByID($this->user_id)->row();
		$data['data']['waktu'] 		= $this->waktu_model->getWaktuByUserId($this->user_id)->row();
		$data['data']['pengumuman']	= $this->ujian_model->getUjianById($this->ujian_id)->row();

		$this->load->view('pre_header');
		$this->load->view('header');
		$data_alert = [
			'type' 			=> 'success',
			'dismiss' 		=> true,
			'title' 		=> 'Selamat Datang!',
			'message' 		=> 'Harap membaca tata cara try out KOFEIN 2016 terlebih dahulu sebelum melakukan try out'
		];
		$this->load->view('_alert', $data_alert);
		$this->load->view('home/index_content', $data);
		$this->load->view('footer');
	}

	public function doTryOut(){
		$this->load->model('waktu_model');
		$waktu = $this->waktu_model->getWaktuByUserId($this->user_id);
		if ($waktu->num_rows() > 0) {
			$waktu = $waktu->row();
			// echo "ada " . $waktu->time_start;
			echo indonesian_date ($waktu->time_start, 'j M Y | H:i', 'WIB');
		} else {
			$time_end = new DateTime();
			$time_end = $time_end->add(new DateInterval('PT10M'));
			$time_end = $time_end->format('Y-m-d H:i:s');
			
			$time_start = new DateTime();
			$time_start = $time_start->format('Y-m-d H:i:s');
		
			echo $this->waktu_model->insert($this->user_id, $time_start, $time_end);
		}
	}

	public function logout() {
		$data = new stdClass();
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}

			redirect('/');
		} else {
			redirect('/');
		}
		
	}

}
