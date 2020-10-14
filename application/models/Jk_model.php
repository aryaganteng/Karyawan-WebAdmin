<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jk_model extends CI_Model {

	public function get_jk()
	{
		$data_jk= $this->db->get('jk')->result();
		return $data_jk;	
	}
	public function masuk_db()
	{
		$data_jk=array(
			'nama_jk'=>$this->input->post('nama_jk'),
		);
		$sql_masuk=$this->db->insert('jk', $data_jk);
		return $sql_masuk;
	}		

}

/* End of file Jk_model.php */
/* Location: ./application/models/Jk_model.php */