<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Form Edit</h1>

    <div class="row">
        <div class="col-lg-10">
            <?php foreach($data as $d)
            {?>
                <form action="<?= base_url('admin/verif_edit_booking'); ?>" method="POST">
                    <div class="form-group row">
                        <label for="1" class="col-sm-2  col-form-label">Nomor Pesanan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="1" name="nomor" value="<?php echo $d['no_pesan'];?>" autocomplete="off" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="1" class="col-sm-2  col-form-label">Nama Pemesan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="1" name="nama" value="<?php echo $d['nama'];?>" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="3" class="col-sm-2 col-form-label">Masukkan No. HP / Whatsapp</label>
                        <div class="col-sm-10">
                            <input name="kontak" class="form-control" value="<?php echo $d['kontak'];?>" id="3" rows="4" autocomplete="off">
                        </div>
                    </div>

                    <!-- select -->
                    <div class="form-group row">
                    <label for="3" class="col-sm-2 col-form-label">Waktu</label>
                        <div class="col-sm-10">
						<input id="hp" class="form-control" name="waktu" type="date" value="<?php echo $d['waktu'];?>">
                        </div>
					</div>
					
					<div class="form-group row">
                        <label for="4" class=" col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select name="status" class="form-control" id="4">
								<option selected="<?php $d['waktu'];?>"><?php
								 if($d['status'] ==0)
								 {
									 echo "belum Terbayar";
								 }
								 else
								 {
									echo "Verifikasi";
								 } ?>
								 </option>
                                <option value="0">Belum Terbayar</option>
                                <option value="1">Verifikasi</option>
                            </select>
                        </div>
					</div>
					
                    <div class="form-group row">
                        <label for="5" class=" col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input name="tanggal" class="form-control" value="<?php echo $d['tanggal'];?>" id="5" rows="4" autocomplete="off" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="6" class=" col-sm-2 col-form-label">Nama Agen</label>
                        <div class="col-sm-10">
                            <input name="agen" class="form-control" value="<?php echo $d['agen'];?>" id="6" rows="4" autocomplete="off">
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?= base_url('admin/booking'); ?>" class="btn btn-danger">Batal</a>
                    
                </form>
            <?php }?>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
