<?php
$title = 'Pengaturan Profil';
$this->extend('layout');
?>
<?php $this->section('content'); ?>
<div class="container-fluid">
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= esc(session()->getFlashdata('success')) ?></div>
    <?php endif; ?>
    <form method="post" action="<?= site_url('profile/update') ?>">
        <?= csrf_field() ?>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="<?= esc($user['name']) ?>" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" value="<?= esc($user['email']) ?>" disabled>
        </div>
        <div class="form-group">
            <label>Peran</label>
            <?php $label = $user['role']==='hr' ? 'Human Resource' : 'Karyawan'; ?>
            <p><span class="badge <?= $user['role']==='hr' ? 'badge-danger' : 'badge-primary' ?>"><?= $label ?></span></p>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
<?php $this->endSection(); ?>
