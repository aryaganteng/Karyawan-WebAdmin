<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newkar extends CI_Controller {
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	if($this->session->userdata('login')!=true){
	// 		redirect(base_url('index.php/login'),'refresh');	
	// 	}
	// }
	public function index()
	{
		$data['konten']="v_karyawan";
		$this->load->model('karyawan_model');
		$data['data_karyawan']=$this->karyawan_model->get_karyawan();
		$this->load->model('level_model');
		$data['data_level']=$this->level_model->get_level();
		$this->load->model('laptop_model');
		$data['data_laptop']=$this->laptop_model->get_laptop();
		$this->load->view('template', $data, FALSE);	
	}
	public function simpan_karyawan()
	{
		$this->form_validation->set_rules('nik', 'Nik', 'trim|required',
		array('required' => 'Nik harus diisi'));
		$this->form_validation->set_rules('nama_karyawan', 'Nama_karyawan', 'trim|required',
		array('required' => 'Nama harus diisi'));
		// $this->form_validation->set_rules('gambar', 'Gambar', 'trim|required',
		// array('required' => 'Foto harus diisi'));
		$this->form_validation->set_rules('level', 'Level', 'trim|required',
		array('required' => 'Level harus diisi'));
		$this->form_validation->set_rules('status', 'Status', 'trim|required',
		array('required' => 'Status harus diisi'));
		$this->form_validation->set_rules('kontrak', 'Kontrak', 'trim|required',
		array('required' => 'Kontrak harus diisi'));
		$this->form_validation->set_rules('regional', 'Regional', 'trim|required',
		array('required' => 'Regional harus diisi'));
		// $this->form_validation->set_rules('tgl_kontrak', 'Tgl_Kontrak', 'trim|required',
		// array('required' => 'Tanggal Kontrak harus diisi'));
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required',
		array('required' => 'Keterangan harus diisi'));
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required',
		array('required' => 'Jabatan harus diisi'));
		$this->form_validation->set_rules('email', 'Email', 'trim|required',
		array('required' => 'Email harus diisi'));
		$this->form_validation->set_rules('no_telp', 'No_telp', 'trim|required',
		array('required' => 'No Telp harus diisi'));
		$this->form_validation->set_rules('pendidikan', 'Pendidikan', 'trim|required',
		array('required' => 'Pendidikan harus diisi'));
		$this->form_validation->set_rules('agama', 'Agama', 'trim|required',
		array('required' => 'Agama harus diisi'));
		// $this->form_validation->set_rules('tgl_lahir', 'Tgl_lahir', 'trim|required',
		// array('required' => 'Tanggal Lahir harus diisi'));
		$this->form_validation->set_rules('pkwt', 'Pkwt', 'trim|required',
		array('required' => 'PKWT harus diisi'));
		$this->form_validation->set_rules('perpanjangan_pkwt', 'Perpanjangan_pkwt', 'trim|required',
		array('required' => 'Perpanjangan harus diisi'));
		$this->form_validation->set_rules('amandemen', 'Amandemen', 'trim|required',
		array('required' => 'Amandemen harus diisi'));
		// $this->form_validation->set_rules('start_kontrak', 'Start_kontrak', 'trim|required',
		// array('required' => 'Start kontrak harus diisi'));
		// $this->form_validation->set_rules('finish_kontrak', 'Finsih_kontrak', 'trim|required',
		// array('required' => 'Finish Kontral harus diisi'));
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required',
		array('required' => 'Alamat harus diisi'));
		// $this->form_validation->set_rules('merk_laptop', 'Merk_laptop', 'trim|required',
		// array('required' => 'Merk harus diisi'));
		$this->form_validation->set_rules('aset_komitel', 'Aset_komitel', 'trim|required',
		array('required' => 'Aset Komitel harus diisi'));
		$this->form_validation->set_rules('id_komitel', 'Id_komitel', 'trim|required',
		array('required' => 'ID Komitel harus diisi'));
		$this->form_validation->set_rules('id_laptop', 'Id_laptop', 'trim|required',
		array('required' => 'ID Laptop harus diisi'));
		// $this->form_validation->set_rules('sn_laptop', 'Sn_laptop', 'trim|required',
		// array('required' => 'S/N Laptop harus diisi'));
		// $this->form_validation->set_rules('tgl_pemakaian', 'Tgl_pemakaian', 'trim|required',
		// array('required' => 'Tanggal pemakaian harus diisi'));
		$this->form_validation->set_rules('perusahaan_sewa', 'Perusahaan_sewa', 'trim|required',
		array('required' => 'Perusahan Sewa harus diisi'));
		// $this->form_validation->set_rules('keterangan_laptop', 'Keterangan_laptop', 'trim|required',
		// array('required' => 'Keterangan laptop harus diisi'));
		$this->form_validation->set_rules('yakes', 'Yakes', 'trim|required',
		array('required' => 'Yakesn harus diisi'));
		$this->form_validation->set_rules('bpjs_kesehatan', 'Bpjs_kesehatan', 'trim|required',
		array('required' => 'BPJS Kesehatan harus diisi'));
		$this->form_validation->set_rules('bpjs_ketenagakerjaan', 'Bpjs_ketenagakerjaan', 'trim|required',
		array('required' => 'BPJS Ketenagakerjaan harus diisi'));
		$this->form_validation->set_rules('username', 'Username', 'trim|required',
		array('required' => 'Username harus diisi'));
		$this->form_validation->set_rules('password', 'Password', 'trim|required',
		array('required' => 'Password harus diisi'));
		$this->form_validation->set_rules('id_level', 'Id_level', 'trim|required',
		array('required' => 'Id_level harus diisi'));

		if ($this->form_validation->run() == TRUE ) {
			$this->load->model('karyawan_model','kar');
			$masuk=$this->kar->masuk_db();
			if($masuk==true){
				$this->session->set_flashdata('pesan','sukses masuk'); }
			} else{
				$this->session->set_flashdata('pesan', 'gagal masuk');
			}
			redirect(base_url('index.php/karyawan'),'refresh');
		
	}
	public function update_karyawan(){
		$this->form_validation->set_rules('nik', 'Nik', 'trim|required');
		$this->form_validation->set_rules('nama_karyawan', 'Nama_Karyawan', 'trim|required');
		$this->form_validation->set_rules('gambar', 'Gambar', 'trim|required');
		$this->form_validation->set_rules('level', 'Level', 'trim|required');
		$this->form_validation->set_rules('pendidikan', 'Pendidikan', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');
		$this->form_validation->set_rules('kontrak', 'Kontrak', 'trim|required');
		$this->form_validation->set_rules('regional', 'Regional', 'trim|required');
		// $this->form_validation->set_rules('tgl_kontrak', 'Tgl_kontrak', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('no_telp', 'No_telp', 'trim|required');
		$this->form_validation->set_rules('pendidikan', 'Pendidikan', 'trim|required');
		$this->form_validation->set_rules('agama', 'Agama', 'trim|required');
		// $this->form_validation->set_rules('tgl_lahir', 'Tgl_lahir', 'trim|required');
		$this->form_validation->set_rules('pkwt', 'Pkwt', 'trim|required');
		$this->form_validation->set_rules('perpanjangan_pkwt', 'Perpanjangan_pkwt', 'trim|required');
		$this->form_validation->set_rules('amandemen', 'Amandemen', 'trim|required');
		// $this->form_validation->set_rules('start_kontrak', 'Start_kontrak', 'trim|required');
		// $this->form_validation->set_rules('finish_kontrak', 'Finish_kontrak', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		// $this->form_validation->set_rules('merk_laptop', 'Merk_laptop', 'trim|required');
		$this->form_validation->set_rules('aset_komitel', 'Aset_komitel', 'trim|required');
		$this->form_validation->set_rules('id_komitel', 'Id_komitel', 'trim|required');
		$this->form_validation->set_rules('id_laptop', 'Id_laptop', 'trim|required');
		// $this->form_validation->set_rules('sn_laptop', 'Sn_laptop', 'trim|required');
		// $this->form_validation->set_rules('tgl_pemakaian', 'Tgl_pemakaian', 'trim|required');
		$this->form_validation->set_rules('perusahaan_sewa', 'Perusahaan_sewa', 'trim|required');
		// $this->form_validation->set_rules('keterangan_laptop', 'Keterangan_laptop', 'trim|required');
		$this->form_validation->set_rules('yakes', 'Yakes', 'trim|required');
		$this->form_validation->set_rules('bpjs_kesehatan', 'Bpjs_kesehatan', 'trim|required');
		$this->form_validation->set_rules('bpjs_ketenagakerjaan', 'Bpjs_ketenagakerjaan', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('id_level', 'Level', 'trim|required');
		if ($this->form_validation->run()==FALSE) {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/karyawan'),'refresh');
		}else{
			$this->load->model('karyawan_model');
			$proses_update=$this->karyawan_model->update_karyawan();
			if($proses_update){
				$this->session->set_flashdata('pesan', 'sukses update');
			}
			else{
				$this->session->set_flashdata('pesan', 'gagal update');
			}
			redirect(base_url('index.php/karyawan'),'refresh');
		}
	}
	public function detail_karyawan($id_karyawan='')
	{
		$this->load->model('karyawan_model');
		$data_detail=$this->karyawan_model->detail_karyawan($id_karyawan);
		echo json_encode($data_detail);
	}
	public function deleteKaryawan($id_karyawan)
	{
		$this->load->model('karyawan_model');
		$prosesDelete = $this->karyawan_model->delete_karyawan($id_karyawan);

		if ($prosesDelete == TRUE) {
			$this->session->flashdata('pesan', 'Sukses Hapus Data');
		}else{
			$this->session->flashdata('pesan','Gagal Hapus Data');
		}
		redirect(base_url('index.php/karyawan'),'refresh');
	}

}

/* End of file Karyawan.php */
/* Location: ./application/controllers/Karyawan.php */