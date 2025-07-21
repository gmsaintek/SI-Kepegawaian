<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Pegawai Baru | Sisforpeg</title>
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="title" content="Pegawai Baru | Sisforpeg" />
        <meta name="author" content="Gantari Mengwi 2025" />
        <meta name="description" content="Sisforpeg Desa"/>

        <link href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <link rel="stylesheet" href="../../dist/css/adminlte.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

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
                                <h3 class="mb-0">Registrasi Pegawai Baru</h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-end">
                                    <li class="breadcrumb-item"><a href="admin_index.php">Home</a></li>
                                    <li class="breadcrumb-item"><a href="list_pegawai.php">Data Pegawai</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Registrasi Pegawai Baru</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4>Data Pribadi</h4>
                                <form>
                                    <div class="mb-3">
                                        <label for="nip" class='form-label'>NIP</label>
                                        <input type="text" class="form-control" id="nip" required></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Pas Foto Berwarna</label>
                                        <input class="form-control" type="file" id="image" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama" required>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                                            <input type="text" class="form-control" id="tempatLahir" required>
                                        </div>
                                        <div class="col">
                                            <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="tanggalLahir" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Jenis Kelamin</label>
                                        <select class="form-select" id="gender" required>
                                            <option value="">Pilih...</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="agama" class="form-label">Agama</label>
                                        <select class="form-select" id="agama" required>
                                            <option>Pilih...</option>
                                            <option>Islam</option>
                                            <option>Kristen</option>
                                            <option>Katolik</option>
                                            <option>Hindu</option>
                                            <option>Buddha</option>
                                            <option>Konghucu</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <textarea class="form-control" id="alamat" rows="2" required></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-6">
                                <h4>Data Jabatan</h4>
                                <div class="mb-3">
                                    <label for="divisi" class="form-label">Divisi</label>
                                    <select class="form-select" id="divisi" required>
                                        <option value="">Pilih...</option>
                                        <option value="Sekretaris Desa">Sekretaris Desa</option>
                                        <option value="Kasi Pemerintahan">Kasi Pemerintahan</option>
                                        <option value="Kasi Kesejahteraan">Kasi Kesejahteraan Rakyat</option>
                                        <option value="Kasi Kesejahteraan">Kasi Pelayanan</option>
                                        <option value="Kaur Umum">Kaur Umum</option>
                                        <option value="Kaur Keuangan">Kaur Keuangan</option>
                                        <option value="Kaur Umum">Kaur Perencanaan </option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="jabatan" class="form-label">Jabatan</label>
                                    <select class="form-select" id="jabatan" required>
                                        <option value="">Pilih...</option>
                                        <option value="Kepala Bagian">Kepala Bagian</option>
                                        <option value="Staf">Staf</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status Kerja</label>
                                    <select class="form-select" id="status" required>
                                        <option value="">Pilih...</option>
                                        <option value="Kepala Bagian">Tetap</option>
                                        <option value="Staf">Magang</option>
                                        <option value="Staf">Honorer</option>
                                    </select>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="skCpns" class="form-label">No. SK CPNS</label>
                                        <input type="text" class="form-control" id="skCpns" required>
                                    </div>
                                    <div class="col">
                                        <label for="skCpnsfile" class="form-label">SK CPNS</label>
                                        <input class="form-control" type="file" id="skCpnsfile" required>
                                    </div>      
                                </div>
                                <hr>
                                <h4>Data lain</h4>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="pendidikan" class="form-label">Pendidikan Terakhir</label>
                                        <select class="form-select" id="pendidikan" required>
                                            <option value="">Pilih...</option>
                                            <option value="Sekretaris Desa">S1</option>
                                            <option value="Kasi Pemerintahan">S2</option>
                                            <option value="Kasi Kesejahteraan">S3</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="pendidikanfile" class="form-label">Ijazah Terakhir</label>
                                        <input class="form-control" type="file" id="pendidikanfile" required>
                                    </div>      
                                </div>
                                <div class="mb-3">
                                    <label for="contactno" class="form-label">Nomor HP</label>
                                    <input class="form-control" type="tel" id="contactno" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input class="form-control" type="email" id="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                <a href="list_pegawai.php" class="btn btn-danger">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <?php include '../includes/footer.php'?>
        </div>
    </body>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../dist/js/adminlte.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
</html>