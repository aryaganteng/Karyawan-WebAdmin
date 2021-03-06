<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function cek_login(){
        $u = $this->input->post('username');
        $p = $this->input->post('password');

    $query = $this->db->join('level','level.id_level=Karyawan.id_level')
                      ->where('username',$u)
                      ->where('password',$p)
                      ->get('karyawan');

    if($this->db->affected_rows() > 0){

        $data_login = $query->row();

        $data_session = array(
                            'username' => $data_login->username,
                            'password' => $data_login->password,
                            'logged_in'=> TRUE,
                            'nama_level'=> $data_login->nama_level
                        );

        $this->session->set_userdata($data_session);

        return TRUE;
        }else{
            return FALSE;
        }
    }
}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */