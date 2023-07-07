<!DOCTYPE html>
<?php
include 'config/koneksi.php';
include 'config/fungsi_indotgl.php';
?>

<?php $sql =  mysql_query("SELECT * FROM pengumuman"); ?>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistem Online Kerja Praktek dan Skipsi</title>

	<link rel="icon" href="dist/img/logoUnnur.png">
	<link rel="shortcut icon" href="dist/img/logoUnnur.png">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="dist/css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="dist/css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="dist/css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="dist/fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="dist/fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="dist/css/cardio.css">
</head>

<body>

	<div class="preloader">
		<img src="dist/img/loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="dist/img/logoUnnur.png" width="125" data-active-url="dist/img/logoUnnur.png" alt=""></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="#intro">Beranda</a></li>
					<li><a href="#services">Pengumuman</a></li>
					<li><a href="#services">Pengumuman2</a></li>
					<li><a href="#team">Staff FIKI</a></li>
					<li><a href="#pricing">Tentang FIKI</a></li>
					<li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue">Login</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<header id="intro">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							<h1 class="white typed">Selamat Datang Para Pejuang Skripsi</h1>
							<h3 class="light white">FAKULTAS ILMU KOMPUTER DAN INFORMATIKA</h3>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section>
		<div class="cut cut-top"></div>
		<div class="container">
			<div class="col-md-4">
				<div class="service">
					<div class="icon-holder">
						<img src="dist/img/icons/guru-blue.png" alt="" class="icon">
					</div>
					<h4 class="heading">Syarat Pengajuan Proposal</h4>
					<a href="file/Pengajuan Proposal.pdf" class="description">detail</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service">
					<div class="icon-holder">
						<img src="dist/img/icons/guru-blue.png" alt="" class="icon">
					</div>
					<h4 class="heading">Alur Pengajuan Proposal</h4>
					<a href="file/Alur Proposal.pdf" class="description">detail</a>
				</div>
			</div>
		</div>
	</section>
	<section id="services" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>PENGUMUMAN</h2>
				<h4 class="light muted">Pengumuman bisa berubah kapan saja, Aktif berkunjung ya... Terima kasih!</h4>
			</div>
			<div class="row services">

				<?php

				while ($data = mysql_fetch_array($sql)) {
					$judul = $data['judul'];
					$tgl = tgl_indo($data['tgl_pengumuman']);

				?>
					<div class="col-md-4">
						<div class="intro-table intro-table-hover">
							<div class="bottom">
								<h4 class="white heading hide-hover" align="center"><?php echo "$judul"; ?></h4>
								<h4 class="white heading small-pt"><?php echo "$tgl"; ?></h4>
								<?php echo "<a href='file/$data[file]' class='btn btn-white-fill expand'>Download File</a>"; ?>
							</div>
						</div>
					</div>
				<?php
				}
				?>

			</div>
		</div>
		<div class="cut cut-bottom"></div>
	</section>
	<section id="services" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>PENGUMUMAN2</h2>
				<h4 class="light muted">Pengumuman bisa berubah kapan saja, Aktif berkunjung ya... Terima kasih!</h4>
			</div>
			<div class="row services">

				<?php

				while ($data = mysql_fetch_array($sql)) {
					$judul = $data['judul'];
					$tgl = tgl_indo($data['tgl_pengumuman']);

				?>
					<div class="col-md-4">
						<div class="intro-table intro-table-hover">
							<div class="bottom">
								<h4 class="white heading hide-hover" align="center"><?php echo "$judul"; ?></h4>
								<h4 class="white heading small-pt"><?php echo "$tgl"; ?></h4>
								<?php echo "<a href='file/$data[file]' class='btn btn-white-fill expand'>Download File</a>"; ?>
							</div>
						</div>
					</div>
				<?php
				}
				?>

			</div>
		</div>
		<div class="cut cut-bottom"></div>
	</section>
	<section id="team" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top">Staff Fakultas Ilmu Komputer dan Informatika</h2>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('dist/img/team/team-cover1.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">Fakultas Ilmu Komputer dan Informatika</h3>
							</div>
						</div>
						<img src="dist/img/team/dekan.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Dekan Fakultas <br>
								Ilmu Komputer dan Informatika</h4>
							<h5 class="muted regular">Dr. Samsul Budiarto, S.T., M.T. </h5>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('dist/img/team/team-cover2.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">Fakultas Ilmu Komputer dan Informatika</h3>
							</div>
						</div>
						<img src="dist/img/team/wadek1.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Wakil Dekan I<br>
							Ilmu Komputer dan Informatika
							</h4>
							<h5 class="muted regular">Suharjato Utomo, S.Si., M.T.</h5>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('dist/img/team/team-cover3.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">Fakultas Ilmu Komputer dan Informatika</h3>
							</div>
						</div>
						<img src="dist/img/team/wadek2.png" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Wakil Dekan II<br>
								Ilmu Komputer dan Informatika</h4>
							<h5 class="muted regular">Sri Sutjiningtyas, S.Pd., M.Kom.</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="pricing" class="section">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top white">Tentang Fakultas Ilmu  komputer dan Informatika</h2>
				<h4 class="light white">Mengenal lebih dekat dengan Fakultas Ilmu Komputer dan Informatika</h4>
				<h4 class="margin-top white">Visi Fakultas Ilmu Komputer dan Informatika</h4>
				<h4 class="light white">“Pada Tahun 2020 Menjadi Program Studi yang mampu bersaing dalam tataran global serta menghasilkan Lulusan yang Berkompeten dan profesional di bidang Teknologi Informasi khususnya Rekayasa Perangkat Lunak dan Sistem Informasi serta menjadi pusat keunggulan di bidang pendidikan, penelitian dan pengembangan ilmu pengetahuan dan teknologi dibidang Teknologi Informasi”.
					Berkompeten, mengandung arti bahwa lulusan Program Studi di Teknik Informatika Universitas Nurtanio Bandung memiliki kemampuan atau kecakapan yang mencakup pengetahuan, keterampilan dan sikap sesuai dengan standar yang ditentukan oleh Universitas.
					Profesional, mengandung arti bahwa lulusan Program Studi Teknik Informatika memiliki kemampuan dalam mencapai standar yang sudah ditentukan oleh Program Studi.</h4>
				<h4 class="margin-top white">Misi Fakultas Ilmu Komputer dan Informatika</h4>
				<h4 class="light white">1. Mengembangkan sistem dan proses belajar mengajar dibidang Teknologi Informasi khususnya Rekayasa Perangkat Lunak dan Sistem Informasi serta mengembangkan pendidikan untuk menghasilkan lulusan profesional berkompeten, mandiri dan berkualitas.<br>
					2. Menyelenggarakan penelitian dibidang Teknologi Informasi khususnya Rekayasa Perangkat Lunak dan Sistem Informasi. <br>
					3. Memberikan sumbangsih kepada masyarakat dalam pengembangan teori, Sistem, Aplikasi, dan pemecahan berbagai permasalahan di bidang Teknologi Informasi khususnya Rekayasa Perangkat Lunak dan Sistem Informasi. <br>
					4. Meningkatkan jalinan kerja sama yang berkelanjutan dengan lembaga pemerintah, instansi dan atau industri swasta, dan masyarakat dalam rangka meningkatkan terselenggaranya kualitas pendidikan, penelitian dan pengabdian masyarakat. <br>
					5.Memberikan kesempatan pada civitas akademika untuk meningkatkan kompetensi melalui pendidikan dan pelatihan secara berkelanjutan.
				</h4>
			</div>

		</div>
	</section>
	<section class="section section-padded blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="owl-twitter owl-carousel">
						<div class="item text-center">
							<i class="icon fa fa-yelp"></i>
							<h4 class="white light">Program Studi Fakultas Ilmu Komputer dan Informatika</h4>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-yelp"></i>
							<h4 class="white light">Program Studi Teknik Informatika</h4>
							<h4 class="light-white light">Pada Program Studi Teknik Informatika mendalami tentang ilmu komputer dan informasi<br> </h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white">Login</h3>
				<form method="POST" action="cek_login.php" class="popup-form">
					<input type="text" class="form-control form-white" placeholder="Username" name="username" required>
					<input type="password" class="form-control form-white" placeholder="Password" name="pass" required>
					<div class="dropdown">
						<select type="text" class="form-control" placeholder="Level" name="level">
							<option selected>Pilih Level</option>
							<option value="dekan">Dekan</option>
							<option value="kaprodi">Kaprodi</option>
							<option value="dosen">Dosen</option>
							<option value="mahasiswa">Mahasiswa</option>
							<option value="admin">Admin</option>
						</select>
					</div>
					<button type="submit" class="btn btn-submit" name="login">Login</button>
				</form>
			</div>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white"></h3>
					<h5 class="light regular light-white"></h5>

				</div>

			</div>
	</footer>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="dist/js/jquery-1.11.1.min.js"></script>
	<script src="dist/js/owl.carousel.min.js"></script>
	<script src="dist/js/bootstrap.min.js"></script>
	<script src="dist/js/wow.min.js"></script>
	<script src="dist/js/typewriter.js"></script>
	<script src="dist/js/jquery.onepagenav.js"></script>
	<script src="dist/js/main.js"></script>
</body>

</html>