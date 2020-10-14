<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bpjs_model extends CI_Model {

	public function get_bpjs()
	{
		$data_bpjs= $this->db->get('bpjs')->result();
		return $data_bpjs;	
	}
	public function masuk_db()
	{
		$data_bpjs=array(
			'nama_bpjs'=>$this->input->post('nama_bpjs'),
		);
		$sql_masuk=$this->db->insert('bpjs', $data_bpjs);
		return $sql_masuk;
	}		

}

/* End of file Bpjs_model.php */
/* Location: ./application/models/Bpjs_model.php */