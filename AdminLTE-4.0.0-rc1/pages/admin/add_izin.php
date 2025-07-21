<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Tambah Izin Cuti | Sisforpeg</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Tambah Izin Cuti | Sisforpeg" />
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
                <h3 class="mb-0">Permohonan Izin Cuti</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Permohonan Cuti</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="app-content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-3 col-6">
                <div class="small-box text-bg-warning">
                  <div class="inner">
                    <h3>(count)</h3>
                    <p>Sisa Izin Cuti</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-6">
                <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#izin_create_admin">
                  <i class="bi bi-plus"></i>
                  <span>Izin Cuti</span>
                </button>
                <div class="modal-container">
                  <?php include "modals/izin/izin_create_admin.php";?>
                </div>
              </div>
            </div>
          </div>
        <div class="container-fluid">
          <div class="col-md-12">
            <table id="tablePerIzin" class="table table-striped">
              <thead>
                <tr class="align-middle">
                  <th>No.</th>
                  <th>Tanggal Pengajuan</th>
                  <th>Tanggal Awal Cuti</th>
                  <th>Tanggal Akhir Cuti</th>
                  <th>Jenis Cuti</th>
                  <th>Alasan Cuti</th>
                  <th>Disetujui/Ditolak</th>
                  <th>Alasan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>13/07/2025</td>
                  <td>20/07/2025</td>
                  <td>20/10/2025</td>
                  <td>Cuti Melahirkan</td>
                  <td>Sudah 7 bulan</td>
                  <td>
                    <span class="badge text-bg-success">Disetujui</span>
                  </td>
                  <td>
                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#alasanModal">
                      <i class="bi bi-eye"></i>
                    </button>
                    <div class="modal-container">
                      <?php include "modals/izin/alasan.php";?>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </main>
    <?php include  "../includes/footer.php";?>
    </div>
  </body>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../dist/js/adminlte.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
      $(document).ready(function () {
        $('#tablePerIzin').DataTable({
          lengthMenu: [5, 10, 25, 50, 100],
          pageLength: 10
        });
      });
    </script>
</html>