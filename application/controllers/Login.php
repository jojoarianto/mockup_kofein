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
		$this->load->view('home/index_content');
		$this->load->view('footer');
	}

	public function pengumuman_pending(){
		$this->load->view('pre_header');
		$this->load->view('header');
		$this->load->view('home/pengumuman_pending');
		$this->load->view('footer');	
	}
}
