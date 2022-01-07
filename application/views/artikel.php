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
			<a href="<?= base_url();?>" class="navbar-brand">BeeTS</a>
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
            <?php foreach($data as $d):?>
			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<h3 class="wow bounceIn" data-wow-delay="0.9s">Artikel</h3>
				<h1 class="wow fadeInUp" data-wow-delay="1.6s"><?= $d['cabang']; ?></h1>
			</div>
		</div>
	</div>
</section>

<section id="blog" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-8 col-sm-7">

				<div class="blog-content  wow fadeInUp" data-wow-delay="1s">
                        <h2><?= $d['cabang'];
                        $kirts=$d['cabang'] ?></h2>
                        <p><?= $d['isi']; ?></p>\
                    <?php endforeach; ?>
				</div>
			
				<div class="blog-author wow fadeInUp" data-wow-delay="1s">
					<div class="media">
						<div class="media-object pull-left">
						<a href="#"><img src="<?= base_url('assets/admin/img/anjay.jpg')?>" class="img-responsive img-circle" alt="blog"></a>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Tim BeeTS</h4>
							<p>Terima kasih sudah Berkunjung, Semoga Allah menganugrahkan kita ilmu yang berkah dan bermanfaat ya teman - teman :)</p>
						</div>
					</div>
				</div>

			</div>

			<div class="col-md-4 col-sm-5 wow fadeInUp" data-wow-delay="1.3s">
            
            	<div class="blog-categories">
                    <h3>Artikel Lainnya</h3>
                        <?php foreach($materi as $m) :
                            if($m['cabang'] != $kirts):?>
                                <li><a href="<?= base_url('Artikel/get/'. $m['id_materi'])?>"><?= $m['cabang'];?></a></li>
                            <?php endif?>
						<!-- <li><a href="#">Basket</a></li>
                        <li><a href="#">Badminton</a></li> -->
                        <?php endforeach ?>
                </div>         
                <!-- <div class="recent-post">
					<h3>Terakhir Di Posting</h3>

						<div class="media">
							<div class="media-object pull-left">
								<a href="#"><img src="<?php echo base_url('assets/images3/blog-thumb1.jpg');?>" class="img-responsive" alt="blog"></a>
							</div>
							<div class="media-body">
								<h5>26 Juni 2020</h5>
								<h4 class="media-heading"><a href="#">Belajar Sepak Bola Bersama KIRTS</a></h4>
							</div>
						</div>
						<div class="media">
							<div class="media-object pull-left">
								<a href="#"><img src="<?php echo base_url('assets/images3//blog-thumb2.jpg')?>" class="img-responsive" alt="blog"></a>
							</div>
							<div class="media-body">
								<h5>26 Juni 2020</h5>
								<h4 class="media-heading"><a href="#">Belajar Basket Bersama KIRTS</a></h4>
							</div>
						</div>
				</div>    -->
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
<script src="<?php echo base_url('assets/kiky/js/jquery.js') ?>"></script>
<script src="<?php echo base_url('assets/kiky/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/kiky/js/jquery.parallax.js') ?>"></script>
<script src="<?php echo base_url('assets/kiky/js/wow.min.js') ?>"></script>
<script src="<?php echo base_url('assets/kiky/js/custom.js') ?>"></script>
<!-- // <script src="js/jquery.js"></script>
// <script src="js/bootstrap.min.js"></script>
// <script src="js/jquery.parallax.js"></script>
// <script src="js/wow.min.js"></script>
// <script src="js/custom.js"></script> -->

</body>
</html>
