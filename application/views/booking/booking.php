<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="<?php echo base_url('assets/kiky/css/style.css') ?>">
	<title>BEETS</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" type="image/png" href="<?= base_url('assets/admin/img/anjay.jpg') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/kiky/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/kiky/css/animate.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/kiky/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/kiky/css/style.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css3/style.css') ?>">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lora:700italic' rel='stylesheet' type='text/css'>
</head>

<bod
y>

	<!-- =========================
     PRE LOADER       
============================== -->
	<div class="preloader">
		<div class="sk-spinner sk-spinner-pulse"></div>
	</div>
	<!-- =========================
    NAVIGATION SECTION   
============================== -->
	<div class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="container">

			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<a href="<?= base_url(); ?>" class="navbar-brand">BeeTS</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?= base_url(); ?>" class="smoothScroll">Beranda</a></li>
					<li><a href="<?= base_url('/#testimonial'); ?>" class="smoothScroll">Testimoni</a></li>
				</ul>
			</div>
		</div>
	</div>

	<section id="blog-header" class="parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8 col-sm-12">
					<h3 class="wow bounceIn" data-wow-delay="0.9s">Kami akan membantu Anda menemukan dan memesan tiket untuk pariwisata anda</h3>
					<h1 class="wow fadeInUp" data-wow-delay="1.6s">Destinasi Pariwisata di Kota SEMARANG</h1>
				</div>
			</div>
		</div>
	</section>


	<section id="blog" class="parallax-section">
		<div class="container">
			<div class="row">

				<div class="col-md-15 col-sm-15">

					<div class="blog-content wow fadeInUp" data-wow-delay="1s">
						<h2>Daftar Destinasi :</h2>
						<span class="meta-comments"><a href="#blog-comments">Destinasi Pariwisata</a></span>
						<span class="meta-author"><a href="#blog-author">BEETS</a></span>
						<div class="blog-clear"></div>
					</div>
				</div>

				<!-- Content Row -->
				<?php foreach ($Agen as $a) : ?>
					<div class="column">
						<!-- <div class="card text-white bg-secondary my-5 py-4 text-center"> -->
						<div class="card text-white bg-secondary my-12 py-10">
							<div class="col-md-4 mb-5">
								<div class="card h-100">
									<div class="card-body">
										<!-- <h2 class="card-title"><?= $a['nama']; ?></h2> -->
										<blockquote><?= $a['kategori']; ?></blockquote>
										<?php
										$oy = $a['alamat'];
										$alamat = word_limiter($oy, 3); ?>
										<p class="card-text">Alamat : <?= $alamat; ?><br>Jam buka : 08.00-17.00 <br>Kontak : <?= $a['kontak']; ?>
									</div>
									<div class="card-footer">
										<a href="<?= base_url('Pemesanan/form/' . $a['no_agen']) ?>" class="btn btn-primary btn-sm-3">Boking Sekarang</a><br /><br /><br /><br />
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</section>

	<section id="blog" class="parallax-section">
		<div class="container">
			<div class="row">
				<h2 class="wow fadeInUp" data-wow-delay="1.6s">Konfirmasi Pesanan bisa menghubungi Admin dibawah ini : </h2>
				</br>
				<a href="https://api.whatsapp.com/send?phone=6285225245638&text=Hallo%20min%20saya%20ingin%20melakukan%20pembayaran%20BeeTs%0A%20Format%20Konfirmasi%20: %0A%0A%20Nama%20 : %0A%20Tanggal%20 %20masuk%20 : %0A%20No%20.%20Wa%20 :%0A%0A%20Terimakasih." class="btn btn-warning"> Konfirmasi pesanan</a>
			</div>
		</div>
	</section>

	<section id="blog" class="parallax-section">
		<div class="container">
			<div class="row">
				<div class="blog-comment-form wow fadeInUp" data-wow-delay="1s">
					<h3>Tulis Testimoni / Review kami</h3>
					<form action="<?= base_url('pemesanan/verif_input_testimoni'); ?>" method="POST" id="comment-form">
						<div class="col-md-6 col-sm-6">
							<input type="text" class="form-control" autocomplete="off" placeholder="Nama Anda" name="name" id="name" required>
						</div>
						<div class="col-md-6 col-sm-6">
							<input type="email" class="form-control" autocomplete="off" placeholder="BeeTS@gmail.com" name="email" id="email" required>
						</div>
						<div class="col-md-12 col-sm-12">
							<textarea class="form-control" placeholder="Tulis Testimoni" autocomplete="off" rows="5" name="komentar" required id="komentar"></textarea>
						</div>
						<div class="col-md-3 col-sm-3">
							<input name="submit" type="submit" class="form-control" id="submit" value="kirim">
						</div>
					</form>
				</div>
			</div>
		</div>




		<!-- =========================
    FOOTER SECTION   
============================== -->
		<footer>
			<div class="container">
				<div class="row">

					<div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.6s">
						<h2>Tentang BeeTS</h2>
						<p>BeeTS merupakan aplikasi berbasis website dimana website tersebut berisikan informasi tempat wisata dikota atlas yaitu Kota Semarang. Dengan aplikasi BeeTS ini, tidak ragu lagi dengan informasi tempat pariwisata yang ada diSemarang. Hehe.</p>
					</div>

					<div class="wow fadeInUp col-md-5 col-sm-4" data-wow-delay="0.9s">
						<h2>Terima Kasih</h2>
						<div>
							<h4>Bu AYU PERTIWI, S.Kom, MT</h4>
							<h5>Dosen RPLL Di Universitas Dian Nuswantoro</h5>
						</div>
						<div>
							<h4>Codeigniter & Bootstrap</h4>
							<h5>Sebagai Komponen Website BeeTS</h5>
						</div>
					</div>

					<div class="wow fadeInUp col-md-3 col-sm-4" data-wow-delay="1s">
						<h2>Follow BeeTS</h2>
						<ul class="social-icon">
							<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="1s"></a></li>
							<li><a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="1.3s"></a></li>
							<li><a href="#" class="fa fa-instagram wow fadeIn" data-wow-delay="1.6s"></a></li>
							<li><a href="#" class="fa fa-youtube wow fadeInUp" data-wow-delay="1.9s"></a></li>
							<li><a href="#" class="fa fa-whatsapp wow fadeIn" data-wow-delay="2s"></a></li>
						</ul>
					</div>

					<div class="clearfix"></div>

					<div class="col-md-12 col-sm-12">
						<p class="copyright-text">Copyright &copy; <?php echo date("Y") ?> BEETS

							| Design: By BEETS Developer</p>
					</div>

				</div>
			</div>
		</footer>

		<!-- =========================
     SCRIPTS   
============================== -->
		<!-- <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script> -->
		<script src="<?php echo base_url('assets/kiky2/js/jquery.js') ?>"></script>
		<script src="<?php echo base_url('assets/kiky2/js/bootstrap.min.js') ?>"></script>
		<script src="<?php echo base_url('assets/kiky2/js/jquery.parallax.js') ?>"></script>
		<script src="<?php echo base_url('assets/kiky2/js/wow.min.js') ?>"></script>
		<script src="<?php echo base_url('assets/kiky2/js/custom.js') ?>"></script>

</body>

</html>