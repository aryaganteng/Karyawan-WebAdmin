<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends CI_Controller {

	public function index()
	{
		$data['konten']="v_pengajuan";
		$this->load->model('pengajuan_model');
		$data['data_pengajuan']=$this->pengajuan_model->get_pengajuan();
		$this->load->model('karyawan_model');
		$data['data_karyawan']=$this->karyawan_model->get_karyawan();
		$this->load->view('template', $data, FALSE);	
	}
	public function simpan_pengajuan()
	{
		$this->form_validation->set_rules('nama_request', 'Nama Request', 'trim|required',
		array('required' => 'Isi permintaan anda'));
		$this->form_validation->set_rules('jumlah_request', 'Jumlah Request', 'trim|required',
		array('required'=> 'Jumlah permintaan anda harus diisi'));
		$this->form_validation->set_rules('tgl_request', 'Tanggal Request', 'trim|required',
		array('required'=> 'Tanggal harus diisi'));
		$this->form_validation->set_rules('id_karyawan', 'ID Karyawan', 'trim|required',
        array('required'=> 'Nama Karyawan harus diisi'));
        // $this->form_validation->set_rules('no_telp', 'No Telp', 'trim|required',
		// array('required'=> 'No Telp harus diisi'));

		if ($this->form_validation->run() == TRUE ) {
			$this->load->model('pengajuan_model','peng');
			$masuk=$this->peng->masuk_db();
			if($masuk==true){
				$this->session->set_flashdata('pesan','sukses masuk'); }
			} else{
				$this->session->set_flashdata('pesan', 'gagal masuk');
			}
			redirect(base_url('index.php/pengajuan'),'refresh');
		
	}
}

/* End of file pinjaman.php */
/* Location: ./application/controllers/pinjaman.php */