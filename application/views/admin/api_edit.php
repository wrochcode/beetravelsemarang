<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h3 class="h3 mb-4 text-gray-800"><?= $title; ?></h3>
    <?php foreach($data as $d)
    {?>
    <div class="row">
        <div class="col-lg-11">
            <form action="<?= base_url('admin/verif_edit_api')?>" method="post" >
            <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">Id api</label>
                    <div class="col-sm-2">
                    <input type="text" class="form-control" id="id" name="id" value="<?= $d['id']; ?>" readonly>
                    </div>
                </div>
            
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $d['nama']; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="kode" class="col-sm-2 col-form-label">Kode</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="kode" name="kode" value="<?= $d['kode']; ?>">
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="<?= base_url('admin/api'); ?>" class="btn btn-danger btn">Batal</a>
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