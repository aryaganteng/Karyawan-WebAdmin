<?php
  // var_dump($data_peminjaman);die;
?>
<link href="<?=base_url()?>assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

	<div class="panel-body">
		<h4>
			<i class="glyphicon glyphicon-save"></i>Export Data Karyawan</h4>
	</div>
	<div class="panel-body">
		<table class="table table-striped apik">
			<thead>
				<tr>
                <th>ID Karyawan</th>
                                  <th>NIK</th>
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
								  <th>PKWT</th>
								  <th>Perpanjangan PKWT</th>
								  <th>Amandemen</th>
								  <th>Start Kontrak</th>
								  <th>Finish Kontrak</th>
								  <th>Alamat</th>
								  <th>Merk Laptop</th>
								  <th>Aset Komitel</th>
								  <th>No Aset</th>
								  <th>Id Komitel</th>
								  <th>Id Laptop</th>
								  <th>S/N Laptop</th>
								  <th>Tanggal Pemakaian</th>
								  <th>Perusahaan Sewa</th>
								  <th>Keterangan Laptop</th>
								  <th>Yakes</th>
								  <th>BPJS Kesehatan</th>
								  <th>BPJS Ketenagakerjaan</th>
								  <th>Username</th>
								  <th>Password</th>
								  <th>Id Level</th>
						

				</tr>
			</thead>
			<tbody>
				<?php $no=1; ?>
				<?php foreach ($data_karyawan as $dt_kar ) : ?>
				<tr>
					<td>
						<?= $dt_kar->id_karyawan ?>
					</td>
					<td>
						<?= $dt_kar->nik ?>
					</td>
					<td>
						<?= $dt_kar->nama_karyawan ?>
					</td>
					<td>
						<?= $dt_kar->level ?>
					</td>
					<td>
						<?= $dt_kar->status ?>
					</td>
					<td>
						<?= $dt_kar->kontrak ?>
					</td>
					<td>
						<?= $dt_kar->regional ?>
					</td>
					<td>
						<?= $dt_kar->tgl_kontrak ?>
					</td>
					<td>
						<?= $dt_kar->keterangan ?>
					</td>
					<td>
						<?= $dt_kar->jabatan ?>
					</td>
					<td>
						<?= $dt_kar->email ?>
					</td>
					<td>
						<?= $dt_kar->no_telp ?>
					</td>
					<td>
						<?= $dt_kar->pendidikan ?>
					</td>
					<td>
						<?= $dt_kar->agama ?>
					</td>
					<td>
						<?= $dt_kar->tgl_lahir ?>
					</td>
					<td>
						<?= $dt_kar->pkwt ?>
					</td>
					<td>
						<?= $dt_kar->perpanjangan_pkwt ?>
					</td>
					<td>
						<?= $dt_kar->amandemen ?>
					</td>
					<td>
						<?= $dt_kar->start_kontrak ?>
					</td>
					<td>
						<?= $dt_kar->finish_kontrak ?>
					</td>
					<td>
						<?= $dt_kar->alamat ?>
					</td>
					<td>
						<?= $dt_kar->merk_laptop ?>
					</td>
					<td>
						<?= $dt_kar->aset_komitel ?>
					</td>
					<td>
						<?= $dt_kar->no_aset ?>
					</td>
					<td>
						<?= $dt_kar->id_komitel ?>
					</td>
					<td>
						<?= $dt_kar->id_laptop ?>
					</td>
					<td>
						<?= $dt_kar->sn_laptop ?>
					</td>
					<td>
						<?= $dt_kar->tgl_pemakaian ?>
					</td>
					<td>
						<?= $dt_kar->perusahaan_sewa ?>
					</td>
					<td>
						<?= $dt_kar->keterangan_laptop ?>
					</td>
					<td>
						<?= $dt_kar->yakes ?>
					</td>
					<td>
						<?= $dt_kar->bpjs_kesehatan ?>
					</td>
					<td>
						<?= $dt_kar->bpjs_ketenagakerjaan ?>
					</td>
					<td>
						<?= $dt_kar->username ?>
					</td>
					<td>
						<?= $dt_kar->password ?>
					</td>
					<td>
						<?= $dt_kar->id_level ?>
					</td>
			
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
</table>
<?php if($this->session->flashdata('pesan')!=null): ?>
<div class="alert alert-danger">
	<?= $this->session->flashdata('pesan');?>
</div>
<?php endif?>

<!-- Modal -->

<!-- <script>
	function tm_detail(id_peminjaman) {
		$.getJSON("<?=base_url()?>index.php/Peminjaman/get_detail_peminjaman/" + id_peminjaman, function (data) {
			$("#id_peminjaman").val(data['id_peminjaman']);
			$("#id_inventaris").val(data['id_inventaris']);
			$("#tanggal_pinjam").val(data['tanggal_pinjam']);
			$("#tanggal_kembali").val(data['tanggal_kembali']);
			$("#status_peminjaman").val(data['status_peminjaman']);
			$("#id_pegawai").val(data['id_pegawai']);

		});
	}

</script> -->
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
		],

	});
</script>
