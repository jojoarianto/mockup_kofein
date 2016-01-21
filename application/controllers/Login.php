<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index()
	{		
		$this->load->view('pre_header');
		$this->load->view('login/index_content');
		$this->load->view('footer');
	}

	public function doLogin(){
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

	public function register(){
		$this->load->view('pre_header');
		$this->load->view('register/index_content');
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

	public function logout() {
		// create the data object
		$data = new stdClass();
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}
			// user logout ok
			// $this->load->view('header');
			// $this->load->view('user/logout/logout_success', $data);
			// $this->load->view('footer');
			echo "log out sukses";
		} else {
			// there user was not logged in, we cannot logged him out,
			// redirect him to site root
			redirect('/');
			
		}
		
	}
}
