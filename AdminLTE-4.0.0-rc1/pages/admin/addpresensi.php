<?php
require_once '../../backend/db.php';
$db = get_db();
$pegawai = $db->query('SELECT id,nama FROM pegawai ORDER BY nama')->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Input Presensi</title>
  <link href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
  <link rel="stylesheet" href="../../dist/css/adminlte.css" />
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">
  <?php include '../features/navbar.php';?>
  <?php include '../features/sidebar.php';?>
  <main class="app-main">
    <div class="app-content-header">
      <div class="container-fluid">
        <h3 class="mb-0">Input Presensi</h3>
      </div>
    </div>
    <div class="app-content">
      <div class="container-fluid">
        <form method="POST" action="../../backend/save_presensi.php">
          <div class="mb-3">
            <label class="form-label">Pegawai</label>
            <select name="pegawai_id" class="form-select" required>
              <option value="">-- pilih pegawai --</option>
              <?php foreach($pegawai as $p): ?>
                <option value="<?php echo $p['id']; ?>"><?php echo htmlspecialchars($p['nama']); ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required />
          </div>
          <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-select" required>
              <option value="Hadir">Hadir</option>
              <option value="Sakit">Sakit</option>
              <option value="Izin">Izin</option>
              <option value="Tidak Hadir">Tidak Hadir</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </main>
  <?php include '../features/footer.php';?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../dist/js/adminlte.js"></script>
</body>
</html>
