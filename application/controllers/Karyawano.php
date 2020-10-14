<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawano extends CI_Controller {
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	if($this->session->userdata('login')!=true){
	// 		redirect(base_url('index.php/login'),'refresh');	
	// 	}
	// }
	public function index()
	{
		$data['konten']="v_karyawano";
		$this->load->model('karyawan_model');
		$data['data_karyawan']=$this->karyawan_model->get_karyawan();
		$this->load->model('jk_model');
		$data['data_jk']=$this->jk_model->get_jk();
		$this->load->model('bpjs_model');
		$data['data_bpjs']=$this->bpjs_model->get_bpjs();
		$this->load->model('level_model');
		$data['data_level']=$this->level_model->get_level();
		$this->load->model('laptop_model');
		$data['data_laptop']=$this->laptop_model->get_laptop();
		$this->load->view('template', $data, FALSE);	
	}
	

}

/* End of file Karyawan.php */
/* Location: ./application/controllers/Karyawan.php */