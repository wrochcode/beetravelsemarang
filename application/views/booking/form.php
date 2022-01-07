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
	<link rel="icon" type="image/png" href="<?= base_url('assets/admin/img/anjay.jpg')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/kiky/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/kiky/css/animate.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/kiky/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/kiky/css/style.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css3/style.css') ?>">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:700italic' rel='stylesheet' type='text/css'>
</head>
<body>

<!-- =========================
     PRE LOADER       
============================== -->
<div  class="preloader">

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
			<a href="index.html" class="navbar-brand">BeeTS</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
            <li><a href="<?= base_url();?>" class="smoothScroll">Beranda</a></li>
				<li><a href="<?= base_url('/#testimonial');?>" class="smoothScroll">Testimoni</a></li>
			</ul>
		</div>

	</div>
</div>

<section id="blog-header" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12">
			<h1 class="wow fadeInUp" data-wow-delay="1.6s">Boking Pariwisata</h1>
				<h3 class="wow bounceIn" data-wow-delay="0.9s">Kami akan membantu Anda menemukan tempat olahraga yang sesuai dengan kebutuhan Anda.</h3>
			</div>
		</div>
	</div>
</section>
<section id="blog" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-26 col-sm-7">
				<div class="blog-content wow fadeInUp" data-wow-delay="1s">
                	<h2>Form Boking Destinasi Wisata</h2>
					<span class="meta-date"><a href="#"><?php echo date("D/M/Y") ?></a></span>
					<span class="meta-comments"><a href="#blog-comments">Start Up</a></span>
					<span class="meta-author"><a href="#blog-author">BeeTS</a></span>
                    <div class="blog-clear"></div>
                    <?php foreach($data as $d):?>
					<h2><?php echo $d['nama'];?></h2>
					<p><?php echo $d['fasilitas'];?></p> 
					<blockquote>
						<p>Alamat: <?php echo $d['alamat'];?></p>
						<p>Jam Buka : 09.00 - 20.00</p>
						<p>Telepon : <?php echo $d['kontak'];?></p>
					</blockquote>
					
					<div class="col-md-29 col-sm-19">
						<div class="booking-form">
                            <form action="<?= base_url('pemesanan/verif_input_booking'); ?>" method="POST">
                                <input class="form-control" name="agen" value="<?php echo $d['nama'];?>" type="hidden">
								<div class="form-group">
									<span for="nama" class="form-label">Masukkan Nama Anda</span>
									<input id="nama" class="form-control" type="text" name="nama" placeholder="Nama Lengkap" autocomplete="off" required>
								</div>
								<div class="form-group">
									<span for="hp" class="form-label">Masukkan No. HP / Whatsapp</span>
									<input id="hp" class="form-control" name="kontak" type="dialnumber" placeholder="+62" autocomplete="off" required>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Waktu & Jam</span>
											<input id="hp" class="form-control" name="waktu" type="date" placeholder="+62" required>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<span for="tanggal" class="form-label">Tanggal Masuk</span>
									<input id="tanggal" class="form-control" name="tanggal" type="text" value="<?php echo date("d-m-Y"); ?>" readonly required>
								</div>
								<?php $status = 0?>
								<input type="checkbox" value="<?php $status = 1?>"> Setujui untuk patuhi  protokol kesehatan dan lengkapi surat yang terkait dikarenakan COVID-19<br>
								<br>
								<div class="form-btn">
									<a href="<?= base_url('pemesanan'); ?>" class="btn btn-danger"> Kembali</a>
									<?php if($status==1)
									{
										?>
										<button type="submit" class="btn btn-success">Booking Sekarang</button><?php
									}
									else
									{
										?>
										<button type="submit" class="btn btn-success" aria-readonly="true">Booking Sekarang</button><?php
									}?>
									<a href="https://api.whatsapp.com/send?phone=6285225245638&text=Hallo%20min%20saya%20ingin%20melakukan%20pembayaran%20BeeTs%0A%20Format%20Konfirmasi%20: %0A%0A%20Nama%20 : %0A%20Tanggal%20 %20masuk%20 : %0A%20No%20.%20Wa%20 :%0A%0A%20Terimakasih." class="btn btn-primary"> Konfirmasi pesanan</a>
								</div>
                            </form>
                            <?php endforeach?>
						</div>
					</div>
                
				</div>
				<div class="blog-author wow fadeInUp" data-wow-delay="1s">
					<div class="media">
						<div class="media-object pull-left">
							<a href="#"><img src="<?= base_url('assets/admin/img/anjay.jpg')?>" class="img-responsive img-circle" alt="blog"></a>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Tim BeeTS</h4>
							<p>Terima kasih sudah Berkunjung teman - teman :)</p>
						</div>
					</div>
				</div>

			</div>

			<!-- <div class="col-md-4 col-sm-5 wow fadeInUp" data-wow-delay="1.3s">
            
            	<div class="blog-categories">
					<h3>List - Lapangan</h3>
						<li><a href="#">Volly</a></li>
						<li><a href="#">Basket</a></li>
						<li><a href="#">Badminton</a></li>
				</div>

				<div class="recent-post">
					<h3>Terakhir Di Booking</h3>

						<div class="media">
							<div class="media-body">
								<h5>26 Juni 2020</h5>
								<h4 class="media-heading"><a href="#">Futsall Knight Semarang</a></h4>
							</div>
						</div>
						<div class="media">
							<div class="media-body">
								<h5>26 Juni 2020</h5>
								<h4 class="media-heading"><a href="#">Lapangan Basket Udinus</a></h4>
							</div>
						</div>
				</div>
                
			</div> -->
			
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
