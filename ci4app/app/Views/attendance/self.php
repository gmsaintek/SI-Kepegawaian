<?php
$title = 'Presensi Mandiri';
$this->extend('layout');
?>
<?php $this->section('content'); ?>
<div class="container-fluid">
    <div class="card shadow animate__animated animate__fadeInUp">
        <div class="card-header">
            <h3 class="card-title">Presensi Mandiri</h3>
        </div>
        <div class="card-body">
            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success">
                    <?= esc(session()->getFlashdata('success')) ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger">
                    <?= esc(session()->getFlashdata('error')) ?>
                </div>
            <?php endif; ?>
            <form method="post" enctype="multipart/form-data" action="<?= site_url('attendance/selfSave') ?>">
                <?= csrf_field() ?>
                <div class="form-group">
                    <label>Foto Selfie</label>
                    <input type="file" name="photo" accept="image/*" capture="environment" class="form-control-file" required>
                </div>
                <div class="form-group">
                    <label>Lokasi</label>
                    <p id="locationDisplay" class="text-muted">Mendeteksi lokasi...</p>
                    <input type="hidden" name="location" id="locationInput">
                </div>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-1"></i>Simpan</button>
            </form>
        </div>
    </div>
</div>
<script>
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(pos){
            var coords = pos.coords.latitude + ',' + pos.coords.longitude;
            document.getElementById('locationInput').value = coords;
            document.getElementById('locationDisplay').textContent = coords;
        }, function(){
            document.getElementById('locationDisplay').textContent = 'Gagal mendapatkan lokasi';
        });
    } else {
        document.getElementById('locationDisplay').textContent = 'Geolocation tidak didukung';
    }
</script>
<?php $this->endSection(); ?>
