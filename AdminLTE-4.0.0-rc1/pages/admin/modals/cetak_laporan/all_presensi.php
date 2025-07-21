<div class="modal fade" id="cetaklaporan_presensi_all" tabindex="-1" aria-labelledby="cetaklaporan_presensi_allLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
    
            <div class="modal-header">
                <h5 class="modal-title" id="cetaklaporan_presensi_allLabel">Cetak Laporan Presensi Pegawai</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label for="format_presensi_all" class="form-label">Format Laporan</label>
                    <select class="form-select" id="format_presensi_all" required >
                        <option selected disabled>Pilih...</option>
                        <option value="1">PDF</option>
                        <option value="2">XLSX</option>
                        <option value="3">CSV</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="period_cetak_presensi" class="form-label">Periode</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Dari</span>
                        <input type="month" class="form-control" id="startMonth_cetak_presensi" required>
                        <span class="input-group-text">Sampai</span>
                        <input type="month" class="form-control" id="endMonth_cetak_presensi" required>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="todayCheck_cetak_presensi" />
                        <label class="form-check-label" for="todayCheck_cetak_presensi">Sampai bulan ini</label>
                    </div>
                    <div id="dateHelp" class="form-text">Format: dddd-mm (contoh: 2025-07)</div>
                </div>

                <div class="mb-3">
                    <label for="divisi_presensi_all" class="form-label">Divisi</label>
                    <select class="form-select" id="divisi_presensi_all">
                        <option selected>Pilih...</option>
                        <option value="Perbekel">Perbekel</option>
                        <option value="Sekretaris Desa">Sekretaris Desa</option>
                        <option value="Kasi Pemerintahan">Kasi Pemerintahan</option>
                        <option value="Kasi Kesejahteraan">Kasi Kesejahteraan Rakyat</option>
                        <option value="Kasi Kesejahteraan">Kasi Pelayanan</option>
                        <option value="Kaur Umum">Kaur Umum</option>
                        <option value="Kaur Keuangan">Kaur Keuangan</option>
                        <option value="Kaur Perencanaan">Kaur Perencanaan </option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="jabatan_presensi_all" class="form-label">Jabatan</label>
                    <select class="form-select" id="jabatan_presensi_all" >
                        <option selected>Pilih...</option>
                        <option value="Kepala Bagian">Kepala Bagian</option>
                        <option value="Staf">Staf</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="status_presensi_all" class="form-label">Status Kepegawaian</label>
                    <select class="form-select" id="status_presensi_all" >
                        <option value="">Pilih...</option>
                        <option value="Kepala Bagian">Tetap</option>
                        <option value="Staf">Magang</option>
                        <option value="Staf">Honorer</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="statuspre_presensi_all" class="form-label">Status Kehadiran</label>
                    <select class="form-select" id="statuspre_presensi_all">
                        <option value="">Pilih...</option>
                        <option value="Hadir">Hadir</option>
                        <option value="Izin">Izin</option>
                        <option value="Absen">Absen</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-warning">Cetak</button>
                <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<script>
    const endMonthInput = document.getElementById('endMonth_cetak_presensi');
    const todayCheck = document.getElementById('todayCheck_cetak_presensi');

    todayCheck.addEventListener('change', function () {
        if (this.checked) {
            const today = new Date();
            const thisMonth = today.toISOString().slice(0, 7); // YYYY-MM
            endMonthInput.value = thisMonth;
        }
    });
</script>
