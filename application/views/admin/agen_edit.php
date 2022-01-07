<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Form Edit</h1>

    <div class="row">
        <div class="col-lg-10">
            <?php foreach($data as $d)
            {?>
                <form action="<?= base_url('admin/verif_edit_agen'); ?>" method="POST">
                    <div class="form-group row">
                        <label for="1" class="col-sm-2  col-form-label">Id Agen</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="1" name="nomor" value="<?php echo $d['no_agen'];?>" autocomplete="off" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="2" class="col-sm-2  col-form-label">Nama Pemesan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="2" name="nama" value="<?php echo $d['nama'];?>" autocomplete="off">
                        </div>
                    </div>

                    <!-- select -->
                    <div class="form-group row">
                        <label for="3" class="col-sm-2 col-form-label">Nama Tempat Wisata</label>
                        <div class="col-sm-10">
							<textarea type="text" class="form-control" id="3" name="kategori" placeholder="Tulis Tempat Destinasi" autocomplete="off"><?php echo $d['kategori'];?></textarea>
                            <!-- <input name="kategori" class="form-control" value="<?php echo $d['kategori'];?>" id="3" rows="4" autocomplete="off"> -->
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="4" class=" col-sm-2 col-form-label">kontak</label>
                        <div class="col-sm-10">
                            <textarea name="kontak" class="form-control" id="4" rows="4" autocomplete="off"><?php echo $d['kontak'];?></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="5" class=" col-sm-2 col-form-label">Fasilitas</label>
                        <div class="col-sm-10">
							<textarea name="fasilitas" class="form-control" id="5" rows="4" autocomplete="off"><?php echo $d['fasilitas'];?></textarea>
							<script>
                            CKEDITOR.replace('fasilitas');
                        	</script>
                        </div>
					</div>
					

                    <div class="form-group row">
                        <label for="6" class=" col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea name="alamat" class="form-control" id="6" rows="4" autocomplete="off"><?php echo $d['alamat'];?></textarea>
                        </div>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?= base_url('admin/agen'); ?>" class="btn btn-danger">Batal</a>
                    
                </form>
            <?php }?>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
