<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        <form method="post" action="<?= site_url('employees/update/' . $pegawai['id']) ?>">
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
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</section>
<?php $this->endSection(); ?>
