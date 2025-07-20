<div class="modal fade" id="cetaklaporan_izin_all" tabindex="-1" aria-labelledby="cetaklaporan_izin_allLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
    
            <div class="modal-header">
                <h5 class="modal-title" id="cetaklaporan_izin_allLabel">Cetak Laporan Izin Pegawai</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <div class="mb-3">
                    <label for="format_izin_all" class="form-label">Format Laporan</label>
                    <select class="form-select" id="format_izin_all" required>
                        <option selected disabled>Pilih...</option>
                        <option value="1">PDF</option>
                        <option value="2">XLSX</option>
                        <option value="3">CSV</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Periode Pengajuan Izin</label>
                    <div class="input-group">
                        <span class="input-group-text">Dari</span>
                        <input type="date" class="form-control" id="start_pengajuan_izin" required>
                        <span class="input-group-text">Sampai</span>
                        <input type="date" class="form-control" id="end_pengajuan_izin" required>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="check_today_pengajuan">
                        <label class="form-check-label" for="check_today_pengajuan">Sampai hari ini</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Periode Izin Diberikan</label>
                    <div class="input-group">
                        <span class="input-group-text">Dari</span>
                        <input type="date" class="form-control" id="start_periode_izin" required>
                        <span class="input-group-text">Sampai</span>
                        <input type="date" class="form-control" id="end_periode_izin" required>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="check_today_periode">
                        <label class="form-check-label" for="check_today_periode">Sampai hari ini</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="divisi_izin_all" class="form-label">Divisi</label>
                    <select class="form-select" id="divisi_izin_all">
                        <option selected>Pilih...</option>
                        <option value="Perbekel">Perbekel</option>
                        <option value="Sekretaris Desa">Sekretaris Desa</option>
                        <option value="Kasi Pemerintahan">Kasi Pemerintahan</option>
                        <option value="Kasi Kesejahteraan">Kasi Kesejahteraan Rakyat</option>
                        <option value="Kasi Kesejahteraan">Kasi Pelayanan</option>
                        <option value="Kaur Umum">Kaur Umum</option>
                        <option value="Kaur Keuangan">Kaur Keuangan</option>
                        <option value="Kaur Perencanaan">Kaur Perencanaan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="jabatan_izin_all" class="form-label">Jabatan</label>
                    <select class="form-select" id="jabatan_izin_all">
                        <option selected>Pilih...</option>
                        <option value="Kepala Bagian">Kepala Bagian</option>
                        <option value="Staf">Staf</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="status_izin_all" class="form-label">Status Kepegawaian</label>
                    <select class="form-select" id="status_izin_all">
                        <option value="">Pilih...</option>
                        <option value="Tetap">Tetap</option>
                        <option value="Magang">Magang</option>
                        <option value="Honorer">Honorer</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="type_izin_all" class="form-label">Jenis Cuti</label>
                    <select class="form-select" id="type_izin_all">
                        <option value="">Pilih...</option>
                        <option value="Sakit">Sakit</option>
                        <option value="Hamil">Izin</option>
                        <option value="Ayah">Ayah</option>
                        <option value="Kedukaan">Kedukaan</option>
                        <option value="Pendidikan">Pendidikan</option>
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
    const endPengajuan = document.getElementById('end_pengajuan_izin');
    const checkPengajuan = document.getElementById('check_today_pengajuan');

    const endPeriode = document.getElementById('end_periode_izin');
    const checkPeriode = document.getElementById('check_today_periode');

    function setCurrentMonthTo(input) {
        const today = new Date();
        const isoMonth = today.toISOString().split('T')[0]; // YYYY-MM-DD
        input.value = isoMonth;
    }

    checkPengajuan.addEventListener('change', function () {
        if (this.checked) setCurrentMonthTo(endPengajuan);
    });

    checkPeriode.addEventListener('change', function () {
        if (this.checked) setCurrentMonthTo(endPeriode);
    });
</script>
