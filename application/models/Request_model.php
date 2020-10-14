<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_model extends CI_Model {

	public function get_request()
	{
		$data_request= $this->db->join('karyawan','karyawan.id_karyawan=request.id_karyawan')
		->get('request')->result();
		return $data_request;
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
	public function detail_request($id_request){
		return $this->db->where('id_request', $id_request)->get('request')->row();
	}
	public function update_request()
	{
		$dt_up_request=array(
            'nama_request'=>$this->input->post('nama_request'),
            'jumlah_request'=>$this->input->post('jumlah_request'),
            'tgl_request'=>$this->input->post('tgl_request'),
            'id_karyawan'=>$this->input->post('id_karyawan'),
            // 'no_telp'=>$this->input->post('no_telp')
		);
		return $this->db->where('id_request',$this->input->post('id_request'))->update('request', $dt_up_request);
	}
	public function delete_request($id_request)
	{
		$delete = $this->db->where('id_request',$id_request)->delete('request');
		return $delete;
	}
}

/* End of file Pinjaman_model.php */
/* Location: ./application/models/Pinjaman_model.php */