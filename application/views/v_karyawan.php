<div class="block-header">
<h1 style="text-align: center">Data Karyawan</h1>
<div class="col-xs-50 col-sm-50 col-md-50 col-lg-50">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-50 col-sm-60">
                                    
                                </div>
                                
                            </div>
                            <div class="panel-body">
                              <div class="row" style="width: 210%;">
                              
                                 <a href="#tambah" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
                                <table class="table table-striped table-bordered apik" class="cell-border" style="width: 40%">
                                <tr>
                                  <th scope="row">No.</th>
                                  <th>ID Karyawan</th>
                                 
                                  <th>Identitas Karyawan</th>
                                  
                                  <th>Foto</th>
                                  
                                  <th>Opsi</th>


                                </tr>
                                    <?php
                                    $no=0;
                                    foreach ($data_karyawan as $dt_kar) {
                                      $no++;
                                      echo'<tr>
                                        <td>'.$no.'</td>
                                        <td>'.$dt_kar->id_karyawan.'</td>
        
                                        <td><a>Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</a>&nbsp;&nbsp;'.$dt_kar->nama_karyawan.'<br>
                                            <a>NIK DMT &nbsp; :</a>&nbsp;&nbsp;'.$dt_kar->nik.'<br>
                                            <a>Jabatan &nbsp; :</a>&nbsp;&nbsp;'.$dt_kar->jabatan.'<br>
                                            <a>No Telp &nbsp;&nbsp; :</a>&nbsp;&nbsp;'.$dt_kar->no_telp.'<br>
                                            <a>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</a>&nbsp;&nbsp;'.$dt_kar->email.'</td>
                                 
                                        <td><img src='.base_url("assets/gambar/$dt_kar->gambar").' width="100px;"</td>
                                        
                                        <td><a href="#update_karyawan" class="btn btn-warning"I data-toggle="modal" onclick="tm_detail('.$dt_kar->id_karyawan.')">Update</a> <a href="'.base_url('index.php/karyawan/deleteKaryawan/'.$dt_kar->id_karyawan).'" class="btn btn-danger"I data-toggle="modal" onclick="return confirm(\'anda yakin\')">Delete</a></td>
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
      <h5 style="color: red;">Tambahkan = (-) jika tidak diisi<h5>
        <br>
        <br>
        <form action="<?=base_url('index.php/karyawan/simpan_karyawan')?>" method="post" enctype="multipart/form-data">
        *NIK DMT
        <input type="text" name="nik" class="form-control"><br>
        *NIK TG
        <input type="text" name="nik_tg" class="form-control"><br>
        *Nama Karyawan
        <input type="text" name="nama_karyawan" class="form-control"><br>
        *Foto
        <input type="file" name="gambar" class="form-control"><br>
        *Level
        <input type="text" name="level" class="form-control"><br>
        *Status
        <input type="text" name="status" class="form-control"><br>
        *Kontrak
        <input type="text" name="kontrak" class="form-control"><br>
        *Regional
        <input type="text" name="regional" class="form-control"><br>
        *Tanggal Kontrak
        <input type="date" name="tgl_kontrak" class="form-control"><br>
        *Keterangan
        <input type="text" name="keterangan" class="form-control"><br>
        *Jabatan
        <input type="text" name="jabatan" class="form-control"><br>
        *Email
        <input type="text" name="email" class="form-control"><br>
        *No Telp
        <input type="text" name="no_telp" class="form-control"><br>
        *Pendidikan
        <input type="text" name="pendidikan" class="form-control"><br>
        *Agama
        <input type="text" name="agama" class="form-control"><br>
        *Tanggal Lahir
        <input type="date" name="tgl_lahir" class="form-control"><br>
        *Start PKWT
        <input type="text" name="pkwt" class="form-control"><br>
        *Finish PKWT
        <input type="text" name="perpanjangan_pkwt" class="form-control"><br>
        *Amandemen
        <input type="text" name="amandemen" class="form-control"><br>
        *Start Kontrak
        <input type="date" name="start_kontrak" class="form-control"><br>
        *Finish Kontrak
        <input type="date" name="finish_kontrak" class="form-control"><br>
        *Alamat
        <input type="text" name="alamat" class="form-control"><br>
        <!-- *Merk Laptop
        <input type="text" name="merk_laptop" class="form-control"><br> -->
        *Nomor Aset DMT
        <input type="text" name="aset_komitel" class="form-control"><br>
        <!-- *Aset KOmitel
        <input type="text" name="no_aset" class="form-control"><br> -->
       <!--  *ID Komitel
        <input type="text" name="id_komitel" class="form-control"><br> -->
        <h5 style="color: red;">*Pilih ID 4 jika belum mendapatkan Laptop<h5>
        <br>
        *ID Laptop
        <select name= "id_laptop" class="form-control">
        <?php
        foreach ($data_laptop as $laptop) {
                  echo "<option value='".$laptop->id_laptop."'>
                  ".$laptop->id_laptop." </option>";
                }
        ?>
        </select>
        <br>
        <!-- *S/N Laptop
        <input type="text" name="sn_laptop" class="form-control"><br> -->
        <!-- *tgl_pemakaian
        <input type="date" name="tgl_pemakaian" class="form-control"><br> -->
        *Perusahaan Sewa
        <input type="text" name="perusahaan_sewa" class="form-control"><br>
        <!-- *Keterangan Laptop
        <input type="text" name="keterangan_laptop" class="form-control"><br> -->
        *Yakes
        <input type="text" name="yakes" class="form-control"><br>
        *BPJS Kesehatan
        <input type="text" name="bpjs_kesehatan" class="form-control"><br>
        *BPJS Ketenagakerjaan
        <input type="text" name="bpjs_ketenagakerjaan" class="form-control"><br>
        *Username
        <input type="text" name="username" class="form-control"><br>
        *Password
        <input type="text" name="password" class="form-control"><br>
        *Jenis Akun
        <select name= "id_level" class="form-control">
        <?php
        foreach ($data_level as $level) {
                  echo "<option value='".$level->id_level."'>
                  ".$level->nama_level." </option>";
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
          <h5 style="color: red;">Tambahkan = (-) jika tidak diisi<h5>
        <br>
        NIK DMT
        <input type="text" id="nik" name="nik" class="form-control"><br>
        NIK TG
        <input type="text" id="nik_tg" name="nik_tg" class="form-control"><br>
        Nama Karyawan
        <input type="text" id="nama_karyawan" name="nama_karyawan" class="form-control"><br>
        Foto
        <input type="file" name="gambar" class="form-control"><br>
        Level
        <input type="text" id="level" name="level" class="form-control"><br>
        Status
        <input type="text" id="status" name="status" class="form-control"><br>
        Kontrak
        <input type="text" id="kontrak" name="kontrak" class="form-control"><br>
        Regional
        <input type="text" id="regional" name="regional" class="form-control"><br>
        Tanggal Kontrak
        <input type="date" id="tgl_kontrak" name="tgl_kontrak" class="form-control"><br>
        Keterangan
        <input type="text" id="keterangan" name="keterangan" class="form-control"><br>
        Jabatan
        <input type="text" id="jabatan" name="jabatan" class="form-control"><br>
        Email
        <input type="text" id="email" name="email" class="form-control"><br>
        No Telp
        <input type="text" id="no_telp" name="no_telp" class="form-control"><br>
        Pendidikan
        <input type="text" id="pendidikan" name="pendidikan" class="form-control"><br>
        Agama
        <input type="text" id="agama" name="agama" class="form-control"><br>
        Tanggal Lahir
        <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control"><br>
        Start PKWT
        <input type="text" id="pkwt" name="pkwt" class="form-control"><br>
        Finish PKWT
        <input type="text" id="perpanjangan_pkwt" name="perpanjangan_pkwt" class="form-control"><br>
        Amandemen
        <input type="text" id="amandemen" name="amandemen" class="form-control"><br>
        Start Kontrak
        <input type="date" id="start_kontrak" name="start_kontrak" class="form-control"><br>
        Finish Kontrak
        <input type="date" id="finish_kontrak" name="finish_kontrak" class="form-control"><br>
        Alamat
        <input type="text" id="alamat" name="alamat" class="form-control"><br>
        <!-- Merk Laptop
        <input type="text" id="merk_laptop" name="merk_laptop" class="form-control"><br> -->
        Nomor Aset DMT
        <input type="text" id="aset_komitel" name="aset_komitel" class="form-control"><br>
        <!-- No Aaset
        <input type="text" id="no_aset" name="no_aset" class="form-control"><br> -->
        <!-- ID Komitel
        <input type="text" id="id_komitel" name="id_komitel" class="form-control"><br> -->
        <h5 style="color: red;">*Pilih ID 4 jika belum mendapatkan Laptop<h5>
        <br>
        ID Laptop
        <select id="id_laptop" name= "id_laptop" class="form-control">
        <?php
        foreach ($data_laptop as $laptop) {
                  echo "<option value='".$laptop->id_laptop."'>
                  ".$laptop->id_laptop." </option>";
                }
        ?>
        </select>
        <br>  
        <!-- S/N Laptop
        <input type="text" id="sn_laptop" name="sn_laptop" class="form-control"><br> -->
        <!-- tgl_pemakaian
        <input type="date" id="tgl_pemakaian" name="tgl_pemakaian" class="form-control"><br> -->
        Perusahaan Sewa
        <input type="text" id="perusahaan_sewa" name="perusahaan_sewa" class="form-control"><br>
        <!-- Keterangan Laptop
        <input type="text" id="keterangan_laptop" name="keterangan_laptop" class="form-control"><br> -->
        Yakes
        <input type="text" id="yakes" name="yakes" class="form-control"><br>
        BPJS Kesehatan
        <input type="text" id="bpjs_kesehatan" name="bpjs_kesehatan" class="form-control"><br>
        BPJS Ketenagakerjaan
        <input type="text" id="bpjs_ketenagakerjaan" name="bpjs_ketenagakerjaan" class="form-control"><br>
        Username
        <input type="text" id="username" name="username" class="form-control"><br>
        Password
        <input type="text" id="password" name="password" class="form-control"><br>
        Jenis Akun
        <select id="id_level" name= "id_level" class="form-control">
        <?php
        foreach ($data_level as $level) {
                  echo "<option value='".$level->id_level."'>
                  ".$level->nama_level." </option>";
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
      $("#nik_tg").val(data['nik_tg']);
      $("#nama_karyawan").val(data['nama_karyawan']);
      $("#gambar").val(data['gambar']);
      $("#level").val(data['level']);
      $("#status").val(data['status']);
      $("#kontrak").val(data['kontrak']);
      $("#regional").val(data['regional']);
      $("#tgl_kontrak").val(data['tgl_kontrak']);
      $("#keterangan").val(data['keterangan']);
      $("#jabatan").val(data['jabatan']);
      $("#email").val(data['email']);
      $("#no_telp").val(data['no_telp']);
      $("#pendidikan").val(data['pendidikan']);
      $("#agama").val(data['agama']);
      $("#tgl_lahir").val(data['tgl_lahir']);
      $("#pkwt").val(data['pkwt']);
      $("#perpanjangan_pkwt").val(data['perpanjangan_pkwt']);
      $("#amandemen").val(data['amandemen']);
      $("#start_kontrak").val(data['start_kontrak']);
      $("#finish_kontrak").val(data['finish_kontrak']);
      $("#alamat").val(data['alamat']);
      // $("#merk_laptop").val(data['merk_laptop']);
      $("#aset_komitel").val(data['aset_komitel']);
      // $("#no_aset").val(data['no_aset']);
      // $("#id_komitel").val(data['id_komitel']);
      $("#id_laptop").val(data['id_laptop']);
      // $("#sn_laptop").val(data['sn_laptop']);
      // $("#tgl_pemakaian").val(data['tgl_pemakaian']);
      $("#perusahaan_sewa").val(data['perusahaan_sewa']);
      // $("#keterangan_laptop").val(data['keterangan_laptop']);
      $("#yakes").val(data['yakes']);
      $("#bpjs_kesehatan").val(data['bpjs_kesehatan']);
      $("#bpjs_ketenagakerjaan").val(data['bpjs_ketenagakerjaan']);
      $("#username").val(data['username']);
      $("#password").val(data['password']);
      $("#id_level").val(data['id_level']);
    });
  }

</script>
<script src="<?=base_url()?>assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="<?=base_url()?>assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="<?=base_url()?>assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="<?=base_url()?>assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="<?=base_url()?>assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="<?=base_url()?>assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="<?=base_url()?>assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="<?=base_url()?>assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="<?=base_url()?>assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
<script>
  $('.apik').DataTable({
    dom: 'Bfrtip',
    responsive: true,
    buttons: [
      'pdf','print','excel'
    ]
  });  
</script>