<form method="post" enctype="multipart/form-data" action="<?= $action ?>">
    <?= csrf_field() ?>
    <div class="form-group">
        <label>Pegawai</label>
        <select name="pegawai_id" class="form-control" required>
            <option value="">-- pilih pegawai --</option>
            <?php foreach($pegawai as $p): ?>
                <option value="<?= $p['id'] ?>" <?= isset($presensi['pegawai_id']) && $presensi['pegawai_id'] == $p['id'] ? 'selected' : '' ?>><?= esc($p['nama']) ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Tanggal</label>
        <input type="date" name="tanggal" class="form-control" value="<?= esc($presensi['tanggal'] ?? '') ?>" required>
    </div>
    <div class="form-group">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="Hadir" <?= isset($presensi['status']) && $presensi['status']=='Hadir' ? 'selected' : '' ?>>Hadir</option>
            <option value="Sakit" <?= isset($presensi['status']) && $presensi['status']=='Sakit' ? 'selected' : '' ?>>Sakit</option>
            <option value="Izin" <?= isset($presensi['status']) && $presensi['status']=='Izin' ? 'selected' : '' ?>>Izin</option>
            <option value="Tidak Hadir" <?= isset($presensi['status']) && $presensi['status']=='Tidak Hadir' ? 'selected' : '' ?>>Tidak Hadir</option>
        </select>
    </div>
    <div class="form-group">
        <label>Foto</label>
        <input type="file" name="photo" accept="image/*" class="form-control-file">
        <?php if (!empty($presensi['photo'])): ?>
            <p class="mt-2"><img src="<?= base_url('uploads/'.basename($presensi['photo'])) ?>" alt="foto" style="height:50px;"></p>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label>Lokasi</label>
        <input type="text" name="location" class="form-control" value="<?= esc($presensi['location'] ?? '') ?>">
    </div>
    <button type="submit" class="btn btn-primary">
        <i class="fas fa-save mr-1"></i><?= $submit ?? 'Simpan' ?>
    </button>
</form>
