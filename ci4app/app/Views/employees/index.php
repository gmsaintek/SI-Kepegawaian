<?php
$title = 'Data Pegawai';
$this->extend('layout');
?>
<?php $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="card shadow animate__animated animate__fadeInUp">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title mb-0">Data Pegawai</h3>
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#createModal">
                    <i class="fas fa-plus mr-1"></i>Tambah Pegawai
                </button>
            </div>
            <div class="card-body">
                <?php if (session()->getFlashdata('success')): ?>
                    <div class="alert alert-success">
                        <?= esc(session()->getFlashdata('success')) ?>
                    </div>
                <?php endif; ?>
                <form class="form-inline mb-3" method="get">
                    <input type="text" name="q" class="form-control mr-2" placeholder="Cari" value="<?= esc($search) ?>">
                    <button class="btn btn-secondary" type="submit"><i class="fas fa-search mr-1"></i>Cari</button>
                </form>
                <table class="table table-bordered">
            <thead>
            <tr><th>ID</th><th>Nama</th><th>NIK</th><th>Aksi</th></tr>
            </thead>
            <tbody>
            <?php foreach($pegawai as $row): ?>
                <tr>
                    <td><?= esc($row['id']) ?></td>
                    <td><?= esc($row['nama']) ?></td>
                    <td><?= esc($row['nik']) ?></td>
                    <td><button class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#editModal<?= $row['id'] ?>"><i class="fas fa-edit mr-1"></i>Edit</button></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Tambah Pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo view('employees/_form', ['action' => site_url('employees/save')]); ?>
                </div>
            </div>
        </div>
    </div>

    <?php foreach($pegawai as $p): ?>
    <div class="modal fade" id="editModal<?= $p['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel<?= $p['id'] ?>" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel<?= $p['id'] ?>">Edit Pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo view('employees/_form', ['action' => site_url('employees/update/'.$p['id']), 'pegawai' => $p, 'submit' => 'Update']); ?>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</section>
<?php $this->endSection(); ?>
