<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laptop_model extends CI_Model {

  public function get_laptop()
  {
      $data_laptop= $this->db->get('Laptop')->result();
      return $data_laptop;
  }
  public function masuk_db()
  {
    $data_laptop=array(
      'nama_peminjam'=>$this->input->post('nama_peminjam'),
      'merk_laptop'=>$this->input->post('merk_laptop'),
      'sn_laptop'=>$this->input->post('sn_laptop'),
      'no_aset'=>$this->input->post('no_aset'),
      'tgl_pemakaian'=>$this->input->post('tgl_pemakaian'),
      'tgl_berakhir'=>$this->input->post('tgl_berakhir'),
      'mouse'=>$this->input->post('mouse'),
      'keterangan_laptop'=>$this->input->post('keterangan_laptop'),
    );
    $ql_masuk=$this->db->insert('Laptop', $data_laptop);
    return $ql_masuk;
  }
  public function detail_laptop($id_laptop='')
{
  return $this->db->where('id_laptop', $id_laptop)->get('Laptop')->row();
  }

   public function update_laptop()
  {
    $dt_up_laptop=array(
        'nama_peminjam'=>$this->input->post('nama_peminjam'),
        'merk_laptop'=>$this->input->post('merk_laptop'),
        'sn_laptop'=>$this->input->post('sn_laptop'),
        'no_aset'=>$this->input->post('no_aset'),
        'tgl_pemakaian'=>$this->input->post('tgl_pemakaian'),
        'tgl_berakhir'=>$this->input->post('tgl_berakhir'),
        'mouse'=>$this->input->post('mouse'),
        'keterangan_laptop'=>$this->input->post('keterangan_laptop'),
    );
  return $this->db->where('id_laptop',$this->input->post('id_laptop'))->update('Laptop', $dt_up_laptop);
  }
  public function hapus_laptop($id_laptop)
  {
    $this->db->where('id_laptop', $id_laptop);
     return $this->db->delete('Laptop');
  }  
  

}

/* End of file Laptop_model.php */
/* Location: ./application/models/Laptop_model.php */