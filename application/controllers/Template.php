<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
	}
	public function index()
	{
		$data['konten']='home';
		$data['jml_karyawan'] = $this->home_model->get_jml_karyawan();
		$data['jml_laptop'] = $this->home_model->get_jml_laptop();
		$data['jml_request'] = $this->home_model->get_jml_request();
		$this->load->view('template', $data);
	}
}

/* End of file Template.php */
/* Location: ./application/controllers/Template.php */