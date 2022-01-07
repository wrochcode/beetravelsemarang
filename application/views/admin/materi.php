<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="<?= base_url('admin/input_materi')?>" class="btn btn-primary mb-3" ><i class="fas fa-plus mr-2"></i><span>Tambahkan Materi</span></a>
            <!-- <a href="" class="btn btn-primary mb-3" ><i class="fas fa-plus mr-2"></i><span>Tambahkan Menu</span></a> -->

            <table class="table table-bordered table-hover table-responsive">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Materi</th>
                        <th scope="col">Judul Artikel</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $number = 0;
                    ?>
                    <?php foreach ($materi as $m) : ?>
                        <tr>
                            <th><?= $number += 1; ?></th>
                            <td><?= $m['id_materi']; ?></td>
                            <td><?= $m['cabang']; ?></td>
                            <td>
                                <a href="<?= base_url('admin/get_materi/' . $m['id_materi']); ?>" class="btn btn-success btn-sm"><i class="fas fa-edit mr-1"></i>Ubah</a>
                                <a href="<?= base_url('admin/delete_materi/' . $m['id_materi']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?');"><i class="fas fa-trash mr-1"></i>Hapus</a>
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
