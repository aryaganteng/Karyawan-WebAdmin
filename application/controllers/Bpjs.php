<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bpjs extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login')!=true){
			redirect(base_url('index.php/login'),'refresh');	
		}
	}
	public function index()
	{
		$data['konten']="v_bpjs";
		$this->load->model('bpjs_model');
		$data['data_bpjs']=$this->bpjs_model->get_bpjs();
		$this->load->view('template', $data, FALSE);
	}
	public function simpan_bpjs()
	{
		$this->form_validation->set_rules('nama_bpjs', 'Nama_Bpjs', 'trim|required',
		array('required' => 'nama bpjs harus diisi'));
		if ($this->form_validation->run() == TRUE ) {
			$this->load->model('bpjs_model','bp');
			$masuk=$this->bp->masuk_db();
			if($masuk==true){
				$this->session->set_flashdata('pesan','sukses masuk');
			} else{
				$this->session->set_flashdata('pesan', 'gagal masuk');
			}
			redirect(base_url('index.php/bpjs'),'refresh');
		} else {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/bpjs'), 'refresh');
		}
	}

}

/* End of file Bpjs.php */
/* Location: ./application/controllers/Bpjs.php */