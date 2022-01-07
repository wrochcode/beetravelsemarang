<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-12">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="<?= base_url('admin/input_booking')?>" class="btn btn-primary mb-3" ><i class="fas fa-plus mr-2"></i><span>Tambah Booking</span></a>
            <!-- <a href="" class="btn btn-primary mb-3" ><i class="fas fa-plus mr-2"></i><span>Tambahkan Menu</span></a> -->

            <table class="table table-bordered table-hover table-responsive">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pemesan</th>
                        <th scope="col">Nomor Pesanan</th>
                        <th scope="col">Kontak Pemesan</th>
                        <th scope="col">Waktu Pemesanan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Tanggal Pemesanan</th>
                        <th scope="col">Nama Agen</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $number = 0;
                    ?>
                    <?php foreach ($booking as $b) : ?>
                        <tr>
                            <th><?= $number += 1; ?></th>
                            <td><?= $b['nama']; ?></td>
                            <td><?= $b['no_pesan']; ?></td>
                            <td><?= $b['kontak']; ?></td>
							<td><?= $b['waktu']; ?></td>
							<td><?php if($b['status']==0)
							{
								echo "Belum Tebayar";
							}
							else{
								echo "Verifikasi";
							} ?></td>
                            <td><?= $b['tanggal']; ?></td>
                            <td><?= $b['agen']; ?></td>
                            <td>
                                <a href="<?= base_url('admin/get_booking/' . $b['no_pesan']); ?>" class="btn btn-success btn-sm"><i class="fas fa-edit mr-1"></i>Ubah</a>
                                <a href="<?= base_url('admin/delete_booking/' . $b['no_pesan']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?');"><i class="fas fa-trash mr-1"></i>Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
