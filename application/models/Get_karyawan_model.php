<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_karyawan_model extends CI_Model {

	public function get_karyawan()
	{
		return $this->db->get('karyawan')->result();
	}
	public function cari_get_karyawan($nama_karyawan)
	{
		return $this->db->like('nama_karyawan', $nama_karyawan)->get('karyawan')->result();
	}

	public function get_detail($id_karyawan)
	{
		return $this->db->join('laptop','laptop.id_laptop=karyawan.id_laptop')
		->join('level','level.id_level=karyawan.id_level')
		->where('id_karyawan',$id_karyawan)
		->get('karyawan')->row();
	}
}

/* End of file Get_barang_model.php */
/* Location: ./application/models/Get_barang_model.php */