<div class="block-header">
<h1 style="text-align: center">Data Permintaan</h1>
<div class="col-xs-50 col-sm-50 col-md-50 col-lg-50">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-50 col-sm-60">
                                    
                                </div>
                                
                            </div>
                            <div class="panel-body">
                              <div class="row">
                              
                                 
                                <table class="table table-bordered table-striped apik" class="cell-border" style="width: 100%">
                                <tr>
                                  <th>No.</th>
                                  <th>ID Permintaan</th>
                                  <th>Permintaan</th>
                                  <th>Jumlah</th>
                                  <th>Tanggal Pinjam</th>
                                  <th>Nama Karyawan</th>
                                  <th>No Telp</th>
                                  <th>Opsi</th>


                                </tr>
                                    <?php
                                    $no=0;
                                    foreach ($data_request as $dt_req) {
                                      $no++;
                                      echo'<tr>
                                        <td>'.$no.'</td>
                                        <td>'.$dt_req->id_request.'</td>
                                        <td>'.$dt_req->nama_request.'</td>
                                        <td>'.$dt_req->jumlah_request.'</td>
                                        <td>'.$dt_req->tgl_request.'</td>
                                        <td>'.$dt_req->nama_karyawan.'</td>
                                        <td>'.$dt_req->no_telp.'</td>
                                        <td><a href="#update_request" class="btn btn-warning"I data-toggle="modal" onclick="tm_detail('.$dt_req->id_request.')">Update</a> <a href="'.base_url('index.php/request/deleteRequest/'.$dt_req->id_request).'" class="btn btn-danger"I data-toggle="modal" onclick="return confirm(\'anda yakin\')">Delete</a></td>
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
        <h4 class="modal-title">Ajukan Permintaan</h4>

      </div>
      <div class="modal-body">
        <h5 style="color: red;">Keterangan = (*) harus diisi<h5>
        <br>
        <br>
        <form action="<?=base_url('index.php/request/simpan_request')?>" method="post" enctype="multipart/form-data">
         
        *Permintaan
        <input type="text" name="nama_request" class="form-control"><br>
        *Jumlah
        <input type="text" name="jumlah_request" class="form-control"><br>
        *Tanggal
        <input type="date" name="tgl_request" class="form-control"><br>
        *Nama Karyawan
        <select name= "id_karyawan" class="form-control">
        <?php
        foreach ($data_karyawan as $kar) {
                  echo "<option value='".$kar->id_karyawan."'>
                  ".$kar->nama_karyawan." </option>";
                }
        ?>
        </select>
        <br>
        <!-- *No Telp
        <input type="text" name="no_telp" class="form-control"><br> -->
       
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

        <div class="modal fade"id="update_request">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Update Permintaan</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/request/update_request')?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_request" id="id_request">
        
        Permintaan
        <input type="text" id="nama_request" name="nama_request" class="form-control"><br>
        Jumlah
        <input type="text" id="jumlah_request" name="jumlah_request" class="form-control"><br>
        Tanggal
        <input type="date" id="tgl_request" name="tgl_request" class="form-control"><br>
        Nama Karyawan
        <select id="id_karyawan" name= "id_karyawan" class="form-control">
        <?php
        foreach ($data_karyawan as $kar) {
                  echo "<option value='".$kar->id_karyawan."'>
                  ".$kar->nama_karyawan." </option>";
                }
        ?>
        </select>
        <br>
        <!-- No Telp  
        <input type="text" id="no_telp" name="no_telp" class="form-control"><br> -->
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
  function tm_detail(id_rqst){
    $.getJSON("<?=base_url()?>index.php/request/detail_request/"+id_rqst,function(data){
      $("#id_request").val(data['id_request']);
      $("#nama_request").val(data['nama_request']);
      $("#jumlah_request").val(data['jumlah_request']);
       $("#tgl_request").val(data['tgl_request']);
        $("#id_karyawan").val(data['id_karyawan']);
        $("#no_telp").val(data['no_telp']);
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