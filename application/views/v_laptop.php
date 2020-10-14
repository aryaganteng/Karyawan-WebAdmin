<div class="panel">
                <div class="panel-heading">
                <a href="#tambah" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span>Tambah</a><br>
                </div>
                <div class="panel-body">
                  <table class="table table-striped" style="width: 180%">
                    <thead>
                      <tr>
                        <th>NO</th>
                        <th>ID LAPTOP</th>
                        <th>NAMA KARYAWAN</th>
                        <th>MEREK</th>
                        <th>NOMOR S/N</th>
                        <th>NOMOR ASET</th>

                        <th>TANGGAL DAPAT</th>
                        <th>TANGGAL BERAKHIR</th>
                        <th>MOUSE</th>
                        <th>KETERANGAN</th>
                        <th>AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                              $no=0;
                              foreach ($data_laptop as $dt_lpt) {
                                $no++;
                                echo '<tr>
                                <td>'.$no.'</td>
                                <td>'.$dt_lpt->id_laptop.'</td>
                                <td>'.$dt_lpt->nama_peminjam.'</td>
                                <td>'.$dt_lpt->merk_laptop.'</td>
                                <td>'.$dt_lpt->sn_laptop.'</td>
                                <td>'.$dt_lpt->no_aset.'</td>
                                <td>'.$dt_lpt->tgl_pemakaian.'</td>
                                <td>'.$dt_lpt->tgl_berakhir.'</td>
                                <td>'.$dt_lpt->mouse.'</td>
                                <td>'.$dt_lpt->keterangan_laptop.'</td>
                                <td>
                                <a href="#update_laptop" class="btn btn-warning" data-toggle="modal" onclick="tm_detail('.$dt_lpt->id_laptop.')">Update</a> 
                                <a href="'.base_url('index.php/Laptop/hapus_laptop/'.$dt_lpt->id_laptop).'" class="btn btn-danger" data-toggle="modal" onclick="return confirm(\'anda yakin?\')">Delete</a></td>
            
                                </tr>';
                              }
                      ?>

                    </tbody>
                  </table>
                </div>
              </div>
         </table>
          <?php if($this->session->flashdata('pesan')!=null): ?>
          <div class= "alert alert-danger"><?= $this->session->flashdata('pesan');?></div>
          <?php endif?>                        

                <!-- Modal -->
<div class="modal fade" id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Laptop</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/Laptop/simpan_laptop')?>" method="post">
        <h5 style="color: red;">Tambahkan = (-) jika tidak diisi<h5>
        <br>
             Nama Karyawan
             <input type="text" name="nama_peminjam" class="form-control"><br>
             Merek
             <input type="text" name="merk_laptop" class="form-control"><br>
             Nomor S/N
             <input type="text" name="sn_laptop" class="form-control"><br>
             Nomor Aset
             <input type="text" name="no_aset" class="form-control"><br>
             Tanggal Dapat
             <input type="date" name="tgl_pemakaian" class="form-control"><br>
             Tanggal Akhir
             <input type="date" name="tgl_berakhir" class="form-control"><br>
             Mouse
             <input type="text" name="mouse" class="form-control"><br>
             Keterangan
             <input type="text" name="keterangan_laptop" class="form-control"><br>
             <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="update_laptop">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Laptop</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/Laptop/update_laptop')?>" method="post">
                <input type="hidden" name="id_laptop" id="id_laptop">
                <h5 style="color: red;">Tambahkan = (-) jika tidak diisi<h5>
        <br>  
                Nama Karyawan
                <input id="nama_peminjam" type="text" name="nama_peminjam" class="form-control"><br>
                 Merek
                <input id="merk_laptop" type="text" name="merk_laptop" class="form-control"><br>
                 Nomor S/N
                <input id="sn_laptop" type="text" name="sn_laptop" class="form-control"><br>
                 Nomor Aset
                <input id="no_aset" type="text" name="no_aset" class="form-control"><br>
                 Tanggal Dapat
                <input id="tgl_pemakaian" type="date" name="tgl_pemakaian" class="form-control"><br>
                 Tanggal Akhir
                <input id="tgl_berakhir" type="date" name="tgl_berakhir" class="form-control"><br>
                 Mouse
                <input id="mouse" type="text" name="mouse" class="form-control"><br>
                 Keterangan
                <input id="keterangan_laptop" type="text" name="keterangan_laptop" class="form-control"><br>

                <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>

function tm_detail(id_laptop) {
  $.getJSON("<?=base_url()?>index.php/Laptop/get_detail_laptop/"+id_laptop,function(data){
    $("#id_laptop").val(data['id_laptop']);
    $("#nama_peminjam").val(data['nama_peminjam']);
    $("#merk_laptop").val(data['merk_laptop']);
    $("#sn_laptop").val(data['sn_laptop']);
    $("#no_aset").val(data['no_aset']);
    $("#tgl_pemakaian").val(data['tgl_pemakaian']);
    $("#tgl_berakhir").val(data['tgl_berakhir']);
    $("#mouse").val(data['mouse']);
    $("#keterangan_laptop").val(data['keterangan_laptop']);

  });
}
</script>