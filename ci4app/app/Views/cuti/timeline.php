<?php
$title = 'Timeline Cuti';
$this->extend('layout');
?>
<?php $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="card shadow animate__animated animate__fadeInUp mb-3">
            <div class="card-header">
                <h3 class="card-title">Timeline Cuti</h3>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= esc($cuti['nama']) ?></h5>
                <p class="card-text">
                    <?= esc($cuti['tanggal_awal']) ?> - <?= esc($cuti['tanggal_akhir']) ?> (<?= esc($cuti['jenis']) ?>)
                </p>
                <p>Status: <?= esc($cuti['status']) ?></p>
                <?php if (!empty($cuti['alasan_penolakan'])): ?>
                    <p>Alasan: <?= esc($cuti['alasan_penolakan']) ?></p>
                <?php endif; ?>
                <div class="timeline">
                    <?php $current = null; foreach ($logs as $log): ?>
                        <?php $date = date('d M Y', strtotime($log['created_at'])); ?>
                        <?php if ($current !== $date): $current = $date; ?>
                            <div class="time-label"><span class="text-bg-primary"><?= $current ?></span></div>
                        <?php endif; ?>
                        <div>
                            <i class="fas fa-plane bg-primary timeline-icon"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fas fa-clock"></i> <?= date('H:i', strtotime($log['created_at'])) ?></span>
                                <h3 class="timeline-header"><?= esc($cuti['nama']) ?></h3>
                                <div class="timeline-body">
                                    <?= esc($log['message']) ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div>
                        <i class="fas fa-clock bg-gray"></i>
                    </div>
                </div>
                <?php if (session('user')['role'] !== 'hr'): ?>
                <div class="card mt-3">
                    <div class="card-header">Kirim Sanggah</div>
                    <div class="card-body">
                        <form method="post" action="<?= site_url('cuti/sanggah/'.$cuti['id']) ?>">
                            <?= csrf_field() ?>
                            <div class="form-group">
                                <textarea name="sanggah" class="form-control" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
                        </form>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php $this->endSection(); ?>
