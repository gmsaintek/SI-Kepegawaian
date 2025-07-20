<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="index.php" class="brand-link">
            <span class="brand-text fw-light">Sisforpeg</span>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <div class="user-panel d-flex align-items-center p-3">
                <div class="image me-2">
                    <img src="../../dist/assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" style="width: 32px; height: 32px;"/>
                </div>
                <div class="info">
                    <a href="user_dashboard_editable.php" class="d-block fw-bold text-white">(name)</a>
                    <small class="text-muted">Admin Desa</small>
                </div>
            </div>
            <hr class="my-3 text-secondary">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                    <i class="nav-icon bi bi-folder"></i>
                    <p>
                        Data
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="list_pegawai.php" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Pegawai</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="list_penggajian.php" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Penggajian</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="list_presensi.php" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Presensi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="list_izin.php" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Persetujuan Izin</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">Kenaikan Jabatan</li>
                <li class="nav-item">
                    <a href="kenaikanjabatan.php" class="nav-link">
                        <i class="nav-icon bi bi-file-earmark-person"></i>
                        <p>Kenaikan Jabatan</p>
                    </a>
                </li>
                <li class="nav-header">Personal Input</li>
                <li class="nav-item">
                    <a href="add_presensi.php" class="nav-link">
                        <i class="nav-icon bi bi-calendar-check"></i>
                        <p>Presensi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="add_izin.php" class="nav-link">
                        <i class="nav-icon bi bi-hand-thumbs-up"></i>
                        <p>Izin Cuti</p>
                    </a>
                </li>
                <hr class="my-3 text-secondary">
                <li class="nav-item">
                    <a href="#" class="nav-link text-danger">
                        <i class="nav-icon bi bi-box-arrow-right"></i>
                        <p>Log Out</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>