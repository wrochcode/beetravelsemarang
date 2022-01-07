<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-10">
            <form action="<?= base_url('admin/verif_input_booking'); ?>" method="POST">
                <div class="form-group row">
                    <label for="1" class="col-sm-2  col-form-label">Nama Pemesan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="1" name="nama" placeholder="Tulis nama pemesan tersayang" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="2" class="col-sm-2 col-form-label">Masukkan No. HP / Whatsapp</label>
                    <div class="col-sm-10">
                        <input name="kontak" class="form-control" placeholder="Tulis nomor yang dapat dihubungi" id="2" rows="4" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="3" class="col-sm-2 col-form-label">Waktu</label>
                        <div class="col-sm-3">
						<input id="hp" class="form-control" name="waktu" type="date" required>
                        </div>
				</div>
				<div class="form-group row">
                    <label for="3" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                        <div class="col-sm-10">
						<input id="tanggal" class="form-control" name="tanggal" type="text" value="<?php echo date("d/m-Y"); ?>" readonly required>
                        </div>
                </div>
                <div class="form-group row">
                    <label for="5" class="col-sm-2 col-form-label">Nama Agen</label>
                    <div class="col-sm-10">
                        <textarea name="agen" class="form-control" placeholder="Tulis agen yang dituju" id="5" rows="4" autocomplete="off"></textarea>
                    </div>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= base_url('admin/materi'); ?>" class="btn btn-danger">Batal</a></div>
                
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


<!-- End of Main Content -->
