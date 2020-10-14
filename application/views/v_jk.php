<div class="block-header">
<h1 style="text-align: center">Jk</h1>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    
                                </div>
                                
                            </div>
                            <div class="body">
                            	<div class="row">
                            	
                            	   <a href="#tambah" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
                            		<table class="table table-hover table-striped" style="margin-top: 40px;" ;">
                            		<tr>
                            			<th>NO</th><th>ID</th><th>JENIS KELAMIN</th>

                            		</tr>
                                    <?php
                                    $no=0;
                                    foreach ($data_jk as $dt_j) {
                                      $no++;
                                      echo'<tr>
                                        <td>'.$no.'</td>
                                        <td>'.$dt_j->id_jk.'</td>
                                        <td>'.$dt_j->nama_jk.'</td>
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
        <h4 class="modal-title">Tambah Jk</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/jk/simpan_jk')?>" method="post">
        Nama Jenis Kelamin
        <input type="text" name="nama_jk" class="form-control"><br>
        <input type="submit" name="simpan" value="simpan" class="btn btn-success">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->