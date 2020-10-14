<div class="block-header">
<h1 style="text-align: center">Data Karyawan</h1>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    
                                </div>
                                
                            </div>
                            <div class="panel-body">
                            	<div class="row">
                            	
                            	   <a href="#tambah" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
                            		<table class="table table-striped" style="margin-top: 40px;" ;">
                            		<tr>
                            			<th>No.</th>
                                  <th>ID Karyawan</th>
                                  <th>NIK</th>
                                  <th>Nama Karyawan</th>
                                  <th>Foto</th>
                                  <th>No. Telp</th>
                                  <th>Tanggal Masuk</th>
                                  <th>Lama Kontrak</th>
                                  <th>Tanggal Selesai</th>
                                  <th>Tempat, Tanggal Lahir</th>
                                  <th>Jenis Kelamin</th>
                                  <th>Agama</th>
                                  <th>Alamat</th>
                                  <th>BPJS</th>
                                  <th>Opsi</th>


                            		</tr>
                                    <?php
                                    $no=0;
                                    foreach ($data_karyawan as $dt_kar) {
                                      $no++;
                                      echo'<tr>
                                        <td>'.$no.'</td>
                                        <td>'.$dt_kar->id_karyawan.'</td>
                                        <td>'.$dt_kar->nik.'</td>
                                        <td>'.$dt_kar->nama_karyawan.'</td>
                                        <td><img src='.base_url("assets/gambar/$dt_kar->gambar").' width="120" height="100"</td>
                                        <td>'.$dt_kar->no_telp.'</td>
                                        <td>'.$dt_kar->tgl_masuk.'</td>
                                        <td>'.$dt_kar->lama_kontrak.'</td>
                                        <td>'.$dt_kar->tgl_selesai.'</td>
                                        <td>'.$dt_kar->ttl.'</td>
                                        <td>'.$dt_kar->nama_jk.'</td>
                                        <td>'.$dt_kar->agama.'</td>
                                        <td>'.$dt_kar->alamat.'</td>
                                        <td>'.$dt_kar->nama_bpjs.'</td>
                                        <td><a href="#update_karyawan" class="btn btn-warning"I data-toggle="modal" onclick="tm_detail('.$dt_kar->id_karyawan.')">Update</a> <a href="'.base_url('index.php/karyawan/deleteKaryawan/'.$dt_kar->id_karyawan).'" class="btn btn-danger"I data-toggle="modal" onclick="return confirm(\'anda yakin\')">Delate</a></td>
                                    </tr>';  
                                    }
                            		?>
                            		</table>
                                <?php if ($this->session->flashdata('pesan')!=null): ?>
                                 <div class="alert alert-danger"><?= $this->session->flashdata('pesan');?></div>    
                                <?php endif ?>
                                
                        
                    </div>
                        
                            	
                </div>
            </div>
        </div>
        <div class="modal fade"id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Tambah Karyawan</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/karyawan/simpan_karyawan')?>" method="post" enctype="multipart/form-data">
        NIK
        <input type="text" name="nik" class="form-control"><br>
        Nama Karyawan
        <input type="text" name="nama_karyawan" class="form-control"><br>
        Foto
        <input type="file" name="gambar" class="form-control"><br>
        No Telp
        <input type="text" name="no_telp" class="form-control"><br>
        Tanggal Masuk
        <input type="date" name="tgl_masuk" class="form-control"><br>
        Lama Kontrak
        <input type="text" name="lama_kontrak" class="form-control"><br>
        Tanggal Selesai
        <input type="date" name="tgl_selesai" class="form-control"><br>
        Tempat, Tanggal Lahir
        <input type="text" name="ttl" class="form-control"><br>
        Jenis Kelamin
        <select name= "id_jk" class="form-control">
        <?php
        foreach ($data_jk as $jk) {
                  echo "<option value='".$jk->id_jk."'>
                  ".$jk->nama_jk." </option>";
                }
        ?>
        </select>
        <br>
        Agama
        <input type="text" name="agama" class="form-control"><br>
        Alamat
        <input type="text" name="alamat" class="form-control"><br>
        BPJS
        <select name= "id_bpjs" class="form-control">
        <?php
        foreach ($data_bpjs as $bpjs) {
                  echo "<option value='".$bpjs->id_bpjs."'>
                  ".$bpjs->nama_bpjs." </option>";
                }
        ?>
        </select>
        <br> 
        <input type="submit" name="simpan" value="simpan" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
              
        </select>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

        <div class="modal fade"id="update_karyawan">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Update Karyawan</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/karyawan/update_karyawan')?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_karyawan" id="id_karyawan">
        NIK
        <input type="text" id="nik" name="nik" class="form-control"><br>
        Nama Karyawan
        <input type="text" id="nama_karyawan" name="nama_karyawan" class="form-control"><br>
        Foto
        <input type="file" id="gambar" name="gambar" class="form-control"><br>
        No Telp
        <input type="text" id="no_telp" name="no_telp" class="form-control"><br>
        Tanggal Masuk
        <input type="date" id="tgl_masuk" name="tgl_masuk" class="form-control"><br>
        Lama Kontrak
        <input type="text" id="lama_kontrak" name="lama_kontrak" class="form-control"><br>
        Tanggal Selesai
        <input type="date" id="tgl_selesai" name="tgl_selesai" class="form-control"><br>
        Tempat, Tanggal Lahir
        <input type="text" id="ttl" name="ttl" class="form-control"><br>
        Jenis Kelamin
        <select id="id_jk" name= "id_jk" class="form-control">
        <?php
        foreach ($data_jk as $jk) {
                  echo "<option value='".$jk->id_jk."'>
                  ".$jk->nama_jk." </option>";
                }
        ?>
        </select>
        <br>
        Agama
        <input type="text" id="agama" name="agama" class="form-control"><br>
        Alamat
        <input type="text" id="alamat" name="alamat" class="form-control"><br>
        BPJS
        <select id="id_bpjs" name= "id_bpjs" class="form-control">
        <?php
        foreach ($data_bpjs as $bpjs) {
                  echo "<option value='".$bpjs->id_bpjs."'>
                  ".$bpjs->nama_bpjs." </option>";
                }
        ?>
        </select>
        <br> 
        <input type="submit" name="simpan" value="simpan" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
              
        </select>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
  function tm_detail(id_krwn){
    $.getJSON("<?=base_url()?>index.php/karyawan/detail_karyawan/"+id_krwn,function(data){
      $("#id_karyawan").val(data['id_karyawan']);
      $("#nik").val(data['nik']);
      $("#nama_karyawan").val(data['nama_karyawan']);
       $("#no_telp").val(data['no_telp']);
        $("#tgl_masuk").val(data['tgl_masuk']);
        $("#lama_kontrak").val(data['lama_kontrak']);
         $("#tgl_selesai").val(data['tgl_selesai']);
         $("#ttl").val(data['ttl']);
         $("#id_jk").val(data['id_jk']);
         $("#agama").val(data['agama']);
         $("#alamat").val(data['alamat']);
         $("#id_bpjs").val(data['id_bpjs']);
    });
  }
