<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjaman_model extends CI_Model {

	public function get_pinjaman()
	{
		$data_pinjaman= $this->db->join('karyawan','karyawan.id_karyawan=pinjaman.id_karyawan')
		->get('pinjaman')->result();
		return $data_pinjaman;
	}

	public function masuk_db()
	{
		$data_pinjaman=array(
		'id_karyawan'=>$this->input->post('id_karyawan'),
		'nama_barang'=>$this->input->post('nama_barang'),
		'tgl_pinjam'=>$this->input->post('tgl_pinjam'),
		'jumlah'=>$this->input->post('jumlah')
		);
		$sql_masuk = $this->db->insert('pinjaman', $data_pinjaman);
		return $sql_masuk;
	}	
	public function detail_pinjaman($id_pinjaman){
		return $this->db->where('id_pinjaman', $id_pinjaman)->get('pinjaman')->row();
	}
	public function update_pinjaman()
	{
		$dt_up_pinjaman=array(
		'id_karyawan'=>$this->input->post('id_karyawan'),
		'nama_barang'=>$this->input->post('nama_barang'),
		'tgl_pinjam'=>$this->input->post('tgl_pinjam'),
		'jumlah'=>$this->input->post('jumlah')
		);
		return $this->db->where('id_pinjaman',$this->input->post('id_pinjaman'))->update('pinjaman', $dt_up_pinjaman);
	}
	public function delete_pinjaman($id_pinjaman)
	{
		$delete = $this->db->where('id_pinjaman',$id_pinjaman)->delete('pinjaman');
		return $delete;
	}
}

/* End of file Pinjaman_model.php */
/* Location: ./application/models/Pinjaman_model.php */