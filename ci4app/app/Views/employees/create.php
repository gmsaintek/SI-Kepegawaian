<?php
$title = 'Tambah Pegawai';
$this->extend('layout');
?>
<?php $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="card shadow animate__animated animate__fadeInUp">
            <div class="card-header">
                <h3 class="card-title">Tambah Pegawai</h3>
            </div>
            <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="<?= site_url('employees/save') ?>">
            <?= csrf_field() ?>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label>NIK</label>
                <input type="text" name="nik" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Jabatan</label>
                <input type="text" name="jabatan" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Kontak</label>
                <input type="text" name="kontak" class="form-control">
            </div>
            <div class="form-group">
                <label>Dokumen (KTP/Kontrak)</label>
                <input type="file" name="document" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-1"></i>Simpan</button>
        </form>
            </div>
        </div>
    </div>
</section>
<?php $this->endSection(); ?>
