<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laptop extends CI_Controller {

	public function index()
	{
		$data['konten']="v_laptop";
        $this->load->model('laptop_model');
        $data['data_laptop']=$this->laptop_model->get_laptop();
		$this->load->view('template', $data, FALSE);
	}
	public function simpan_laptop()
	{
        $this->form_validation->set_rules('nama_peminjam', 'Nama Peminjam', 'trim|required',
        array('required' => 'nama karyawan harus diisi'));
        $this->form_validation->set_rules('merk_laptop', 'Merk Laptop', 'trim|required',
        array('required' => 'merek harus diisi'));
        $this->form_validation->set_rules('sn_laptop', 'Sn Laptop', 'trim|required',
        array('required' => 'Sn Laptop harus diisi'));
        $this->form_validation->set_rules('no_aset', 'Nomor Aset', 'trim|required',
        array('required' => 'nomor aset harus diisi'));
        $this->form_validation->set_rules('tgl_pemakaian', 'Tanggal Dapat', 'trim|required',
        array('required' => 'tanggal dapat harus diisi'));
        $this->form_validation->set_rules('tgl_berakhir', 'Tanggal Akhir', 'trim|required',
        array('required' => 'tanggal akhir harus diisi'));
        $this->form_validation->set_rules('mouse', 'Mouse', 'trim|required',
        array('required' => 'Mouse harus diisi'));
        $this->form_validation->set_rules('keterangan_laptop', 'Keterangan Laptop', 'trim|required',
        array('required' => 'keterangan laptop harus diisi'));
        
		if ($this->form_validation->run() == TRUE )
		{
			$this->load->model('laptop_model', 'lpt');
			$masuk=$this->lpt->masuk_db();
			if($masuk==true){
				$this->session->set_flashdata('pesan', 'sukses masuk');
			} else{
				$this->session->set_flashdata('pesan', 'gagal masuk');
			}
			redirect(base_url('index.php/Laptop'), 'refresh');
		}
		else{
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/Laptop'), 'refresh');
		}
	}
		public function get_detail_laptop($id_laptop='')
		{
			$this->load->model('laptop_model');
			$data_detail=$this->laptop_model->detail_laptop($id_laptop);
			echo json_encode($data_detail);
		}

		public function update_laptop()
		{
			$this->form_validation->set_rules('nama_peminjam', 'Nama Peminjam', 'trim|required');
			$this->form_validation->set_rules('merk_laptop', 'Merek', 'trim|required');
			$this->form_validation->set_rules('sn_laptop', 'sn_laptop', 'trim|required');
			$this->form_validation->set_rules('no_aset', 'Nomor Aset', 'trim|required');
			$this->form_validation->set_rules('tgl_pemakaian', 'Tanggal Dapat', 'trim|required');
			$this->form_validation->set_rules('tgl_berakhir', 'Tanggal Akhir', 'trim|required');
			$this->form_validation->set_rules('mouse', 'Mouse', 'trim|required');
			$this->form_validation->set_rules('keterangan_laptop', 'Keterangan Laptop', 'trim|required');
			if ($this->form_validation->run() == FALSE ){
				$this->session->set_flashdata('pesan', validation_errors());
				redirect(base_url('index.php/Laptop'), 'refresh');
			} else{
				$this->load->model('laptop_model');
				$proses_update=$this->laptop_model->update_laptop();
				if ($proses_update) {
					$this->session->set_flashdata('pesan', 'sukses update');
				}
				else {
					$this->session->set_flashdata('pesan', 'gagal update');
				}
				redirect(base_url('index.php/Laptop'), 'refresh');
			} 
		}

		public function hapus_laptop($id_laptop)
	{
		$this->load->model('laptop_model');
		$this->laptop_model->hapus_laptop($id_laptop);
		redirect(base_url('index.php/Laptop'), 'refresh');
	}

}

/* End of file Laptop.php */
/* Location: ./application/controllers/Laptop.php */