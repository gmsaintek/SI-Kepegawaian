<div class="modal fade" id="cetaklaporan_staff_all" tabindex="-1" aria-labelledby="cetaklaporan_staff_allLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
    
            <div class="modal-header">
                <h5 class="modal-title" id="cetaklaporan_staff_allLabel">Cetak Laporan Data Pegawai</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label for="format_staff_all" class="form-label">Format Laporan</label>
                    <select class="form-select" id="format_staff_all" required >
                        <option selected>Pilih...</option>
                        <option value="1">PDF</option>
                        <option value="2">XLSX</option>
                        <option value="3">CSV</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="gender_staff_all" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="gender_staff_all">
                        <option value="">Pilih...</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="divisi_staff_all" class="form-label">Divisi</label>
                    <select class="form-select" id="divisi_staff_all" >
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
                    <label for="jabatan_staff_all" class="form-label">Jabatan</label>
                    <select class="form-select" id="jabatan_staff_all" >
                        <option value="">Pilih...</option>
                        <option value="Kepala Bagian">Kepala Bagian</option>
                        <option value="Staf">Staf</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="status_staff_all" class="form-label">Status Kepegawaian</label>
                    <select class="form-select" id="status_staff_all" >
                        <option value="">Pilih...</option>
                        <option value="Kepala Bagian">Tetap</option>
                        <option value="Staf">Magang</option>
                        <option value="Staf">Honorer</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary">Simpan</button>
                <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                
            </div>
        </div>
    </div>
</div>