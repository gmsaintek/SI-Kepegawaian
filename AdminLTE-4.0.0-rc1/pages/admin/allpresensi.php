<?php
require_once '../../backend/db.php';
$db = get_db();
$data = $db->query('SELECT p.id, pg.nama, p.tanggal, p.status FROM presensi p JOIN pegawai pg ON pg.id=p.pegawai_id ORDER BY p.tanggal DESC')->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Data Presensi</title>
  <link href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
  <link rel="stylesheet" href="../../dist/css/adminlte.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">
  <?php include '../features/navbar.php';?>
  <?php include '../features/sidebar.php';?>
  <main class="app-main">
    <div class="app-content-header">
      <div class="container-fluid">
        <h3 class="mb-0">Data Presensi</h3>
      </div>
    </div>
    <div class="app-content">
      <div class="container-fluid">
        <table id="tablePresensi" class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Tanggal</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; foreach($data as $d): ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo htmlspecialchars($d['nama']); ?></td>
              <td><?php echo htmlspecialchars($d['tanggal']); ?></td>
              <td><?php echo htmlspecialchars($d['status']); ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </main>
  <?php include '../features/footer.php';?>
</div>
<script>
$(document).ready(function(){
  $('#tablePresensi').DataTable();
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../dist/js/adminlte.js"></script>
</body>
</html>
