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
                              <div class="row" style="width: 200%;">
                              
                               
                                <table class="table table-striped table-bordered apik" class="cell-border" style="width: 100%">
                                <tr>
                                  <th scope="row">No.</th>
                                  <th>ID Karyawan</th>
                                  <th>NIK DMT</th>
                                  <th>NIK TG</th>
								  <th>Nama Karyawan</th>
								  <th>Level</th>
								  <th>Status</th>
								  <th>Kontrak</th>
								  <th>Regional</th>
								  <th>Tanggal Kontrak</th>
								  <th>Keterangan</th>
								  <th>Jabatan</th>
								  <th>Email</th>
								  <th>Mobile</th>
								  <th>Pendidikan</th>
								  <th>Agama</th>
								  <th>Tanggal Lahir</th>
								  <th>Start PKWT</th>
								  <th>Finish Perpanjangan PKWT</th>
								  <th>Amandemen</th>
								  <th>Start Kontrak</th>
								  <th>Finish Kontrak</th>
								  <th>Alamat</th>
								  <th>Merk Laptop</th>
								  <th>Aset Komitel</th>
								  <th>Id Komitel</th>
								  <th>Id Laptop</th>
								  <th>S/N Laptop</th>
								  <th>Tanggal Pemakaian</th>
                                  <th>Tanggal Berakhir</th>
								  <th>Perusahaan Sewa</th>
								  <th>Keterangan Laptop</th>
								  <th>Yakes</th>
								  <th>BPJS Kesehatan</th>
								  <th>BPJS Ketenagakerjaan</th>
								  <th>Username</th>
								  <th>Password</th>
								  <th>Id Level</th>

                                </tr>
                                    <?php
                                    $no=0;
                                    foreach ($data_karyawan as $dt_kar) {
                                      $no++;
                                      echo'<tr>
                                        <td>'.$no.'</td>
                                        <td>'.$dt_kar->id_karyawan.'</td>
                                        <td>'.$dt_kar->nik.'</td>
                                        <td>'.$dt_kar->nik_tg.'</td>
                                        <td>'.$dt_kar->nama_karyawan.'</td>
                                        <td><img src='.base_url("assets/gambar/$dt_kar->gambar").' width="100px;"</td>
                                        <td>'.$dt_kar->level.'</td>
                                        <td>'.$dt_kar->status.'</td>
                                        <td>'.$dt_kar->kontrak.'</td>
                                        <td>'.$dt_kar->regional.'</td>
                                        <td>'.$dt_kar->tgl_kontrak.'</td>
                                        <td>'.$dt_kar->keterangan.'</td>
                                        <td>'.$dt_kar->jabatan.'</td>
                                        <td>'.$dt_kar->email.'</td>
                                        <td>'.$dt_kar->no_telp.'</td>
                                        <td>'.$dt_kar->pendidikan.'</td>
                                        <td>'.$dt_kar->agama.'</td>
                                        <td>'.$dt_kar->tgl_lahir.'</td>
                                        <td>'.$dt_kar->pkwt.'</td>
                                        <td>'.$dt_kar->perpanjangan_pkwt.'</td>
                                        <td>'.$dt_kar->amandemen.'</td>
                                        <td>'.$dt_kar->start_kontrak.'</td>
                                        <td>'.$dt_kar->finish_kontrak.'</td>
                                        <td>'.$dt_kar->alamat.'</td>
                                        <td>'.$dt_kar->merk_laptop.'</td>
                                        <td>'.$dt_kar->aset_komitel.'</td>
                                        <td>'.$dt_kar->id_komitel.'</td>
                                        <td>'.$dt_kar->id_laptop.'</td>
                                        <td>'.$dt_kar->sn_laptop.'</td>
                                        <td>'.$dt_kar->tgl_pemakaian.'</td>
                                        <td>'.$dt_kar->tgl_berakhir.'</td>
                                        <td>'.$dt_kar->perusahaan_sewa.'</td>
                                        <td>'.$dt_kar->keterangan_laptop.'</td>
                                        <td>'.$dt_kar->yakes.'</td>
                                        <td>'.$dt_kar->bpjs_kesehatan.'</td>
                                        <td>'.$dt_kar->bpjs_ketenagakerjaan.'</td>
                                        <td>'.$dt_kar->username.'</td>
                                        <td>'.$dt_kar->password.'</td>
                                        <td>'.$dt_kar->id_level.'</td>
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