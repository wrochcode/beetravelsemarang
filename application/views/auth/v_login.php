<!DOCTYPE html>
<html>
<head>
	<title>Login Kirts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="<?= base_url('assets/admin/img/anjay.jpg')?>">

</head>
<body>
	<img class="wave" src="<?= base_url(); ?>assets/img2/wave.png">
	<div class="container">
		<div class="img">
			<img src="<?= base_url(); ?>assets/img2/bg.svg">
		</div>
		<div class="login-content">
			<form class="user" method="POST" action="<?= base_url('auth'); ?>">
                <?= $this->session->flashdata('message'); ?>
				<img src="<?= base_url(); ?>assets/img2/avatar.svg">
				<h2 class="title">Login Beets</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
                              <input type="text" class="input" id="email" name="email" value="<?= set_value('email'); ?>" >
                              <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i">
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
                           <input type="password" class="input" id="password" name="password">
                           <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
            	   </div>
            	</div>
                
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </div>
    
    <!-- <?= $this->session->flashdata('message'); ?>

                                <form class="user" method="POST" action="<?= base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" value="<?= set_value('email'); ?>" placeholder="Silahkan Masukkan Email Anda">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Silahkan Masukkan Password Anda">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url(); ?>">Kembali</a>
                                </div> -->



</body>
</html>
