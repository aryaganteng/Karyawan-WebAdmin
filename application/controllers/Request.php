<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller {

	public function index()
	{
		$data['konten']="v_request";
		$this->load->model('request_model');
		$data['data_request']=$this->request_model->get_request();
		$this->load->model('karyawan_model');
		$data['data_karyawan']=$this->karyawan_model->get_karyawan();
		$this->load->view('template', $data, FALSE);	
	}
	public function simpan_request()
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
			$this->load->model('request_model','req');
			$masuk=$this->req->masuk_db();
			if($masuk==true){
				$this->session->set_flashdata('pesan','sukses masuk'); }
			} else{
				$this->session->set_flashdata('pesan', 'gagal masuk');
			}
			redirect(base_url('index.php/request'),'refresh');
		
	}
	public function update_request(){
		$this->form_validation->set_rules('nama_request', 'Nama Request', 'trim|required');
		$this->form_validation->set_rules('jumlah_request', 'Jumlah Request', 'trim|required');
		$this->form_validation->set_rules('tgl_request', 'Tanggal Request', 'trim|required');
        $this->form_validation->set_rules('id_karyawan', 'ID Karyawan', 'trim|required');
        // $this->form_validation->set_rules('no_telp', 'No Telp', 'trim|required');
		if ($this->form_validation->run()==FALSE) {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/request'),'refresh');
		}else{
			$this->load->model('request_model');
			$proses_update=$this->request_model->update_request();
			if($proses_update){
				$this->session->set_flashdata('pesan', 'sukses update');
			}
			else{
				$this->session->set_flashdata('pesan', 'gagal update');
			}
			redirect(base_url('index.php/request'),'refresh');
		}
	}
	public function detail_request($id_request='')
	{
		$this->load->model('request_model');
		$data_detail=$this->request_model->detail_request($id_request);
		echo json_encode($data_detail);
	}
	public function deleteRequest($id_request)
	{
		$this->load->model('request_model');
		$prosesDelete = $this->request_model->delete_request($id_request);

		if ($prosesDelete == TRUE) {
			$this->session->flashdata('pesan', 'Sukses Hapus Data');
		}else{
			$this->session->flashdata('pesan','Gagal Hapus Data');
		}
		redirect(base_url('index.php/request'),'refresh');
	}

}

/* End of file pinjaman.php */
/* Location: ./application/controllers/pinjaman.php */