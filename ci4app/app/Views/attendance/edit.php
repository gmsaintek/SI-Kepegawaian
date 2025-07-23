<?php
$title = 'Edit Presensi';
$this->extend('layout');
?>
<?php $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="card shadow animate__animated animate__fadeInUp">
            <div class="card-header">
                <h3 class="card-title">Edit Presensi</h3>
            </div>
            <div class="card-body">
        <?php echo view('attendance/_form', ['action' => site_url('attendance/update/'.$presensi['id']), 'presensi' => $presensi, 'pegawai' => $pegawai, 'submit' => 'Update']); ?>
            </div>
        </div>
    </div>
</section>
<?php $this->endSection(); ?>
