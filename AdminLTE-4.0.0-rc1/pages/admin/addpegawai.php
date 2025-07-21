<?php include '../../backend/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Tambah Pegawai</title>
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
        <h3 class="mb-0">Tambah Pegawai</h3>
      </div>
    </div>
    <div class="app-content">
      <div class="container-fluid">
        <form method="POST" action="../../backend/save_pegawai.php">
          <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required />
          </div>
          <div class="mb-3">
            <label class="form-label">NIK</label>
            <input type="text" name="nik" class="form-control" required />
          </div>
          <div class="mb-3">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" required />
          </div>
          <div class="mb-3">
            <label class="form-label">Jabatan</label>
            <input type="text" name="jabatan" class="form-control" required />
          </div>
          <div class="mb-3">
            <label class="form-label">Kontak</label>
            <input type="text" name="kontak" class="form-control" />
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
