<?php
$title = 'Data Pegawai';
$breadcrumbs = [ ['title' => 'Pegawai'] ];
$this->extend('layout');
?>
<?php $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= esc(session()->getFlashdata('success')) ?>
            </div>
        <?php endif; ?>
        <form class="form-inline mb-2" method="get">
            <input type="text" name="q" class="form-control mr-2" placeholder="Cari" value="<?= esc($search) ?>">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
        <a href="<?= site_url('employees/create') ?>" class="btn btn-primary mb-2">Tambah Pegawai</a>
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
                    <td><a class="btn btn-sm btn-secondary" href="<?= site_url('employees/edit/' . $row['id']) ?>">Edit</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
<?php $this->endSection(); ?>
