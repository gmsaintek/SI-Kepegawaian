<?php if (!isset($hr) || !$hr): ?>
    <div class="form-group">
        <label>Alasan</label>
        <textarea name="alasan" class="form-control"><?= esc($alasan ?? '') ?></textarea>
    </div>
<?php else: ?>
    <div class="form-group">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="Menunggu" <?= ($cuti['status'] ?? '') == 'Menunggu' ? 'selected' : '' ?>>Menunggu</option>
            <option value="Disetujui" <?= ($cuti['status'] ?? '') == 'Disetujui' ? 'selected' : '' ?>>Disetujui</option>
            <option value="Ditolak" <?= ($cuti['status'] ?? '') == 'Ditolak' ? 'selected' : '' ?>>Ditolak</option>
        </select>
    </div>
    <div class="form-group">
        <label>Alasan Penolakan</label>
        <textarea name="alasan_penolakan" class="form-control"><?= esc($cuti['alasan_penolakan'] ?? '') ?></textarea>
    </div>
<?php endif; ?>
