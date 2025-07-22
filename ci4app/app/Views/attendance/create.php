<?php
$title = 'Input Presensi';
$this->extend('layout');
?>
<?php $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="card shadow animate__animated animate__fadeInUp">
            <div class="card-header">
                <h3 class="card-title">Input Presensi</h3>
            </div>
            <div class="card-body">
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger">
                <?= esc(session()->getFlashdata('error')) ?>
            </div>
        <?php endif; ?>
        <form method="post" action="<?= site_url('attendance/save') ?>">
            <?= csrf_field() ?>
            <div class="form-group">
                <label>Pegawai</label>
                <select name="pegawai_id" class="form-control" required>
                    <option value="">-- pilih pegawai --</option>
                    <?php foreach($pegawai as $p): ?>
                        <option value="<?= $p['id'] ?>"><?= esc($p['nama']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="Hadir">Hadir</option>
                    <option value="Sakit">Sakit</option>
                    <option value="Izin">Izin</option>
                    <option value="Tidak Hadir">Tidak Hadir</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-1"></i>Simpan</button>
        </form>
            </div>
        </div>
    </div>
</section>
<?php $this->endSection(); ?>
