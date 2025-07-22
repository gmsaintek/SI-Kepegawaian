<?php
$title = 'Edit Cuti';
$this->extend('layout');
?>
<?php $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="card shadow animate__animated animate__fadeInUp">
            <div class="card-header">
                <h3 class="card-title">Edit Cuti</h3>
            </div>
            <div class="card-body">
        <?php echo view('cuti/_form', [
            'action' => site_url('cuti/update/'.$cuti['id']),
            'cuti' => $cuti,
            'pegawai' => $pegawai,
            'submit' => 'Update'
        ]); ?>
            </div>
        </div>
    </div>
</section>
<?php $this->endSection(); ?>
