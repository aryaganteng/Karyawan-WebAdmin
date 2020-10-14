<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Printkar extends CI_Controller {
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	if($this->session->userdata('login')!=true){
	// 		redirect(base_url('index.php/login'),'refresh');	
	// 	}
	// }
	public function index()
	{
		$data['konten']="v_printkar";
		$this->load->model('karyawan_model');
		$data['data_karyawan']=$this->karyawan_model->get_karyawan();
		$this->load->model('level_model');
		$data['data_level']=$this->level_model->get_level();
		$this->load->view('template', $data, FALSE);	
	}
	

}

/* End of file Karyawan.php */
/* Location: ./application/controllers/Karyawan.php */