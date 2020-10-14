<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('login_model');
}
public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
			redirect('template');
		}
		else{
			$this->load->view('v_login');
		}
	}
	public function proses_login()
	{
		if($this->session->userdata('logged_in') == FALSE){
			$this->form_validation->set_rules('username','username','trim|required');
			$this->form_validation->set_rules('password','password','trim|required');

			if($this->form_validation->run() == TRUE) {
				if ($this->login_model->cek_login() == TRUE) {
					redirect('template');
				}else{
					$this->session->set_flashdata('pesan','Login Gagal');
					redirect('login');
				}
			}else{
				$this->session->set_flashdata('pesan',validation_errors());
				redirect('login');
			}
		}else{
			redirect('index.php/template');
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */