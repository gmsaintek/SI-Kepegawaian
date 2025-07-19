<div class="modal fade" id="pengaturan" tabindex="-1" aria-labelledby="pengaturanLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
    
            <div class="modal-header">
                <h5 class="modal-title" id="pengaturanLabel">Pengaturan Rekomendasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label for="divisi_pengaturan" class="form-label">Divisi</label>
                    <select class="form-select" id="divisi_pengaturan" required>
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
                <!-- yang topn_pengeluaran ini baru digunakan pas analisis -->
                <div class="mb-3">
                    <label for="topn_pengaturan" class="form-label">Jumlah pegawai untuk direkomendasikan</label>
                    <input type="number" class="form-control" id="topn_pengaturan" required>
                </div>
                <div class="mb-3">
                    <label for="criteria_pengaturan" class="form-label">Jumlah Kriteria</label>
                    <input type="number" class="form-control" id="criteria_pengaturan" required>
                </div>
                <!-- next part comes up based on criterias used -->
                <!-- tergantung kriteria yang mana, either weight or match will come out -->
                <!-- e.g. kriterianya presensi (set as benefit) - yang keluar weight / kriterianya pendidikan terakhir - yang keluar match-->
                <!-- for now, aku set kriterianya as 2 -->
                <div class="row mb-3">
                    <!-- example pertama: kita ambil jumlah presensi-->
                    <div class="col">
                        <label for="criteria_1" class="form-label">Kriteria 1</label>
                        <select class="form-select" id="pendidikan" required>
                            <option value="">Pilih...</option>
                            <option value="Jumlah Presensi">Jumlah Presensi (1 tahun terakhir)</option>
                            <option value="Pendidikan Terakhir">Pendidikan Terakhir</option>
                            <option value="Jumlah Izin">Jumlah Izin</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="criteria_weight_1" class="form-label">Bobot</label>
                        <input type="number" class="form-control" id="criteria_weight_1" max="1" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <!-- example kedua: kita ambil pendidikan terakhir-->
                    <div class="col">
                        <label for="criteria_1" class="form-label">Kriteria 1</label>
                        <select class="form-select" id="pendidikan" required>
                            <option value="">Pilih...</option>
                            <option value="Jumlah Presensi">Jumlah Presensi (1 tahun terakhir)</option>
                            <option value="Pendidikan Terakhir">Pendidikan Terakhir</option>
                            <option value="Jumlah Izin">Jumlah Izin</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="criteria_weight_2" class="form-label">Pencocokan</label>
                        <select class="form-select" id="criteria_weight_2" required>
                            <option value="">Pilih...</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>