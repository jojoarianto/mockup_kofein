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
		// $this->output->enable_profiler(TRUE);

		setJsPreHeader(base_url() . 'assets/js/icheck.js');
		setCssPreHeader(base_url() . 'assets/skins/square/blue.css');
		setJsPreHeader(base_url() . 'assets/js/ujian.js');

		$this->load->model('waktu_model');
		$this->load->model('ujian_model');
		$this->load->model('soal_model');
		$this->load->model('opsi_model');

		$data['data']['waktu'] 		= $this->waktu_model->getWaktuByUserId($this->user_id)->row();
		$data['data']['ujian']		= $this->ujian_model->getUjianById($this->ujian_id)->row();
		$soal['data']['soal']		= $this->soal_model->getSoal()->result();
		$soal['data']['opsi']		= $this->opsi_model->getOpsi();

		$opsi = array();
		foreach ($soal['data']['opsi']->result() as $row) {
			$opsi[ $row->no_soal ][ $row->no_opsi ] 	= $row->isi;
		}
		$soal['data']['opsi'] = $opsi;

		$this->load->view('pre_header');
		$this->load->view('ujian/_header_ujian');
		$this->load->view('ujian/_head_of_paper', $data);
		$this->load->view('ujian/_soal', $soal);
		$this->load->view('footer');
	}

	public function tes()
	{
		$this->load->view('ujian/ujian');
	}

	// method untuk timer

	public function save_jawaban()
	{
		if ($this->input->is_ajax_request()) {
			$soal = $this->input->post('no_soal');
			$opsi = $this->input->post('no_opsi');

			$this->load->library('form_validation');
			$this->form_validation->set_rules('no_soal', 'no_soal', 'xss_clean|required|numeric');
			$this->form_validation->set_rules('no_opsi', 'no_opsi', 'xss_clean|required|numeric');

			$this->load->model('jawaban_model');
			$query = $this->jawaban_model->getJawaban($this->user_id, $soal);
			if ($query->num_rows() > 0) {
				$this->jawaban_model->updateJawaban($this->user_id, $soal, $opsi);
			} else {
				$this->jawaban_model->insertJawaban($this->user_id, $soal, $opsi);
			}
			echo "success";
		} else {
            show_error("No direct access allowed");
        }
	}

	public function render_butir_terjawab()
	{
		if ($this->input->is_ajax_request()) {
			$this->load->model('jawaban_model');
			echo $this->jawaban_model->getCountTerjawab($this->user_id);
		} else {
            show_error("No direct access allowed");
        }
	}

	
	public function get_all_jawaban_user()
	{
		if ($this->input->is_ajax_request()) {
			$this->load->model('jawaban_model');
			$query = $this->jawaban_model->getJawabanUser($this->user_id)->result_array();
			
			echo json_encode($query); 
		} else {
            show_error("No direct access allowed");
        }
	}

}