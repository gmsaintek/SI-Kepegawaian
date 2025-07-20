<div class="modal fade" id="edit_pendidikan" tabindex="-1" aria-labelledby="edit_pendidikanLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
    
            <div class="modal-header">
                <h5 class="modal-title" id="edit_pendidikanLabel">Edit Riwayat Pendidikan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label for="posisi_pendidikan" class="form-label">Pendidikan Terakhir</label>
                    <select class="form-select" id="posisi_pendidikan" required>
                        <option value="" selected disabled>Pilih Pendidikan</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>

                <!-- Dynamic Education Fields -->
                <div id="s3Field" class="mb-3 d-none">
                    <label for="s3" class="form-label">Tempat S3</label>
                    <input type="text" class="form-control" id="s3">
                </div>
                <div id="s2Field" class="mb-3 d-none">
                    <label for="s2" class="form-label">Tempat S2</label>
                    <input type="text" class="form-control" id="s2">
                </div>
                <div id="s1Field" class="mb-3 d-none">
                    <label for="s1" class="form-label">Tempat S1</label>
                    <input type="text" class="form-control" id="s1">
                </div>
                <div id="smaField" class="mb-3 d-none">
                    <label for="sma" class="form-label">Tempat SMA</label>
                    <input type="text" class="form-control" id="sma">
                </div>
                <div id="smpField" class="mb-3 d-none">
                    <label for="smp" class="form-label">Tempat SMP</label>
                    <input type="text" class="form-control" id="smp">
                </div>
                <div id="sdField" class="mb-3 d-none">
                    <label for="sd" class="form-label">Tempat SD</label>
                    <input type="text" class="form-control" id="sd">
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
document.getElementById("posisi_pendidikan").addEventListener("change", function () {
    const value = this.value;

    // Get all fields
    const s3 = document.getElementById("s3Field");
    const s2 = document.getElementById("s2Field");
    const s1 = document.getElementById("s1Field");
    const sma = document.getElementById("smaField");
    const smp = document.getElementById("smpField");
    const sd = document.getElementById("sdField");

    // Hide all first
    s3.classList.add("d-none");
    s2.classList.add("d-none");
    s1.classList.add("d-none");
    sma.classList.add("d-none");
    smp.classList.add("d-none");
    sd.classList.add("d-none");

    // Show based on value
    if (value === "S3") {
        s3.classList.remove("d-none");
        s2.classList.remove("d-none");
        s1.classList.remove("d-none");
        sma.classList.remove("d-none");
        smp.classList.remove("d-none");
        sd.classList.remove("d-none");
    } else if (value === "S2") {
        s2.classList.remove("d-none");
        s1.classList.remove("d-none");
        sma.classList.remove("d-none");
        smp.classList.remove("d-none");
        sd.classList.remove("d-none");
    } else if (value === "S1") {
        s1.classList.remove("d-none");
        sma.classList.remove("d-none");
        smp.classList.remove("d-none");
        sd.classList.remove("d-none");
    }
});
</script>
