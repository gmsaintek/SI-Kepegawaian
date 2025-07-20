<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Data Pegawai</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Data Pegawai" />
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
              <div class="col-sm-6"><h3 class="mb-0">Data Pegawai</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data Pegawai</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="app-content">
          <div class="container-fluid">
            <div class="row">
              <div class="d-flex gap-2">
                <a href="reg_pegawai.php" class="btn btn-primary mb-2 text-decoration-none">
                  <i class="bi bi-plus-lg"></i>
                  <span>Pegawai</span>
                </a>
                <button type="button" class="btn btn-warning mb-2" data-bs-toggle="modal" data-bs-target="#cetaklaporan_staff_all">
                  <i class="bi bi-printer"></i>
                  <span>Cetak Laporan</span>
                </button>
                <div class="modal-container">
                  <?php include "modals/cetak_laporan/all_staff.php";?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <table id="tablePegawai" class="table table-striped">
                  <thead>
                    <tr class="align-middle">
                      <th>No.</th>
                      <th>NIP</th>
                      <th>Nama</th>
                      <th width="70px">Tempat</th>
                      <th>Tanggal Lahir</th>
                      <th width="20px">Jenis Kelamin</th>
                      <th>Divisi</th>
                      <th>Jabatan</th>
                      <th width="50px">Status Kepegawaian</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>256821</td>
                      <td>Lorem Ipsum</td>
                      <td>Jakarta</td>
                      <td>10/02/1994</td>
                      <td>P</td>
                      <td>Kaur TU</td>
                      <td>Staf</td>
                      <td>Tetap</td>
                      <td>
                        <div class="d-flex gap-2">
                          <a href="user_dashboard_editable.php" class="btn btn-sm btn-info">
                            <i class="bi bi-eye"></i>
                          </a>
                          <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#konfirmasi_hapus">
                            <i class="bi bi-person-dash"></i>
                          </button>
                          <div class="modal-container">
                            <?php include "modals/konfirmasi/hapus.php";?>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </main>
      <?php include '../includes/footer.php';?>
    </div>
  </body>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../dist/js/adminlte.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

  <script>
    $(document).ready(function () {
      $('#tablePegawai').DataTable({
        lengthMenu: [5, 10, 25, 50, 100],
        pageLength: 10 // default entries shown
      });
    });
  </script>
</html>