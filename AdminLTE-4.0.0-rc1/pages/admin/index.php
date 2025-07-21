<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Home | Sisforpeg</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Home | Sisforpeg" />
    <meta name="author" content="Gantari Mengwi 2025" />
    <meta name="description" content="Sisforpeg Desa"/>

    <link href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="../../dist/css/adminlte.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
  <div class="app-wrapper">
    <?php include '../includes/header.php';?>
    <?php include '../includes/sidebar_admin.php';?>
    <main class="app-main">
      <div class="app-content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <h3 class="mb-0">
                Home
              </h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item">
                  <a href="#">
                    Home
                  </a>
                </li>
                <li class="breadcrumb-item">
                  Welcome, admin (name)!
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="app-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-6">
              <div class="small-box text-bg-primary">
                <div class="inner">
                  <h3>(count)</h3>
                  <p>Data Pegawai</p>
                </div>
                <a href="list_pegawai.html" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                  Lebih Lanjut
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <div class="small-box text-bg-success">
                <div class="inner">
                  <h3>(count)</h3>
                  <p>Data Penggajian</p>
                </div>
                <a href="list_penggajian.php" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                  Lebih Lanjut
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <div class="small-box text-bg-danger">
                <div class="inner">
                  <h3>(count)</h3>
                  <p>Data Presensi (hari ini)</p>
                </div>
                <a href="list_presensi.php" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                  Lebih Lanjut
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <div class="small-box text-bg-warning">
                <div class="inner">
                  <h3>(count)</h3>
                  <p>Izin membutuhkan perizinan</p>
                </div>
                <a href="list_izin.php" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                  Lebih Lanjut
                </a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <h3 class="mb-0">
                Personal
              </h3>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-6">
              <div class="small-box text-bg-success">
                <div class="inner">
                  <h3>Hadir</h3>
                  <p>Status Presensi</p>
                </div>
                <a href="add_presensi.php" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                  Input Presensi
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <div class="small-box text-bg-warning">
                <div class="inner">
                  <h3>(count)</h3>
                  <p>Sisa hari izin cuti</p>
                </div>
                <a href="add_izin.php" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                  Input Perizinan
                </a>
              </div>
            </div>
          </div>
      </div>
    </main>
    <?php include '../includes/footer.php';?>
  </div>
  
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../dist/js/adminlte.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>