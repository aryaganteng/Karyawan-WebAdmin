<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function get_jml_karyawan(){
		return $this->db->select('count(*) as jml_karyawan')
					    ->get('karyawan')
					    ->row();
	}

	public function get_jml_laptop(){
		return $this->db->select('count(*) as jml_laptop')
					    ->get('laptop')
					    ->row();
	}

	public function get_jml_request(){
		return $this->db->select('count(*) as jml_request')
					    ->get('request')
					    ->row();
	}


}

/* End of file Kasir_model.php */
/* Location: ./application/models/Kasir_model.php */