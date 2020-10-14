<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_model extends CI_Model {

	public function get_karyawan()
	{
		$data_karyawan= $this->db->join('laptop','laptop.id_laptop=karyawan.id_laptop')
		->join('level','level.id_level=karyawan.id_level')
		->get('karyawan')->result();
		return $data_karyawan;
	}
	public function masuk_db()
	{
		$config['upload_path'] = './assets/gambar';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '1000000';
		$config['max_width']  = '102400';
		$config['max_height']  = '768000';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('gambar')){
			$this->session->set_flashdata('pesan', $this->upload->display_errors());
			return false;
		}
		else{
			$data_karyawan=array(
	'nik'=>$this->input->post('nik'),
	'nik_tg'=>$this->input->post('nik_tg'),
	'nama_karyawan'=>$this->input->post('nama_karyawan'),
	'gambar'=>$this->upload->data('file_name'),
	'level'=>$this->input->post('level'),
	'status'=>$this->input->post('status'),
	'kontrak'=>$this->input->post('kontrak'),
	'regional'=>$this->input->post('regional'),
	'tgl_kontrak'=>$this->input->post('tgl_kontrak'),
	'keterangan'=>$this->input->post('keterangan'),
	'jabatan'=>$this->input->post('jabatan'),
	'email'=>$this->input->post('email'),
	'no_telp'=>$this->input->post('no_telp'),
	'pendidikan'=>$this->input->post('pendidikan'),
	'agama'=>$this->input->post('agama'),
	'tgl_lahir'=>$this->input->post('tgl_lahir'),
	'pkwt'=>$this->input->post('pkwt'),
	'perpanjangan_pkwt'=>$this->input->post('perpanjangan_pkwt'),
	'amandemen'=>$this->input->post('amandemen'),
	'start_kontrak'=>$this->input->post('start_kontrak'),
	'finish_kontrak'=>$this->input->post('finish_kontrak'),
	'alamat'=>$this->input->post('alamat'),
	// 'merk_laptop'=>$this->input->post('merk_laptop'),
	'aset_komitel'=>$this->input->post('aset_komitel'),
	// 'no_aset'=>$this->input->post('no_aset'),
	// 'id_komitel'=>$this->input->post('id_komitel'),
	'id_laptop'=>$this->input->post('id_laptop'),
	// 'sn_laptop'=>$this->input->post('sn_laptop'),
	// 'tgl_pemakaian'=>$this->input->post('tgl_pemakaian'),
	'perusahaan_sewa'=>$this->input->post('perusahaan_sewa'),
	// 'keterangan_laptop'=>$this->input->post('keterangan_laptop'),
	'yakes'=>$this->input->post('yakes'),
	'bpjs_kesehatan'=>$this->input->post('bpjs_kesehatan'),
	'bpjs_ketenagakerjaan'=>$this->input->post('bpjs_ketenagakerjaan'),
	'username'=>$this->input->post('username'),
	'password'=>$this->input->post('password'),
	'id_level'=>$this->input->post('id_level')
		);
		$sql_masuk = $this->db->insert('karyawan', $data_karyawan);
		return $sql_masuk;
		}
		
	}	
	public function detail_karyawan($id_karyawan){
		return $this->db->where('id_karyawan', $id_karyawan)->get('karyawan')->row();
	}
		public function update_karyawan($value='')
	{
		$nama_gambar=$_FILES['gambar']['name'];
		if($nama_gambar!=""){
			$config['upload_path'] = './assets/gambar';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '100000';
			$config['max_width']  = '1024000';
			$config['max_height']  = '768000';
		
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('gambar')){
				$this->session->set_flashdata('pesan', $this->upload->display_errors());
				return false;
			}
			else{
				$dt_up_karyawan=array(
					'nik'=>$this->input->post('nik'),
					'nik_tg'=>$this->input->post('nik_tg'),
					'nama_karyawan'=>$this->input->post('nama_karyawan'),
					'gambar'=>$this->upload->data('file_name'),
					'level'=>$this->input->post('level'),
					'status'=>$this->input->post('status'),
					'kontrak'=>$this->input->post('kontrak'),
					'regional'=>$this->input->post('regional'),
					'tgl_kontrak'=>$this->input->post('tgl_kontrak'),
					'keterangan'=>$this->input->post('keterangan'),
					'jabatan'=>$this->input->post('jabatan'),
					'email'=>$this->input->post('email'),
					'no_telp'=>$this->input->post('no_telp'),
					'pendidikan'=>$this->input->post('pendidikan'),
					'agama'=>$this->input->post('agama'),
					'tgl_lahir'=>$this->input->post('tgl_lahir'),
					'pkwt'=>$this->input->post('pkwt'),
					'perpanjangan_pkwt'=>$this->input->post('perpanjangan_pkwt'),
					'amandemen'=>$this->input->post('amandemen'),
					'start_kontrak'=>$this->input->post('start_kontrak'),
					'finish_kontrak'=>$this->input->post('finish_kontrak'),
					'alamat'=>$this->input->post('alamat'),
					// 'merk_laptop'=>$this->input->post('merk_laptop'),
					'aset_komitel'=>$this->input->post('aset_komitel'),
					// 'no_aset'=>$this->input->post('no_aset'),
					// 'id_komitel'=>$this->input->post('id_komitel'),
					'id_laptop'=>$this->input->post('id_laptop'),
					// 'sn_laptop'=>$this->input->post('sn_laptop'),
					// 'tgl_pemakaian'=>$this->input->post('tgl_pemakaian'),
					'perusahaan_sewa'=>$this->input->post('perusahaan_sewa'),
					// 'keterangan_laptop'=>$this->input->post('keterangan_laptop'),
					'yakes'=>$this->input->post('yakes'),
					'bpjs_kesehatan'=>$this->input->post('bpjs_kesehatan'),
					'bpjs_ketenagakerjaan'=>$this->input->post('bpjs_ketenagakerjaan'),
					'username'=>$this->input->post('username'),
					'password'=>$this->input->post('password'),
					'id_level'=>$this->input->post('id_level')
		);
		return $this->db->where('id_karyawan',$this->input->post('id_karyawan'))->update('karyawan', $dt_up_karyawan);
	}
		}
		else{
				$dt_up_karyawan=array(
					'nik'=>$this->input->post('nik'),
					'nik_tg'=>$this->input->post('nik_tg'),
					'nama_karyawan'=>$this->input->post('nama_karyawan'),
					// 'gambar'=>$this->upload->data('file_name'),
					'level'=>$this->input->post('level'),
					'status'=>$this->input->post('status'),
					'kontrak'=>$this->input->post('kontrak'),
					'regional'=>$this->input->post('regional'),
					'tgl_kontrak'=>$this->input->post('tgl_kontrak'),
					'keterangan'=>$this->input->post('keterangan'),
					'jabatan'=>$this->input->post('jabatan'),
					'email'=>$this->input->post('email'),
					'no_telp'=>$this->input->post('no_telp'),
					'pendidikan'=>$this->input->post('pendidikan'),
					'agama'=>$this->input->post('agama'),
					'tgl_lahir'=>$this->input->post('tgl_lahir'),
					'pkwt'=>$this->input->post('pkwt'),
					'perpanjangan_pkwt'=>$this->input->post('perpanjangan_pkwt'),
					'amandemen'=>$this->input->post('amandemen'),
					'start_kontrak'=>$this->input->post('start_kontrak'),
					'finish_kontrak'=>$this->input->post('finish_kontrak'),
					'alamat'=>$this->input->post('alamat'),
					'merk_laptop'=>$this->input->post('merk_laptop'),
					'aset_komitel'=>$this->input->post('aset_komitel'),
					'no_aset'=>$this->input->post('no_aset'),
					// 'id_komitel'=>$this->input->post('id_komitel'),
					'id_laptop'=>$this->input->post('id_laptop'),
					'sn_laptop'=>$this->input->post('sn_laptop'),
					'tgl_pemakaian'=>$this->input->post('tgl_pemakaian'),
					'perusahaan_sewa'=>$this->input->post('perusahaan_sewa'),
					'keterangan_laptop'=>$this->input->post('keterangan_laptop'),
					'yakes'=>$this->input->post('yakes'),
					'bpjs_kesehatan'=>$this->input->post('bpjs_kesehatan'),
					'bpjs_ketenagakerjaan'=>$this->input->post('bpjs_ketenagakerjaan'),
					'username'=>$this->input->post('username'),
					'password'=>$this->input->post('password'),
					'id_level'=>$this->input->post('id_level')
		);
		return $this->db->where('id_karyawan',$this->input->post('id_karyawan'))->update('karyawan', $dt_up_karyawan);
	}
		}
	public function delete_karyawan($id_karyawan)
	{
		$delete = $this->db->where('id_karyawan',$id_karyawan)->delete('karyawan');
		return $delete;
	}
}

/* End of file kategori_model.php */
/* Location: ./application/models/kategori_model.php */