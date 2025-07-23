<?php
$title = 'Edit Pegawai';
$this->extend('layout');
?>
<?php $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="card shadow animate__animated animate__fadeInUp">
            <div class="card-header">
                <h3 class="card-title">Edit Pegawai</h3>
            </div>
            <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="<?= site_url('employees/update/' . $pegawai['id']) ?>">
            <?= csrf_field() ?>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="<?= esc($pegawai['nama']) ?>" required>
            </div>
            <div class="form-group">
                <label>NIK</label>
                <input type="text" name="nik" class="form-control" value="<?= esc($pegawai['nik']) ?>" required>
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" value="<?= esc($pegawai['tanggal_lahir']) ?>" required>
            </div>
            <div class="form-group">
                <label>Jabatan</label>
                <input type="text" name="jabatan" class="form-control" value="<?= esc($pegawai['jabatan']) ?>" required>
            </div>
            <div class="form-group">
                <label>Kontak</label>
                <input type="text" name="kontak" class="form-control" value="<?= esc($pegawai['kontak']) ?>">
            </div>
            <div class="form-group">
                <label>Dokumen (KTP/Kontrak)</label>
                <input type="file" name="document" class="form-control-file">
                <?php if ($pegawai['document']): ?>
                    <p class="mt-2">Dokumen saat ini: <a href="<?= base_url('uploads/'.basename($pegawai['document'])) ?>" target="_blank">Lihat</a></p>
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-1"></i>Update</button>
        </form>
            </div>
        </div>
    </div>
</section>
<?php $this->endSection(); ?>
