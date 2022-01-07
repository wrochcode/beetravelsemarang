<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h3 class="h3 mb-4 text-gray-800"><?= $title; ?></h3>
    <?php foreach($data as $d)
    {?>
    <div class="row">
        <div class="col-lg-11">
            <form action="<?= base_url('admin/verif_edit_materi')?>" method="post" >
            <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">Id materi</label>
                    <div class="col-sm-2">
                    <input type="text" class="form-control" id="id" name="id" value="<?= $d['id_materi']; ?>" readonly>
                    </div>
                </div>
            
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" name="judul" rows="4" value="<?= $d['cabang']; ?>">
                    </div>
                    <!-- <textarea name="" id="" cols="30" rows="10"></textarea> -->
                </div>

                <div class="form-group row">
                    <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="50" name="isi" id="isi" placeholder="Isi Artikel"><?= $d['isi']; ?></textarea>
                        <script>
                            CKEDITOR.replace('isi');
                        </script>
                    </div>
                </div>
                
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="<?= base_url('admin/materi'); ?>" class="btn btn-danger btn">Batal</a>
                    </div>
                </div>
            <!-- <?= form_close(); ?> -->
            </form>

        </div>
    </div>
<?php } ?>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->