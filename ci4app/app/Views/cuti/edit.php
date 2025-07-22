<?php
$title = 'Edit Cuti';
$this->extend('layout');
?>
<?php $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        <?php echo view('cuti/_form', [
            'action' => site_url('cuti/update/'.$cuti['id']),
            'cuti' => $cuti,
            'pegawai' => $pegawai,
            'submit' => 'Update'
        ]); ?>
    </div>
</section>
<?php $this->endSection(); ?>
