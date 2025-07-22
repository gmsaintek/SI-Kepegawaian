<?php
$title = 'Timeline Cuti';
$this->extend('layout');
?>
<?php $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
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
                        <h3 class="timeline-header"><?= esc($log['nama']) ?></h3>
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
    </div>
</section>
<?php $this->endSection(); ?>
