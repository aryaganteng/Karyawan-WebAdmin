<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_karyawan extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->model('get_karyawan_model','gt_kar');
}

	public function index()
	{
		$dt_karyawan=$this->gt_kar->get_karyawan();
		echo json_encode($dt_karyawan);
	}
	public function cari($nama_karyawan='')
	{
		$dt_karyawan=$this->gt_kar->cari_get_karyawan($nama_karyawan);
		echo json_encode($dt_karyawan);		
	}
	public function detail($id_karyawan)
	{
		$dt_karyawan=$this->gt_kar->get_detail($id_karyawan);
		echo json_encode($dt_karyawan);
	}
}

/* End of file Get_barang.php */
/* Location: ./application/controllers/Get_barang.php */