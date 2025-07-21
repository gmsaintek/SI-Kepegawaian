<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dashboard | Sisforpeg</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Dashboard | Sisforpeg" />
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
    <?php include '../includes/sidebar_user.php';?>
    <main class="app-main">
      <div class="app-content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <h3 class="mb-0">Dashboard</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item">
                  <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item">Dashboard</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="app-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="card card-primary card-outline mb-4">
                <div class="card-header">
                  <h3 class="card-title">Profil</h3>
                </div>
                <div class="card-body p-0">
                  <div class="text-center">
                    <img src="../../dist/assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" style="width: 160px; height: 160px;"/>
                  </div>
                  <table class="table table-striped">
                    <tbody>
                      <tr>
                        <th>Nama Lengkap</th>
                        <td>(name)</td>
                      </tr>
                      <tr>
                        <th>NIP</th>
                        <td>280898</td>
                      </tr>
                      <tr>
                        <th>Tempat, Tanggal Lahir</th>
                        <td>Seoul, 21/02/1994</td>
                      </tr>
                      <tr>
                        <th>Jenis Kelamin</th>
                        <td>Laki-laki</td>
                      </tr>
                      <tr>
                        <th>Agama</th>
                        <td>Hindu</td>
                      </tr>
                      <tr>
                        <th>Divisi</th>
                        <td>Kaur TU</td>
                      </tr>
                      <tr>
                        <th>Jabatan</th>
                        <td>Staf</td>
                      </tr>
                      <tr>
                        <th>Status Kepegawaian</th>
                        <td>Tetap</td>
                      </tr>
                      <tr>
                        <th>Pendidikan Terakhir</th>
                        <td>S1</td>
                      </tr>
                      <tr>
                        <th>Alamat</th>
                        <td>Jl. Dolor Sit, Amet 19892</td>
                      </tr>
                      <tr>
                        <th>No telepon</th>
                        <td>0811xxxxxxx</td>
                      </tr>
                      <tr>
                        <th>Email</th>
                        <td>asdkghsl.sdfh@sdkfsh.com</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-success card-outline mb-4">
                <div class="card-header">
                  <h3 class="card-title">Riwayat</h3>
                </div>
                <div class="card-body">
                  <div class="card card-success collapsed-card mb-2">
                    <div class="card-header">
                      <h4 class="card-title">Jabatan</h4>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                          <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                          <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                      <!--Nanti yang dari kenaikan jabatan tambah disini jga-->
                      <table class="table table-striped">
                        <thead>
                          <th>Tanggal Mulai</th>
                          <th>Jabatan</th>
                          <th>Status Kepegawaian</th>
                          <th>Tanggal Akhir</th>
                          <th>SK</th>
                          <th>Keterangan</th>
                        </thead>
                        <tbody>
                          <td>13/10/2002</td>
                          <td>Staf IT</td>
                          <td>Magang</td>
                          <td>13/10/2005</td>
                          <td>
                            <a href="#">SK</a>
                          </td>
                          <td>-</td>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="card card-success collapsed-card mb-2">
                    <div class="card-header">
                      <h4 class="card-title">Gaji</h4>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                          <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                          <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                      <!--Nanti yang dari penerbitan slip gaji tambah disini-->
                      <table class="table table-striped">
                        <thead>
                          <th>Bulan</th>
                          <th>Tanggal Penerbitan</th>
                          <th>Slip Gaji</th>
                        </thead>
                        <tbody>
                          <td>Desember 2025</td>
                          <td>01/01/2026</td>
                          <td>
                            <div class="d-flex gap-1">
                              <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#penggajian_slip_view">
                                <i class="bi bi-eye"></i>
                              </button>
                              <div class="modal-container">
                                <?php include "modal/penggajian_view.php";?>
                              </div>
                            </div>
                          </td>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="card card-success collapsed-card mb-2">
                    <div class="card-header">
                      <!-- at default this is set as empty before this part is edited -->
                      <h4 class="card-title">Keluarga</h4>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                          <i data-lte-icon="expand" class="bi bi-plus"></i>
                          <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                      <table class="table table-striped">
                        <tbody>
                          <tr>
                            <th>Posisi</th>
                            <td>Kepala Keluarga</td>
                          </tr>
                          <tr>
                            <th>Ibu</th>
                            <td>(name)'s mom</td>
                          </tr>
                          <tr>
                            <th>Bapak</th>
                            <td>(name)'s dad</td>
                          </tr>
                          <tr>
                            <th>Istri</th>
                            <td>(name)'s wife</td>
                          </tr>
                          <tr>
                            <th>Anak 1</th>
                            <td>(name)'s child 1</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="card card-success collapsed-card mb-2">
                    <div class="card-header">
                      <h4 class="card-title">Pendidikan</h4>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                          <i data-lte-icon="expand" class="bi bi-plus"></i>
                          <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                      <table class="table table-striped">
                        <tbody>
                          <th>TK</th>
                          <td>Tadika Mesra</td>
                        </tbody>
                        <tbody>
                          <th>SD</th>
                          <td>Kinderfield</td>
                        </tbody>
                        <tbody>
                          <th>SMP</th>
                          <td>SMP 1 Lorem</td>
                        </tbody>
                        <tbody>
                          <th>SMA</th>
                          <td>SMAK 1 Penabur Jakarta</td>
                        </tbody>
                        <tbody>
                          <th>S1</th>
                          <td>Universitas Gadjah Mada</td>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
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