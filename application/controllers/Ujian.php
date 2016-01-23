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
		echo "page ujian ";
		$this->load->view('ujian/ujian');
	}

	// method untuk timer

	// method untuk 

}
