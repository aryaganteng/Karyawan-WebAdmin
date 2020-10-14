<!doctype html>
<html lang="en">

<head>
	<title>PROFIL KARYAWAN PT DAYA MITRA TELEKOMUNIKASI</title>
	<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
    <style type="text/css">
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color: #fff;
    }
    .preloader .loading {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
      font: 14px arial;
    }
    </style>
<script>
    $(document).ready(function(){
      $(".preloader").fadeOut();
    })
    </script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=base_url()?>assets/img/m.png">
</head>

<body>
	<div class="preloader">
      <div class="loading">
        <img src="<?=base_url()?>assets/img/sa.gif" width="400px">
        <!-- <p><b>Please Wait...</b></p> -->
      </div>
    </div>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="<?=base_url()?>index.php/template"><img src="<?=base_url()?>assets/img/logo.png" alt="Mitratel Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?=base_url()?>assets/img/users.png" class="img-circle" alt="Avatar"> <span><?php echo $this->session->userdata('username'); ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="<?=base_url()?>index.php/Logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					 <?php
						if($this->session->userdata('nama_level') =='admin'){
					?>
					<ul class="nav">
						<li><a href="<?=base_url()?>index.php/template" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
					</ul>
					<ul class="nav">
						<li><a href="<?=base_url()?>index.php/karyawan" class=""><i class="lnr lnr-users"></i> <span>Karyawan</span></a></li>
					</ul>
					<ul class="nav">
										<li><a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-list"></i> <span>Opsi Karyawan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a></li>
										<div id="subPages" class="collapse ">
											<ul class="nav">
												<li><a href="<?php echo base_url('index.php/newkar'); ?>" class=""><i class="lnr lnr-cog"></i> <span>Edit Karyawan</span></a></li>
												<li><a href="<?php echo base_url('index.php/printkar'); ?>" class=""><i class="lnr lnr-printer"></i> <span>Print Karyawan</span></a></li>
											</ul>
										</div>
					</ul>
					<ul class="nav">
						<li><a href="<?=base_url()?>index.php/laptop" class=""><i class="lnr lnr-laptop"></i> <span>Pinjaman Barang</span></a></li>
					</ul>
					<ul class="nav">
						<li><a href="<?=base_url()?>index.php/request" class=""><i class="lnr lnr-inbox"></i> <span>Request</span></a></li>
					</ul>
					<ul class="nav">
						<li><a href="<?=base_url()?>index.php/pengajuan" class=""><i class="lnr lnr-rocket	"></i> <span>Pengajuan</span></a></li>
					</ul>
					<?php
						}elseif ($this->session->userdata('nama_level') == 'operator') {
					?>
					<ul class="nav">
						<li><a href="<?=base_url()?>index.php/template" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
					</ul>
					<ul class="nav">
						<li><a href="<?=base_url()?>index.php/karyawan" class=""><i class="lnr lnr-users"></i> <span>Karyawan</span></a></li>
					</ul>
					<ul class="nav">
						<li><a href="<?=base_url()?>index.php/pengajuan" class=""><i class="lnr lnr-inbox"></i> <span>Request</span></a></li>
					</ul>
					
					<?php
						}
						?>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
				 <?php
          			$this->load->view($konten);
          		 ?>
			</div>
		</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2019. All Rights Reserved by <a href="http://www.mitratel.co.id/" target="_blank">PT Dayamitra Telekomunikasi</a></p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="<?=base_url()?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?=base_url()?>assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?=base_url()?>assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="<?=base_url()?>assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="<?=base_url()?>assets/scripts/klorofil-common.js"></script>
	<script>
	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);


		// visits trend charts
		data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [{
				name: 'series-real',
				data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			}, {
				name: 'series-projection',
				data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
			}]
		};

		options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

		new Chartist.Line('#visits-trends-chart', data, options);


		// visits chart
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[6384, 6342, 5437, 2764, 3958, 5068, 7654]
			]
		};

		options = {
			height: 300,
			axisX: {
				showGrid: false
			},
		};

		new Chartist.Bar('#visits-chart', data, options);


		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function(percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval(function() {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});
	</script>
</body>

</html>
