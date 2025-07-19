<!--ONLY STAF-->

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Rekomendasi Kenaikan Jabatan</title>
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="title" content="Rekomendasi Kenaikan Jabatan" />
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
                            <div class="col-sm-6"><h3 class="mb-0">Rekomendasi Kenaikan Jabatan</h3></div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-end">
                                    <li class="breadcrumb-item"><a href="admin_index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Rekomendasi Kenaikan Jabatan</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="d-flex gap-2">
                                <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#pengaturan">
                                    <i class="bi bi-plus"></i>
                                    <span>Pengaturan rekomendasi</span>
                                </button>
                                <div class="modal-container">
                                    <?php include "modals/rekomendasi/pengaturan.php";?>
                                </div>
                            </div>
                        </div>
                        <!-- setelah semua pengaturan selesai, table yang akan keluar based on the criteria-->
                        <div class="row">
                            <div class="col-md-12">
                                <table id="tablePegawai" class="table table-striped">
                                    <thead>
                                        <tr class="align-middle">
                                            <th>No.</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Divisi</th>
                                            <th>Status Kepegawaian</th>
                                            <th>Jumlah Presensi (1 tahun terakhir)</th>
                                            <th>Pendidikan Terakhir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>256821</td>
                                            <td>Lorem Ipsum</td>
                                            <td>Kaur TU</td>
                                            <td>Staf</td>
                                            <td>350</td>
                                            <td>S1</td>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>256821</td>
                                            <td>Lorem Ipsum</td>
                                            <td>Kaur TU</td>
                                            <td>Staf</td>
                                            <td>350</td>
                                            <td>S1</td>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>256821</td>
                                            <td>Lorem Ipsum</td>
                                            <td>Kaur TU</td>
                                            <td>Staf</td>
                                            <td>350</td>
                                            <td>S1</td>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./dist/js/adminlte.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</html>