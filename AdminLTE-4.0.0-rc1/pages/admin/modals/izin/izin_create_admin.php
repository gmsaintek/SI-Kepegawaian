<div class="modal fade" id="izin_create_admin" tabindex="-1" aria-labelledby="izin_create_adminLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
    
            <div class="modal-header">
                <h5 class="modal-title" id="izin_create_adminLabel">Cetak Laporan Izin Pegawai</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <div class="mb-3">
                    <label class="form-label">Jangka Waktu Izin</label>
                    <div class="input-group">
                        <span class="input-group-text">Dari</span>
                        <input type="date" class="form-control" id="start_periode_izin" required>
                        <span class="input-group-text">Sampai</span>
                        <input type="date" class="form-control" id="end_periode_izin" required>
                    </div>
                </div>


                <div class="mb-3">
                    <label for="type_izincreate_admin" class="form-label">Jenis Cuti</label>
                    <select class="form-select" id="type_izincreate_admin">
                        <option value="">Pilih...</option>
                        <option value="Sakit">Sakit</option>
                        <option value="Hamil">Izin</option>
                        <option value="Ayah">Ayah</option>
                        <option value="Kedukaan">Kedukaan</option>
                        <option value="Pendidikan">Pendidikan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="message-textcreate_admin" class="col-form-label">Alasan Cuti</label>
                    <textarea class="form-control" id="message-textcreate_admin"></textarea>
                </div>

            </div>

            <div class="modal-footer">
                <button class="btn btn-primary">Simpan</button>
                <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                
            </div>

        </div>
    </div>
</div>