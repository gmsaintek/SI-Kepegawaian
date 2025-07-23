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
            <form id="selfForm" method="post" action="<?= site_url('attendance/selfSave') ?>">
                <?= csrf_field() ?>
                <div class="form-group">
                    <label>Foto Selfie</label>
                    <div class="mb-2">
                        <video id="video" autoplay playsinline style="max-width: 240px;" class="border"></video>
                        <canvas id="canvas" class="d-none"></canvas>
                        <img id="preview" class="d-none mt-2 img-thumbnail" style="max-width: 240px;"/>
                    </div>
                    <button type="button" id="captureBtn" class="btn btn-secondary mb-2">Ambil Foto</button>
                    <input type="hidden" name="photo_data" id="photoData" required>
                </div>
                <div class="form-group">
                    <label>Lokasi</label>
                    <p id="locationDisplay" class="text-muted">Mendeteksi lokasi...</p>
                    <input type="hidden" name="location" id="locationInput">
                </div>
                <div class="progress mt-2 d-none" id="uploadProgress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%"></div>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-1"></i>Simpan</button>
            </form>
        </div>
    </div>
</div>
<script>
    // akses kamera dan ambil gambar
    const video = document.getElementById('video');
    const canvas = document.getElementById('canvas');
    const preview = document.getElementById('preview');
    const captureBtn = document.getElementById('captureBtn');
    const photoInput = document.getElementById('photoData');
    const form = document.getElementById('selfForm');
    const progress = document.getElementById('uploadProgress');
    let stream;

    if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        navigator.mediaDevices.getUserMedia({ video: true }).then(function(s){
            stream = s;
            video.srcObject = s;
            video.play();
        }).catch(function(err){
            alert('Gagal mengakses kamera: ' + err.message);
        });
    } else {
        alert('Peramban tidak mendukung kamera');
    }

    captureBtn.addEventListener('click', function(){
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        const context = canvas.getContext('2d');
        context.drawImage(video, 0, 0);
        const dataURL = canvas.toDataURL('image/png');
        preview.src = dataURL;
        preview.classList.remove('d-none');
        photoInput.value = dataURL;
        captureBtn.textContent = 'Ulangi Foto';
        if (stream) {
            stream.getTracks().forEach(t => t.stop());
        }
    });

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

    form.addEventListener('submit', function(e){
        e.preventDefault();
        progress.classList.remove('d-none');
        const formData = new FormData(form);
        fetch(form.action, {method: 'POST', body: formData})
            .then(resp => {
                progress.classList.add('d-none');
                if (!resp.ok) throw new Error();
                return resp.text();
            })
            .then(() => {
                const alert = document.createElement('div');
                alert.className = 'alert alert-success mt-2';
                alert.innerHTML = '<i class="fas fa-check-circle mr-1"></i>Presensi berhasil';
                form.prepend(alert);
                setTimeout(() => alert.remove(), 3000);
            })
            .catch(() => {
                progress.classList.add('d-none');
                alert('Terjadi kesalahan saat mengirim presensi');
            });
    });
</script>
<?php $this->endSection(); ?>