</script>







<!-- Karyawan Model -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_model extends CI_Model {

  public function get_karyawan()
  {
    $data_karyawan= $this->db->join('jk','jk.id_jk=karyawan.id_jk')
    ->join('bpjs','bpjs.id_bpjs=karyawan.id_bpjs')
    ->get('karyawan')->result();
    return $data_karyawan;
  }
  public function masuk_db()
  {
    $config['upload_path'] = './assets/gambar';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']  = '10000';
    $config['max_width']  = '1024';
    $config['max_height']  = '76800';
    
    $this->load->library('upload', $config);
    
    if ( ! $this->upload->do_upload('gambar')){
      $this->session->set_flashdata('pesan', $this->upload->display_errors());
      return false;
    }
    else{
      $data_karyawan=array(
    'nik'=>$this->input->post('nik'),
    'nama_karyawan'=>$this->input->post('nama_karyawan'),
    'gambar'=>$this->upload->data('file_name'),
    'no_telp'=>$this->input->post('no_telp'),
    'tgl_masuk'=>$this->input->post('tgl_masuk'),
    'lama_kontrak'=>$this->input->post('lama_kontrak'),
    'tgl_selesai'=>$this->input->post('tgl_selesai'),
    'ttl'=>$this->input->post('ttl'),
    'id_jk'=>$this->input->post('id_jk'),
    'agama'=>$this->input->post('agama'),
    'alamat'=>$this->input->post('alamat'),
    'bpjs'=>$this->input->post('id_bpjs'),
    );
    $sql_masuk = $this->db->insert('karyawan', $data_karyawan);
    return $sql_masuk;
    }
    
  } 
  public function detail_karyawan($id_karyawan){
    return $this->db->where('id_karyawan', $id_karyawan)->get('karyawan')->row();
  }
  public function update_karyawan($value='')
  {
    $nama_gambar=$_FILES['gambar']['name'];
    if($nama_gambar!=""){
      $config['upload_path'] = './assets/gambar';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']  = '100000';
      $config['max_width']  = '1024000';
      $config['max_height']  = '768000';
      
      $this->load->library('upload', $config);
      
      if ( ! $this->upload->do_upload('gambar')){
        $this->session->set_flashdata('pesan', $this->upload->display_errors());
        return false;
      }
      else{
        $dt_up_karyawan=array(
        'nik'=>$this->input->post('nik'),
    'nama_karyawan'=>$this->input->post('nama_karyawan'),
    'gambar'=>$this->upload->data('file_name'),
    'no_telp'=>$this->input->post('no_telp'),
    'tgl_masuk'=>$this->input->post('tgl_masuk'),
    'lama_kontrak'=>$this->input->post('lama_kontrak'),
    'tgl_selesai'=>$this->input->post('tgl_selesai'),
    'ttl'=>$this->input->post('ttl'),
    'id_jk'=>$this->input->post('id_jk'),
    'agama'=>$this->input->post('agama'),
    'alamat'=>$this->input->post('alamat'),
    'id_bpjs'=>$this->input->post('id_bpjs'),
    );
    return $this->db->where('id_karyawan',$this->input->post('id_karyawan'))->update('karyawan', $dt_up_karyawan);
  }
    }
    else{
        $dt_up_karyawan=array(
        'nik'=>$this->input->post('nik'),
    'nama_karyawan'=>$this->input->post('nama_karyawan'),
    'gambar'=>$this->upload->data('file_name'),
    'no_telp'=>$this->input->post('no_telp'),
    'tgl_masuk'=>$this->input->post('tgl_masuk'),
    'lama_kontrak'=>$this->input->post('lama_kontrak'),
    'tgl_selesai'=>$this->input->post('tgl_selesai'),
    'ttl'=>$this->input->post('ttl'),
    'id_jk'=>$this->input->post('id_jk'),
    'agama'=>$this->input->post('agama'),
    'alamat'=>$this->input->post('alamat'),
    'id_bpjs'=>$this->input->post('id_bpjs'),
    );
    return $this->db->where('id_karyawan',$this->input->post('id_karyawan'))->update('karyawan', $dt_up_karyawan);
  }
    }
  public function delete_karyawan($id_karyawan)
  {
    $delete = $this->db->where('id_karyawan',$id_karyawan)->delete('karyawan');
    return $delete;
  }
}

/* End of file kategori_model.php */
/* Location: ./application/models/kategori_model.php */