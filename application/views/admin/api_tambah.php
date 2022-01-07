<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h3 class="h3 mb-4 text-gray-800"><?= $title; ?></h3>

    <div class="row">
        <div class="col-lg-11">
        <form action="<?= base_url('admin/verif_input_api'); ?>" method="POST">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Tulis nama akses api" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="kode" class="col-sm-2 col-form-label">kode</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kode" name="kode" placeholder="Tulis kode akses api" autocomplete="off">
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