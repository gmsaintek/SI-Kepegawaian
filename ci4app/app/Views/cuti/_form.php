<?php
    $user = session('user');
    $isHr = $user['role'] === 'hr';
?>
<form method="post" action="<?= $action ?>">
    <?= csrf_field() ?>
    <div class="form-group">
        <label>Pegawai</label>
        <?php if ($isHr): ?>
            <select name="pegawai_id" class="form-control" required>
                <option value="">-- pilih pegawai --</option>
                <?php foreach($pegawai as $p): ?>
                    <option value="<?= $p['id'] ?>" <?= ($cuti['pegawai_id'] ?? $selected ?? '') == $p['id'] ? 'selected' : '' ?>><?= esc($p['nama']) ?></option>
                <?php endforeach; ?>
            </select>
        <?php else: ?>
            <input type="hidden" name="pegawai_id" value="<?= esc($selected) ?>">
            <input type="text" class="form-control" value="<?= esc($user['name']) ?>" readonly>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label>Tanggal Awal</label>
        <input type="date" name="tanggal_awal" class="form-control" value="<?= esc($cuti['tanggal_awal'] ?? $tanggal_awal ?? '') ?>" required>
    </div>
    <div class="form-group">
        <label>Tanggal Akhir</label>
        <input type="date" name="tanggal_akhir" class="form-control" value="<?= esc($cuti['tanggal_akhir'] ?? $tanggal_akhir ?? '') ?>" required>
    </div>
    <div class="form-group">
        <label>Jenis</label>
        <input type="text" name="jenis" class="form-control" value="<?= esc($cuti['jenis'] ?? $jenis ?? '') ?>" required>
    </div>
    <div class="form-group">
        <label>Alasan</label>
        <textarea name="alasan" class="form-control"><?= esc($cuti['alasan'] ?? $alasan ?? '') ?></textarea>
    </div>
    <?php if ($isHr && isset($cuti)): ?>
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
    <button type="submit" class="btn btn-primary">
        <i class="fas fa-save mr-1"></i><?= $submit ?? 'Simpan' ?>
    </button>
</form>
