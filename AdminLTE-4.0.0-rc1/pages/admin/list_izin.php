<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Semua Pegawai | Sisforpeg</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="AdminLTE v4 | Dashboard" />
    <meta name="author" content="ColorlibHQ" />
    <meta
      name="description"
      
    />
    <meta
      name="keywords"
      
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
                Data Perizinan Cuti
              </h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item">
                    <a href="index.html">
                        Home
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Data Perizinan Cuti
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex gap-2">
                    <button type="button" class="btn btn-warning mb-2">
                        <i class="bi bi-printer"></i>
                        <span>Cetak Laporan</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="col-md-12">
                <table id="tableIzin" class="table table-bordered">
                    <thead>
                        <tr class="align-middle">
                            <th>No.</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Tanggal Awal Cuti</th>
                            <th>Tanggal Akhir Cuti</th>
                            <th>Jenis Cuti</th>
                            <th>Alasan Cuti</th>
                            <th>Persetujuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>256821</td>
                            <td>Lorem Ipsum</td>
                            <td>13/07/2025</td>
                            <td>20/07/2025</td>
                            <td>20/10/2025</td>
                            <td>Cuti Melahirkan</td>
                            <td>Sudah 7 bulan</td>
                            <td>
                              <div class="d-flex gap-1">
                                <button class="btn btn-sm btn-success">
                                  <i class="bi bi-check"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#rejectedIzin">
                                  <i class="bi bi-x"></i>
                                </button>
                                <div class="modal" id="rejectedIzin" tabindex="-1" aria-labelledby="rejectedIzinLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="rejectedIzinLabel">Cantumkan Alasan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="mb-3">
                                          <label for="message-text" class="col-form-label">Alasan</label>
                                          <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Simpan</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
    <script>
        $(document).ready(function () {
            $('#tableIzin').DataTable({
                lengthMenu: [5, 10, 25, 50, 100],
                pageLength: 10
            });
        });
    </script>
</body>
</html>