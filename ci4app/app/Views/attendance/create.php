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
        <?php echo view('attendance/_form', ['action' => site_url('attendance/save'), 'pegawai' => $pegawai]); ?>
            </div>
        </div>
    </div>
</section>
<?php $this->endSection(); ?>
