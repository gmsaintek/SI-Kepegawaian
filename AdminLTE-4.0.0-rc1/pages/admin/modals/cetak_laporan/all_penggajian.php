<div class="modal fade" id="cetaklaporan_penggajian_all" tabindex="-1" aria-labelledby="cetaklaporan_penggajian_allLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
    
            <div class="modal-header">
                <h5 class="modal-title" id="cetaklaporan_penggajian_allLabel">Cetak Laporan Penggajian Pegawai</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label for="format_penggajian_all" class="form-label">Format Laporan</label>
                    <select class="form-select" id="format_penggajian_all" required >
                        <option selected>Pilih...</option>
                        <option value="1">PDF</option>
                        <option value="2">XLSX</option>
                        <option value="3">CSV</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="period_cetak_penggajian" class="form-label">Periode</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Dari</span>
                        <input type="month" class="form-control" id="startMonth_cetak_penggajian" required>
                        <span class="input-group-text">Sampai</span>
                        <input type="month" class="form-control" id="endMonth_cetak_penggajian" required>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="todayCheck_cetak_penggajian" />
                        <label class="form-check-label" for="todayCheck_cetak_penggajian">Sampai bulan ini</label>
                    </div>
                    <div id="dateHelp" class="form-text">Format: dddd-mm (contoh: 2025-07)</div>
                </div>

                <div class="mb-3">
                    <label for="divisi_penggajian_all" class="form-label">Divisi</label>
                    <select class="form-select" id="divisi_penggajian_all" >
                        <option value="">Pilih...</option>
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
                    <label for="jabatan_penggajian_all" class="form-label">Jabatan</label>
                    <select class="form-select" id="jabatan_penggajian_all" >
                        <option value="">Pilih...</option>
                        <option value="Kepala Bagian">Kepala Bagian</option>
                        <option value="Staf">Staf</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="status_penggajian_all" class="form-label">Status Kepegawaian</label>
                    <select class="form-select" id="status_penggajian_all" >
                        <option value="">Pilih...</option>
                        <option value="Kepala Bagian">Tetap</option>
                        <option value="Staf">Magang</option>
                        <option value="Staf">Honorer</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<script>
    const endMonthInput = document.getElementById('endMonth_cetak_penggajian');
    const todayCheck = document.getElementById('todayCheck_cetak_penggajian');

    todayCheck.addEventListener('change', function () {
        if (this.checked) {
            const today = new Date();
            const thisMonth = today.toISOString().slice(0, 7); // YYYY-MM
            endMonthInput.value = thisMonth;
        }
    });
</script>
