<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-12">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <!-- <a href="<?= base_url('admin/input_agen')?>" class="btn btn-primary mb-3" ><i class="fas fa-plus mr-2"></i><span>Tambah Booking</span></a> -->
            <!-- <a href="" class="btn btn-primary mb-3" ><i class="fas fa-plus mr-2"></i><span>Tambahkan Menu</span></a> -->

            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Agen</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Komentar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $number = 0;
                        ?>
                        <?php foreach ($testi as $t) : ?>
                            <tr>
                                <td><?= $number += 1; ?></th>
                                <td><?= $t['nama']; ?></td>
                                <td><?= $t['email']; ?></td>
                                <td><?= $t['komentar']; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/delete_testimoni/' . $t['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?');"><i class="fas fa-trash mr-1"></i>Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->