<?php
$title = 'Data Cuti';
$breadcrumbs = [ ['title' => 'Cuti'] ];
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
        <a href="<?= site_url('cuti/create') ?>" class="btn btn-primary mb-2">Ajukan Cuti</a>
        <table class="table table-bordered">
            <thead>
            <tr><th>ID</th><th>Nama</th><th>Tanggal Awal</th><th>Tanggal Akhir</th><th>Jenis</th><th>Status</th><th>Aksi</th></tr>
            </thead>
            <tbody>
            <?php foreach($cuti as $row): ?>
                <tr>
                    <td><?= esc($row['id']) ?></td>
                    <td><?= esc($row['nama']) ?></td>
                    <td><?= esc($row['tanggal_awal']) ?></td>
                    <td><?= esc($row['tanggal_akhir']) ?></td>
                    <td><?= esc($row['jenis']) ?></td>
                    <td><?= esc($row['status']) ?></td>
                    <td><a href="<?= site_url('cuti/edit/' . $row['id']) ?>" class="btn btn-sm btn-secondary">Edit</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
<?php $this->endSection(); ?>
