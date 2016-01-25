<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		isSessionExist();
		$this->user_id 	= $_SESSION['user_id'];
		$this->ujian_id = $this->config->item('ujian_id');
	}

	public function index()
	{
		setJsPreHeader(base_url() . 'assets/js/icheck.js');
		setCssPreHeader(base_url() . 'assets/skins/square/blue.css');
		setJsPreHeader(base_url() . 'assets/js/ujian.js');

		$this->load->model('waktu_model');
		$this->load->model('ujian_model');

		$data['data']['waktu'] 		= $this->waktu_model->getWaktuByUserId($this->user_id)->row();
		$data['data']['ujian']		= $this->ujian_model->getUjianById($this->ujian_id)->row();

		$this->load->view('pre_header');
		$this->load->view('ujian/_header_ujian');
		$this->load->view('ujian/_head_of_paper', $data);
		$this->load->view('ujian/_soal');
		$this->load->view('footer');

		/*
		<script src="<?php echo base_url() ?>assets/js/icheck.js"></script>
	    <link href="<?php echo base_url() ?>assets/skins/square/blue.css" rel="stylesheet">
	    <script src="<?php echo base_url() ?>assets/js/ujian.js"></script>
		*/
	}

	public function tes()
	{
		$this->load->view('ujian/ujian');
	}

	// method untuk timer

	// method untuk 

}