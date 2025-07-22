<?php
require_once '../../backend/db.php';
$db = get_db();
$id = $_GET['id'] ?? 0;
$stmt = $db->prepare('SELECT * FROM pegawai WHERE id=?');
$stmt->execute([$id]);
$data = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$data) { echo 'Pegawai tidak ditemukan'; exit; }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Edit Pegawai</title>
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
        <h3 class="mb-0">Edit Pegawai</h3>
      </div>
    </div>
    <div class="app-content">
      <div class="container-fluid">
        <form method="POST" action="../../backend/update_pegawai.php">
          <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
          <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="<?php echo htmlspecialchars($data['nama']); ?>" required />
          </div>
          <div class="mb-3">
            <label class="form-label">NIK</label>
            <input type="text" name="nik" class="form-control" value="<?php echo htmlspecialchars($data['nik']); ?>" required />
          </div>
          <div class="mb-3">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo htmlspecialchars($data['tanggal_lahir']); ?>" required />
          </div>
          <div class="mb-3">
            <label class="form-label">Jabatan</label>
            <input type="text" name="jabatan" class="form-control" value="<?php echo htmlspecialchars($data['jabatan']); ?>" required />
          </div>
          <div class="mb-3">
            <label class="form-label">Kontak</label>
            <input type="text" name="kontak" class="form-control" value="<?php echo htmlspecialchars($data['kontak']); ?>" />
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
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
