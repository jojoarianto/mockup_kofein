<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();

		// for redirect if session does't exist
		if ( !isset($_SESSION['logged_in']) && $_SESSION['logged_in'] !== true) {
			redirect(base_url() . 'login/');
		}
		$this->user_id = $_SESSION['user_id'];
	}

	public function index()
	{		
		$this->load->model('users_model');
		$data['data'] = $this->users_model->getMemberByID($this->user_id)->row();

		$this->load->view('pre_header');
		$this->load->view('header');

		$data_alert = [
			'type' => 'success',
			'dismiss' => true,
			'title' => 'Selamat Datang!',
			'message' => 'Harap membaca tata cara try out KOFEIN 2016 terlebih dahulu sebelum melakukan try out'
		];
		$this->load->view('_alert', $data_alert);

		$this->load->view('home/index_content', $data);
		$this->load->view('footer');
	}

	public function logout() {
		$data = new stdClass();
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}

			echo "log out sukses";
		} else {
			redirect('/');
		}
		
	}
}
