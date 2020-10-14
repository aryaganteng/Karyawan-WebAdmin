<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjaman extends CI_Controller {

	public function index()
	{
		$data['konten']="v_pinjaman";
		$this->load->model('pinjaman_model');
		$data['data_pinjaman']=$this->pinjaman_model->get_pinjaman();
		$this->load->model('karyawan_model');
		$data['data_karyawan']=$this->karyawan_model->get_karyawan();
		$this->load->view('template', $data, FALSE);	
	}
	public function simpan_pinjaman()
	{
		$this->form_validation->set_rules('id_karyawan', 'Id Karyawan', 'trim|required',
		array('required' => 'Nama Karyawan harus diisi'));
		$this->form_validation->set_rules('nama_barang', 'Nama Barang', 'trim|required',
		array('required'=> 'Nama Barang harus diisi'));
		$this->form_validation->set_rules('tgl_pinjam', 'Tanggal Pinjam', 'trim|required',
		array('required'=> 'Tanggal Pinjam harus diisi'));
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required',
		array('required'=> 'Jumlah harus diisi'));

		if ($this->form_validation->run() == TRUE ) {
			$this->load->model('pinjaman_model','pin');
			$masuk=$this->pin->masuk_db();
			if($masuk==true){
				$this->session->set_flashdata('pesan','sukses masuk'); }
			} else{
				$this->session->set_flashdata('pesan', 'gagal masuk');
			}
			redirect(base_url('index.php/pinjaman'),'refresh');
		
	}
	public function update_pinjaman(){
		$this->form_validation->set_rules('id_karyawan', 'Id Karyawan', 'trim|required');
		$this->form_validation->set_rules('nama_barang', 'Nama Barang', 'trim|required');
		$this->form_validation->set_rules('tgl_pinjam', 'tgl_pinjam', 'trim|required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required');
		if ($this->form_validation->run()==FALSE) {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/pinjaman'),'refresh');
		}else{
			$this->load->model('pinjaman_model');
			$proses_update=$this->pinjaman_model->update_pinjaman();
			if($proses_update){
				$this->session->set_flashdata('pesan', 'sukses update');
			}
			else{
				$this->session->set_flashdata('pesan', 'gagal update');
			}
			redirect(base_url('index.php/pinjaman'),'refresh');
		}
	}
	public function detail_pinjaman($id_pinjaman='')
	{
		$this->load->model('pinjaman_model');
		$data_detail=$this->pinjaman_model->detail_pinjaman($id_pinjaman);
		echo json_encode($data_detail);
	}
	public function deletePinjaman($id_pinjaman)
	{
		$this->load->model('pinjaman_model');
		$prosesDelete = $this->pinjaman_model->delete_pinjaman($id_pinjaman);

		if ($prosesDelete == TRUE) {
			$this->session->flashdata('pesan', 'Sukses Hapus Data');
		}else{
			$this->session->flashdata('pesan','Gagal Hapus Data');
		}
		redirect(base_url('index.php/pinjaman'),'refresh');
	}

}

/* End of file pinjaman.php */
/* Location: ./application/controllers/pinjaman.php */