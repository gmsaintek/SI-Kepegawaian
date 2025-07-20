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
                    <input type="number" class="form-control" id="criteria_pengaturan" required min="1" max="10">
                </div>

                <div id="dynamicCriteriaContainer"></div>
                <!-- next part comes up based on criterias used -->
                <!-- tergantung kriteria yang mana, either weight or match will come out -->
                <!-- e.g. kriterianya presensi (set as benefit) - yang keluar weight / kriterianya pendidikan terakhir - yang keluar match-->
                <!-- for now, aku set kriterianya as 2 -->
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<script>
    const criteriaList = [
        { label: "Umur", type: "categorical", options: ["<25", "25-35", "36-45", ">45"] },
        { label: "Pendidikan Terakhir", type: "categorical", options: ["S1", "S2", "S3"] },
        { label: "Jumlah Presensi", type: "numeric" },
        { label: "Jumlah Izin", type: "numeric" },
    ];

    const container = document.getElementById("dynamicCriteriaContainer");
    const criteriaInput = document.getElementById("criteria_pengaturan");

    criteriaInput.addEventListener("input", () => {
        const count = parseInt(criteriaInput.value);
        container.innerHTML = ""; // clear

        for (let i = 1; i <= count; i++) {
            const row = document.createElement("div");
            row.className = "row mb-3";
            row.innerHTML = `
                <div class="col">
                    <label class="form-label">Kriteria ${i}</label>
                    <select class="form-select criteria-select" data-index="${i}" required>
                        <option value="">Pilih...</option>
                        ${criteriaList.map(c => `<option value="${c.label}">${c.label}</option>`).join("")}
                    </select>
                </div>
                <div class="col dynamic-input" id="dynamicInput_${i}">
                    <!-- Filled by JS depending on selection -->
                </div>
            `;
            container.appendChild(row);
        }
    });

    container.addEventListener("change", function (e) {
        if (!e.target.classList.contains("criteria-select")) return;

        const index = e.target.dataset.index;
        const selected = e.target.value;
        const criterion = criteriaList.find(c => c.label === selected);
        const dynamicCol = document.getElementById(`dynamicInput_${index}`);

        if (!criterion) return;

        if (criterion.type === "numeric") {
            dynamicCol.innerHTML = `
                <label class="form-label">Bobot</label>
                <input type="number" step="0.01" max="1" min="0" class="form-control" name="criteria_weight_${index}" required>
            `;
        } else if (criterion.type === "categorical") {
            dynamicCol.innerHTML = `
                <label class="form-label">Pencocokan</label>
                <select class="form-select" name="criteria_match_${index}" required>
                    <option value="">Pilih...</option>
                    ${criterion.options.map(opt => `<option value="${opt}">${opt}</option>`).join("")}
                </select>
            `;
        }
    });
</script>
