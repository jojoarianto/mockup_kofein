<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if ( isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
			redirect(base_url() . 'home/');
		}
	}

	public function index()
	{		
		setJsPreHeader(base_url() . 'assets/js/login.js');
		setCssPreHeader(base_url() . 'assets/css/kofein-custom.css');

		$pesan['data_pesan'] = null;
		$pesan['data_pesan'] = $this->session->flashdata('message');

		$this->load->view('pre_header');
		$this->load->view('register/index_content', $pesan);
		$this->load->view('footer');	
	}

	public function doregister()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');

		if ($this->form_validation->run() === false) {

		} else {
			// echo $this->input->post('name');
		}

		$this->session->set_flashdata('message', 'Maaf fitur register tidak tersedia pada masa simulasi');
		redirect(base_url() . 'register/');
	}

	public function doLogin()
	{
		if ($this->input->is_ajax_request()) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');

			if ($this->form_validation->run() === false) {
                echo 'Mohon isi form dengan benar';
			} else {
	            $email = $this->input->post('email');
	            $password = $this->input->post('password');

	            $this->load->model('users_model');
	            $login = $this->users_model->getMemberByEmail($email);
	            if ($login->num_rows() > 0) {
	                foreach ($login->result() as $row) {
	                    $id = $row->id;
	                    if (crypt($password, $row->salt) === $row->password) {
							$_SESSION['user_id']      	= (int)$row->id;
							$_SESSION['username']     	= (string)$row->username;
							$_SESSION['email']     		= (string)$row->email;
							$_SESSION['logged_in']    	= (bool)true;
	                        echo "login";
	                    } else {
	                        echo 'Username dan password tidak cocok';
	                    }
	                }
	            } else {
	                echo 'Username tidak tersedia';
	            }
	        }
        } else {
            show_error("No direct access allowed");
        }
	}

	public function register()
	{
		$this->load->view('pre_header');
		$this->load->view('register/index_content');
		$this->load->view('footer');	
	}
	
}
