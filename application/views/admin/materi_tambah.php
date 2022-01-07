<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h3 class="h3 mb-4 text-gray-800"><?= $title; ?></h3>

    <div class="row">
        <div class="col-lg-11">
        <form action="<?= base_url('admin/verif_input_materi'); ?>" method="POST">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Tulis judul materi" autocomplete="off">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="10" name="isi" id="isi" placeholder="Tulis isi artikel"><?= set_value('isi'); ?></textarea>
                        <script>
                            CKEDITOR.replace('isi');
                        </script>
                        <?= form_error('isi', '<small class="text-danger pl-1">', '</small>') ?>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-2">Gambar pendukung</div>
                    <div class="col-sm-4">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/admin/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="gambar" name="gambar">
                            <label class="custom-file-label" for="gambar">Pilih file</label>
                            <!-- <?= form_error('gambar', '<small class="text-danger pl-1">', '</small>') ?> -->
                        </div>
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="<?= base_url('admin/api'); ?>" class="btn btn-danger btn">Batal</a>
                    </div>
                </div>
        </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->