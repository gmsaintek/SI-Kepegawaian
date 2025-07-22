<?php
$title = 'Ajukan Cuti';
$this->extend('layout');
?>
<?php $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        <?php echo view('cuti/_form', ['action' => site_url('cuti/save'), 'pegawai' => $pegawai]); ?>
    </div>
</section>
<?php $this->endSection(); ?>
