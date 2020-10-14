<section class="wrapper">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title"><b>Data Karyawan PT DAYA MITRA TELEKOMUNIKASI</b></h3>
							<p class="panel-subtitle"><b>Hari/Tanggal : <?php echo date('l, d M Y') ?></b></p>
							<!-- <p class="panel-subtitle">Hari/Tanggal : <?php echo date(' h:i:s A') ?></p> -->
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-address-book"></i></span>
										<p>
										<span class="number"><?php echo $jml_karyawan->jml_karyawan; ?></span>
											<span class="title">Karyawan</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-laptop"></i></span>
										<p>
										<span class="number"><?php echo $jml_laptop->jml_laptop; ?></span>
											<span class="title">Pinjaman Barang</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-inbox"></i></span>
										<p>
										<span class="number"><?php echo $jml_request->jml_request; ?></span>
											<span class="title">Request</span>
										</p>
									</div>
								</div>
								
							</div>
							<div class="row">
								<div class="col-md-9">
								<img class="img-responsive" style="margin-left: auto; margin-right: auto;"src="<?=base_url()?>assets/img/bg.png" class="" alt="">
								</div>
								<!-- <div class="col-md-3">
									
								</div> -->
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
			
							<!-- MULTI CHARTS -->
						
							<!-- END MULTI CHARTS -->
					
							<!-- TODO LIST -->
							
							<!-- END REALTIME CHART -->
					