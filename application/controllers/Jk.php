<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login')!=true){
			redirect(base_url('index.php/login'),'refresh');	
		}
	}
	public function index()
	{
		$data['konten']="v_jk";
		$this->load->model('jk_model');
		$data['data_jk']=$this->jk_model->get_jk();
		$this->load->view('template', $data, FALSE);
	}
	public function simpan_jk()
	{
		$this->form_validation->set_rules('nama_jk', 'Nama_Jk', 'trim|required',
		array('required' => 'nama jk harus diisi'));
		if ($this->form_validation->run() == TRUE ) {
			$this->load->model('jk_model','j');
			$masuk=$this->j->masuk_db();
			if($masuk==true){
				$this->session->set_flashdata('pesan','sukses masuk');
			} else{
				$this->session->set_flashdata('pesan', 'gagal masuk');
			}
			redirect(base_url('index.php/jk'),'refresh');
		} else {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/jk'), 'refresh');
		}
	}

}

/* End of file Jk.php */
/* Location: ./application/controllers/Jk.php */