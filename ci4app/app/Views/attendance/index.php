<?php
$title = 'Data Presensi';
$breadcrumbs = [ ['title' => 'Presensi'] ];
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
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger">
                <?= esc(session()->getFlashdata('error')) ?>
            </div>
        <?php endif; ?>
        <form class="form-inline mb-2" method="get">
            <select name="pegawai_id" class="form-control mr-2">
                <option value="">Semua Pegawai</option>
                <?php foreach($pegawai as $p): ?>
                    <option value="<?= $p['id'] ?>" <?= $filter['pegawai_id']==$p['id']?'selected':'' ?>><?= esc($p['nama']) ?></option>
                <?php endforeach; ?>
            </select>
            <input type="date" name="tanggal" class="form-control mr-2" value="<?= esc($filter['tanggal']) ?>">
            <select name="status" class="form-control mr-2">
                <option value="">Semua Status</option>
                <option <?= $filter['status']=='Hadir'?'selected':'' ?>>Hadir</option>
                <option <?= $filter['status']=='Sakit'?'selected':'' ?>>Sakit</option>
                <option <?= $filter['status']=='Izin'?'selected':'' ?>>Izin</option>
                <option <?= $filter['status']=='Tidak Hadir'?'selected':'' ?>>Tidak Hadir</option>
            </select>
            <button class="btn btn-secondary" type="submit">Filter</button>
        </form>
        <a href="<?= site_url('attendance/create') ?>" class="btn btn-primary mb-2">Input Presensi</a>
        <table class="table table-bordered">
            <thead>
            <tr><th>ID</th><th>Nama</th><th>Tanggal</th><th>Status</th><th>Aksi</th></tr>
            </thead>
            <tbody>
            <?php foreach($presensi as $row): ?>
                <tr>
                    <td><?= esc($row['id']) ?></td>
                    <td><?= esc($row['nama']) ?></td>
                    <td><?= esc($row['tanggal']) ?></td>
                    <td><?= esc($row['status']) ?></td>
                    <td><a href="<?= site_url('attendance/edit/' . $row['id']) ?>" class="btn btn-sm btn-secondary">Edit</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
<?php $this->endSection(); ?>
