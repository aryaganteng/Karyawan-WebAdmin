<h1 style="text-align: center;"><b> Data Karyawan</b></h1>
<br>
<div class="col-md-12">
	<div class="row">
	<div class="row"><input type="text" name="cari" id="cari" class="form-control" placeholder="Cari Disini"></div>
	<br>
 <div id="tampil_karyawan"></div>
</div>
</div>

<div class="modal fade" id="detail_karyawan">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">Detail Karyawan</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						<div id="gambar"></div>
					</div>
					<div class="col-md-6">
						<div id="deskripsi"></div>
						<br>
						<div id="btn"></div>
						<br>
						<div id="pesan"></div>
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	//cari barang
    $("#cari").on('keyup', function(){
        $.getJSON("<?=base_url()?>index.php/get_karyawan/cari/"+$("#cari").val(),
        function(data){
            var datanya="";
            $.each(data,function(key,dt){
                datanya+=
                '<div class="col-xs-6 col-md-3" style="max-width: 50%;"><a href="#detail_karyawan" '+
                'class="thumbnail text-center" data-toggle="modal" onclick="tm_detail('+dt['id_karyawan']+')" style="text-decoration:none">'+
                '<img style="height:100px" src="<?=base_url('assets/gambar/')?>'+
                dt['gambar']+'" alt="...">'+dt['nama_karyawan']+'<br>'+dt['nik']+
                '</a>'+
                '</div>';
            });
            $("#tampil_karyawan").html(datanya);
        });
    });	

    //menampilkan semua Barang
	$.getJSON("<?=base_url()?>index.php/get_karyawan",function(data1){
		var datanya="";
		$.each(data1, function(key,dt){
			datanya+='<div class="col-xs-6 col-md-3"><a href="#detail_karyawan" '+
                'class="thumbnail text-center" data-toggle="modal" onclick="tm_detail('+dt['id_karyawan']+')" style="text-decoration:none">'+
                '<img style="height:100px" src="<?=base_url('assets/gambar/')?>'+
                dt['gambar']+'" alt="...">'+dt['nama_karyawan']+'<br>'+dt['nik']+
                '</a>'+
                '</div>';
		});
		$("#tampil_karyawan").html(datanya);
	});
	

	function tm_detail(id_karyawan){
		$.getJSON("<?=base_url()?>index.php/get_karyawan/detail/"+id_karyawan,function(data){
			$("#gambar").html(
				'<img src="<?=base_url()?>assets/gambar/'+data['gambar']+'" style="width:100%">'
			);
			$("#deskripsi").html(
			'<table class="table-striped">'+
			'<tr><td>Nik DMT</td><td>'+data['nik']+'</td></tr>'+
			'<tr><td>Nik TG</td><td>'+data['nik_tg']+'</td></tr>'+
			'<tr><td>Nama Karyawan</td><td>'+data['nama_karyawan']+'</td></tr>'+
			'<tr><td>Level</td><td>'+data['level']+'</td></tr>'+
			'<tr><td>Status</td><td>'+data['status']+'</td></tr>'+
			'<tr><td>Kontrak</td><td>'+data['kontrak']+'</td></tr>'+
			'<tr><td>Regional</td><td>'+data['regional']+'</td></tr>'+
			'<tr><td>Tanggal Kontrak</td><td>'+data['tgl_kontrak']+'</td></tr>'+
			'<tr><td>Keterangan</td><td>'+data['keterangan']+'</td></tr>'+
			'<tr><td>Jabatan</td><td>'+data['jabatan']+'</td></tr>'+
			'<tr><td>Email</td><td>'+data['email']+'</td></tr>'+
			'<tr><td>Mobile</td><td>'+data['no_telp']+'</td></tr>'+
			'<tr><td>Pendidikan</td><td>'+data['pendidikan']+'</td></tr>'+
			'<tr><td>Agama</td><td>'+data['agama']+'</td></tr>'+
			'<tr><td>Tanggal Lahir</td><td>'+data['tgl_lahir']+'</td></tr>'+
			'<tr><td>Start PKWT</td><td>'+data['pkwt']+'</td></tr>'+
			'<tr><td>Finish PKWT</td><td>'+data['perpanjangan_pkwt']+'</td></tr>'+
			'<tr><td>Amandemen</td><td>'+data['amandemen']+'</td></tr>'+
			'<tr><td>Start Kontrak</td><td>'+data['start_kontrak']+'</td></tr>'+
			'<tr><td>Finish Kontrak</td><td>'+data['finish_kontrak']+'</td></tr>'+
			'<tr><td>Alamat</td><td>'+data['alamat']+'</td></tr>'+
			'<tr><td>Merk Laptop</td><td>'+data['merk_laptop']+'</td></tr>'+
			'<tr><td>Nomor Aset DMT</td><td>'+data['aset_komitel']+'</td></tr>'+
			// '<tr><td>No Aset</td><td>'+data['no_aset']+'</td></tr>'+
			// '<tr><td>ID Komitel</td><td>'+data['id_komitel']+'</td></tr>'+
			'<tr><td>ID Laptop</td><td>'+data['id_laptop']+'</td></tr>'+
			'<tr><td>S/N Laptop</td><td>'+data['sn_laptop']+'</td></tr>'+
			'<tr><td>Tanggal Pemakaian</td><td>'+data['tgl_pemakaian']+'</td></tr>'+
			'<tr><td>Tanggal Berakhir</td><td>'+data['tgl_berakhir']+'</td></tr>'+
			'<tr><td>Perusahaan Sewa</td><td>'+data['perusahaan_sewa']+'</td></tr>'+
			'<tr><td>Keterangan Laptop</td><td>'+data['keterangan_laptop']+'</td></tr>'+
			'<tr><td>YAKES</td><td>'+data['yakes']+'</td></tr>'+
			'<tr><td>BPJS Kesehatan</td><td>'+data['bpjs_kesehatan']+'</td></tr>'+
			'<tr><td>BPJS Ketenagakerjaan</td><td>'+data['bpjs_ketenagakerjaan']+'</td></tr>'+
			'<tr><td>Username</td><td>'+data['username']+'</td></tr>'+
			'<tr><td>Password</td><td>'+data['password']+'</td></tr>'+
			'</table>'
			);
			$("#btn").html(
			'<a href="<?=base_url()?>index.php/newkar" class="btn btn-danger">Edit Karyawan</a>');
		});
	}
</script>