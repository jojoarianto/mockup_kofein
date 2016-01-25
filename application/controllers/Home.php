<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		isSessionExist();
		$this->user_id 	= $_SESSION['user_id'];
		$this->ujian_id = $this->config->item('ujian_id');
		
		setCssPreHeader(base_url() . 'assets/css/kofein-custom.css');
	}

	public function index()
	{		
		$data_alert = [
			'type' 			=> 'success',
			'dismiss' 		=> true,
			'title' 		=> 'Selamat Datang!',
			'message' 		=> 'Harap membaca tata cara try out KOFEIN 2016 terlebih dahulu sebelum melakukan try out'
		];
		$this->init($data_alert);
	}

	private function init( $data_message = null )
	{
		$this->load->model('users_model');
		$this->load->model('waktu_model');
		$this->load->model('ujian_model');

		$data['data']['user']	 	= $this->users_model->getMemberByID($this->user_id)->row();
		$data['data']['waktu'] 		= $this->waktu_model->getWaktuByUserId($this->user_id)->row();
		$data['data']['pengumuman']	= $this->ujian_model->getUjianById($this->ujian_id)->row();

		$this->load->view('pre_header');
		$this->load->view('header');
		
		$this->load->view('_alert', $data_message);
		$this->load->view('home/index_content', $data);
		$this->load->view('footer');
	}

	/*
	flowchart case for dotryout method
	-----------------------------------
	jika user sudah pernah ujian maka
		cek user.waktu_mulai < now() 
			cek user.waktu.end > now()
				then ujian
			else 
				time's up
		else 
			waktu try out belum dibuka
	ekse 
		then insert user.waktu
	----------------------------------
	*/
	public function doTryOut()
	{
		$this->load->model('waktu_model');
		$waktu = $this->waktu_model->getWaktuByUserId($this->user_id);
		if ($waktu->num_rows() > 0) {
			$waktu = $waktu->row();
			$time_now = new DateTime();
			if ( $waktu->time_start < $time_now->format('Y-m-d H:i:s') ) 
			{
				if ( $waktu->time_end > $time_now->format('Y-m-d H:i:s') ) 
				{
					redirect(base_url() . 'ujian/');
				}
				else 
				{				
					$data_alert = [
						'type' 			=> 'danger',
						'dismiss' 		=> true,
						'title' 		=> "Time's up!",
						'message' 		=> 'Sorry, waktu ujian anda telah habis'
					];
					$this->init($data_alert);
				}
			} 
			else
			{
				{				
					$data_alert = [
						'type' 			=> 'danger',
						'dismiss' 		=> true,
						'title' 		=> "Try out belum dimulai!",
						'message' 		=> 'Sorry, waktu try out belum dimulai'
					];
					$this->init($data_alert);
				}	
			}
		} else {
			$time_end = new DateTime();
			$time_end = $time_end->add(new DateInterval('PT10M'));
			$time_end = $time_end->format('Y-m-d H:i:s');
			$time_start = new DateTime();
			$time_start = $time_start->format('Y-m-d H:i:s');
			$this->waktu_model->insert( $this->user_id, $this->ujian_id, $time_start, $time_end );
			redirect(base_url() . 'ujian/');
		}
	}

	public function logout() 
	{
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
