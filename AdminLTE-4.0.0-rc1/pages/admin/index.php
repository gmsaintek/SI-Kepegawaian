<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sisforpeg Dash | Admin</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="AdminLTE v4 | Dashboard" />
    <meta name="author" content="ColorlibHQ" />
    <meta
      name="description"
      content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS."
    />
    <meta
      name="keywords"
      content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"
    />
    <!--end::Primary Meta Tags-->
    <!-- Font -->
    <link href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Stylesheet -->
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
                <a href="allpegawai.php" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
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
                <a href="allpresensi.php" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                  Lebih Lanjut
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <div class="small-box text-bg-danger">
                <div class="inner">
                  <h3>(count)</h3>
                  <p>Data Presensi</p>
                </div>
                <a href="allizin.php" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
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
                <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
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
              <div class="small-box text-bg-warning">
                <div class="inner">
                  <h3>(count)</h3>
                  <p>Sisa hari izin cuti</p>
                </div>
                <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                  Lebih Lanjut
                </a>
              </div>
            </div>
          </div>
      </div>
    </main>
    <?php include '../features/footer.php';?>
  </div>
  
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../dist/js/adminlte.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>