<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-10">
            <form action="<?= base_url('admin/verif_input_agen'); ?>" method="POST">
                <div class="form-group row">
                    <label for="1" class="col-sm-2  col-form-label">Nama Agen</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="1" name="nama" placeholder="Tulis Nama Agen Penanggung Jawab" autocomplete="off">
                    </div>
                </div>

                <!-- select -->
                <div class="form-group row">
                    <label for="2" class="col-sm-2 col-form-label">Nama Tempat Wisata</label>
                    <div class="col-sm-10"> 
					<input type="text" class="form-control" id="1" name="kategori" placeholder="Tulis Tempat Destinasi" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="3" class="col-sm-2 col-form-label">Kontak</label>
                    <div class="col-sm-10">
                        <textarea name="kontak" class="form-control" placeholder="Tulis nomor yang dapat dihubungi" id="3" rows="4" autocomplete="off"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="4" class="col-sm-2 col-form-label">Fasilitas</label>
                    <div class="col-sm-10">
						<textarea name="fasilitas" class="form-control" placeholder="Tulis Fasilitas yang diunggulkan" id="4" rows="4" autocomplete="off"></textarea>
						<script>
                            CKEDITOR.replace('fasilitas');
                        </script>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="5" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="alamat" class="form-control" placeholder="Tulis Alamat" id="5" rows="4" autocomplete="off"></textarea>
                    </div>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= base_url('admin/agen'); ?>" class="btn btn-danger">Batal</a>
                
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
