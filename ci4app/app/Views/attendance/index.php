<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        <a href="<?= site_url('attendance/create') ?>" class="btn btn-primary mb-2">Input Presensi</a>
        <table class="table table-bordered">
            <thead>
            <tr><th>ID</th><th>Nama</th><th>Tanggal</th><th>Status</th></tr>
            </thead>
            <tbody>
            <?php foreach($presensi as $row): ?>
                <tr>
                    <td><?= esc($row['id']) ?></td>
                    <td><?= esc($row['nama']) ?></td>
                    <td><?= esc($row['tanggal']) ?></td>
                    <td><?= esc($row['status']) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
<?php $this->endSection(); ?>
