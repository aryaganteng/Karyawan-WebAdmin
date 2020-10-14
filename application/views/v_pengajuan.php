<div class="block-header">
<div class="panel">
<h1 style="text-align: center"><b>Ajukan Permintaan Anda</b></h1>
<div class="col-xs-50 col-sm-50 col-md-50 col-lg-50">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-50 col-sm-60">
                                </div>
                            </div>
                            <div class="panel-body">
                               <img class="img-responsive" src="<?=base_url()?>assets/img/request.png" width="400px" style="margin-left: auto; margin-right: auto;">
                                <?php if ($this->session->flashdata('pesan')!=null): ?>
                                 <div class="alert alert-danger"><?= $this->session->flashdata('pesan');?></div>    
                                <?php endif ?>
                              <div class="row" style="text-align: center;">
                                 <a href="#tambah" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span>Request</a>
                                
                                
                        
                    </div>
                        
                              
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
        <form action="<?=base_url('index.php/pengajuan/simpan_pengajuan')?>" method="post" enctype="multipart/form-data">
         
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