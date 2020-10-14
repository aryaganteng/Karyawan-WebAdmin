<div class="block-header">
<h1 style="text-align: center">Data Pinjaman</h1>
<div class="col-xs-50 col-sm-50 col-md-50 col-lg-50">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-50 col-sm-60">
                                    
                                </div>
                                
                            </div>
                            <div class="panel-body">
                              <div class="row">
                              
                                 <a href="#tambah" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
                                <table class="table table-bordered table-striped apik" class="cell-border" style="width: 100%">
                                <tr>
                                  <th>No.</th>
                                  <th>ID Pinjaman</th>
                                  <th>Nama Peminjam</th>
                                  <th>Nama Barang</th>
                                  <th>Tanggal Pinjam</th>
                                  <th>Jumlah</th>
                                  <th>Opsi</th>


                                </tr>
                                    <?php
                                    $no=0;
                                    foreach ($data_pinjaman as $dt_pin) {
                                      $no++;
                                      echo'<tr>
                                        <td>'.$no.'</td>
                                        <td>'.$dt_pin->id_pinjaman.'</td>
                                        <td>'.$dt_pin->nama_karyawan.'</td>
                                        <td>'.$dt_pin->nama_barang.'</td>
                                        <td>'.$dt_pin->tgl_pinjam.'</td>
                                        <td>'.$dt_pin->jumlah.'</td>
                                        <td><a href="#update_pinjaman" class="btn btn-warning"I data-toggle="modal" onclick="tm_detail('.$dt_pin->id_pinjaman.')">Update</a> <a href="'.base_url('index.php/pinjaman/deletePinjaman/'.$dt_pin->id_pinjaman).'" class="btn btn-danger"I data-toggle="modal" onclick="return confirm(\'anda yakin\')">Delete</a></td>
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
        <h4 class="modal-title">Tambah Pinjaman</h4>

      </div>
      <div class="modal-body">
        <h5 style="color: red;">Keterangan = (*) harus diisi<h5>
        <br>
        <br>
        <form action="<?=base_url('index.php/pinjaman/simpan_pinjaman')?>" method="post" enctype="multipart/form-data">
         *Nama Peminjam
        <select name= "id_karyawan" class="form-control">
        <?php
        foreach ($data_karyawan as $kar) {
                  echo "<option value='".$kar->id_karyawan."'>
                  ".$kar->nama_karyawan." </option>";
                }
        ?>
        </select>
        <br>
        *Nama Barang
        <input type="text" name="nama_barang" class="form-control"><br>
        *Tanggal Pinjam
        <input type="date" name="tgl_pinjam" class="form-control"><br>
        *Jumlah
        <input type="text" name="jumlah" class="form-control"><br>
       
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

        <div class="modal fade"id="update_pinjaman">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Update Pinjaman</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/pinjaman/update_pinjaman')?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_pinjaman" id="id_pinjaman">
        Nama Peminjaman
        <select id="id_karyawan" name= "id_karyawan" class="form-control">
        <?php
        foreach ($data_karyawan as $kar) {
                  echo "<option value='".$kar->id_karyawan."'>
                  ".$kar->nama_karyawan." </option>";
                }
        ?>
        </select>
        <br>
        Nama Barang
        <input type="text" id="nama_barang" name="nama_barang" class="form-control"><br>
        Tanggal Pinjam
        <input type="date" id="tgl_pinjam" name="tgl_pinjam" class="form-control"><br>
        Jumlah
        <input type="text" id="jumlah" name="jumlah" class="form-control"><br>
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
  function tm_detail(id_pjmn){
    $.getJSON("<?=base_url()?>index.php/pinjaman/detail_pinjaman/"+id_pjmn,function(data){
      $("#id_pinjaman").val(data['id_pinjaman']);
      $("#id_karyawan").val(data['id_karyawan']);
      $("#nama_barang").val(data['nama_barang']);
       $("#tgl_pinjam").val(data['tgl_pinjam']);
        $("#jumlah").val(data['jumlah']);
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