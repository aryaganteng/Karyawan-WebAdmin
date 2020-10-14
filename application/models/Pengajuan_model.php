<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan_model extends CI_Model {

	public function get_pengajuan()
	{
		$data_pengajuan= $this->db->join('karyawan','karyawan.id_karyawan=request.id_karyawan')
		->get('request')->result();
		return $data_pengajuan;
	}

	public function masuk_db()
	{
		$data_request=array(
		'nama_request'=>$this->input->post('nama_request'),
        'jumlah_request'=>$this->input->post('jumlah_request'),
        'tgl_request'=>$this->input->post('tgl_request'),
        'id_karyawan'=>$this->input->post('id_karyawan'),
        // 'no_telp'=>$this->input->post('no_telp')
		);
		$sql_masuk = $this->db->insert('request', $data_request);
		return $sql_masuk;
	}	

}

/* End of file Pinjaman_model.php */
/* Location: ./application/models/Pinjaman_model.php */