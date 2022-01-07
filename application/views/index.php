<!DOCTYPE html>
<html lang="en">
	
<head>
	<title>BEETS</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<link rel="icon" type="image/png" href="<?= base_url('assets/admin/img/anjay.jpg')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css') ?>">

	<!-- css utamaaaaa -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">

	<!-- masukkan Google Font -->
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lora:700italic' rel='stylesheet' type='text/css'>

</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<div  class="preloader">

	<div class="sk-spinner sk-spinner-pulse"></div>

</div>


<!-- =========================
    BAGIAN NAVIGASI   
============================== -->
<div class="navbar navbar-default navbar-fixed-top sticky-navigation" role="navigation">
	<div class="container">

		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">BeeTS</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right main-navigation">
				<li><a href="#home" class="smoothScroll">Beranda</a></li>
				<li><a href="#overview" class="smoothScroll">Definisi</a></li>
				<li><a href="#blog" class="smoothScroll">Article</a></li>
				<li><a href="#price" class="smoothScroll">Boking</a></li>
				<li><a href="#testimonial" class="smoothScroll">Testimoni</a></li>
			</ul>
		</div>
	</div>
</div>


<!-- =========================
    BAGIAN HOME  
============================== -->
<section id="home" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-1 col-md-10 col-sm-12">
				<h3 class="wow bounceIn" data-wow-delay="0.9s"><b>Hi! Selamat Datang Di Website</b></h3>
				<h1 class="wow fadeInUp" data-wow-delay="1.6s">BeeTS<br>Bee Travel Semarang</h1>
				<a href="#overview" class="wow fadeInUp smoothScroll btn btn-default" data-wow-delay="2s">Klik Disini Untuk Melanjutkan</a>
			</div>

		</div>
	</div>
</section>


<!-- =========================
    BAGIAN ABOUT
============================== -->
<section id="overview" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-6 col-sm-12">
				<img src="<?php echo base_url('assets/images/overview-img.jpg') ?>" class="img-responsive" alt="Overview">
				<blockquote class="wow fadeInUp" data-wow-delay="1.9s">Refreshing merupakan kegiatan yang dilakukan untuk menyegarkan tubuh dan pikiran. Hal itu dibutuhkan untuk menghilangkan kejenuhan akan rutinitas yang ada, contohnya berwisata.</blockquote>
			</div>

			<div class="col-md-1"></div>

			<div class="wow fadeInUp col-md-4 col-sm-12" data-wow-delay="1s">
				<div class="overview-detail">
					<h2>TRAVEL ITU PENTING? </h2>
					<p>Traveling dapat menjauhkan Anda dari stres akibat rutinitas sehari-hari, memulihkan tubuh dan pikiran dari kepenatan, membuat rileks dan memberikan pengalaman-pengalaman baru pada Anda.</p>
					<p>Tak jarang, pengalaman-pengalaman yang didapatkan ketika traveling mampu menghasilkan wawasan dan pola pikir baru yang lebih segar sehingga membantu Anda dalam menghadapi segala problematika dalam hidup.</p>
				</div>
			</div>

			<div class="col-md-1"></div>

		</div>
	</div>
</section>

<!-- =========================
    BAGIAN BLOG   
============================== -->
<section id="blog" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12 text-center">
				<h2>Article Pariwisata</h2>
				<p>Berikut ini adalah artikel yang memungkinkan liburan anda menjadi berkualitas.</p>
			</div>

			<?php foreach($materi as $m) 
			{?>
				<a href="<?= base_url('Artikel/get/'. $m['id_materi'])?>">
					<div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.9s">
						<div class="blog-thumb">
							<span class="blog-date"><?php echo $m['cabang']; ?></span>
							<h3 class="blog-title"><?php echo $m['cabang'];?></h3>
							<h5 id="blog-author">By BeeTS</h5>
						</div>
					</div>
				</a>
			<?php }?>
		</div>
	</div>
</section>


<!-- =========================
    BAGIAN pesan
============================== -->
<section id="price" class="parallax-section">
	<div class="container">
	<div class="row">

<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.9s">
	<!-- <h2>Boking Lapangan</h2>
	<p>kami akan membantu Anda menemukan tempat olahraga yang paling dekat dengan Anda sesuai dengan kebutuhan Anda.</p> -->
</div>

<div class="wow fadeInDown col-md-15 col-sm-12" data-wow-delay="1s">
	<div class="pricing__item">
		<h3 class="pricing__title">Pesan Tiket</h3><br>
		<blockquote>Kami akan membantu Anda menemukan dan memesan tiket untuk pariwisata anda</blockquote>
		<a href="<?= base_url('Pemesanan');?>"><button class="pricing__action">Klik Disini</button></a>
	</div>
</div>
</div>
	</div>
</section>


<!-- =========================
    BAGIAN TESTIMONI  
============================== -->
<section id="testimonial" class="parallax-section">
	<div class="container">
		<div class="col-md-12 col-sm-12 text-center">
			<h2>Testimoni Pengunjung dan Pariwisatawan</h2>
		</div>
		<div class="row">
			<!-- Testimonial Owl Carousel section
			================================================== -->
			<div id="owl-testimonial" class="owl-carousel">
				<?php 
				$indikasi=1;
				foreach($testimoni as $t) 
				{
					if($indikasi<=5)
					{?>
					<div class="item col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 wow fadeInUp" data-wow-delay="0.6s">
						<i class="fa fa-quote-left"></i>
						<h3><?= $t['komentar']; ?></h3>
						<h4><?= $t['nama']; ?></h4>
					</div>
				<?php }
					$indikasi++;
				}?>
			</div>
		</div>
	</div>
</section>


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
<script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.parallax.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.nav.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.backstretch.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/owl.carousel.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/smoothscroll.js') ?>"></script>
<script src="<?php echo base_url('assets/js/wow.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>

</body>
</html>
