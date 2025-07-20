<div class="modal fade" id="edit_family" tabindex="-1" aria-labelledby="edit_familyLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
    
            <div class="modal-header">
                <h5 class="modal-title" id="edit_familyLabel">Edit Riwayat Keluarga</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label for="mother" class="form-label">Ibu</label>
                    <input type="text" class="form-control" id="mother" required>
                </div>
                <div class="mb-3">
                    <label for="father" class="form-label">Bapak</label>
                    <input type="text" class="form-control" id="father" required>
                </div>
                <div class="mb-3">
                    <label for="posisi_family" class="form-label">Tempat Lahir</label>
                    <select class="form-select" id="posisi_family" required>
                        <option value="kkfather">Kepala Keluarga (Suami)</option>
                        <option value="kkmother">Kepala Keluarga (Istri)</option>
                        <option value="single">Belum Menikah</option>
                    </select>
                </div>
                <div id="istriField" class="mb-3 d-none">
                    <label for="istri" class="form-label">Istri</label>
                    <input type="text" class="form-control" id="istri" required>
                </div>
                <div id="anak1Field" class="mb-3 d-none">
                    <label for="anak1" class="form-label">Anak 1</label>
                    <input type="text" class="form-control" id="anak1">
                </div>
                <div id="anak2Field" class="mb-3 d-none">
                    <label for="anak2" class="form-label">Anak 2</label>
                    <input type="text" class="form-control" id="anak2">
                </div>
                <div id="anak3Field" class="mb-3 d-none">
                    <label for="anak3" class="form-label">Anak 3</label>
                    <input type="text" class="form-control" id="anak3">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary">Simpan</button>
                <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("posisi_family").addEventListener("change", function () {
        const value = this.value;

        const istri = document.getElementById("istriField");
        const anak1 = document.getElementById("anak1Field");
        const anak2 = document.getElementById("anak2Field");
        const anak3 = document.getElementById("anak3Field");

        istri.classList.add("d-none");
        anak1.classList.add("d-none");
        anak2.classList.add("d-none");
        anak3.classList.add("d-none");

        if (value === "kkfather") {
            istri.classList.remove("d-none");
            anak1.classList.remove("d-none");
            anak2.classList.remove("d-none");
            anak3.classList.remove("d-none");
        } else if (value === "kkmother") {
            anak1.classList.remove("d-none");
            anak2.classList.remove("d-none");
            anak3.classList.remove("d-none");
        }
    });
</script>
