<div class="modal fade" id="presensi_input" tabindex="-1" aria-labelledby="presensi_inputLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
    
            <div class="modal-header">
                <h5 class="modal-title" id="presensi_inputLabel">Input Presensi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Tanggal Sekarang</label>
                    <p id="currentDate" class="form-control-plaintext mb-2"></p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Lokasi Anda Sekarang</label>
                    <p id="locationStatus" class="form-control-plaintext mb-2">Mengambil lokasi...</p>
                    <a id="mapLink" href="#" target="_blank" style="display: none;" class="btn btn-sm btn-outline-primary mt-1">Lihat di Peta</a>
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
  const today = new Date();
  const formattedDate = today.toLocaleDateString('id-ID', {
    weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'
  });
  document.getElementById('currentDate').textContent = formattedDate;

  const positionTitle = "Kaur Keuangan";
  document.getElementById('currentPosition').textContent = positionTitle;

  if ("geolocation" in navigator) {
    navigator.geolocation.getCurrentPosition(
      function (position) {
        const { latitude, longitude } = position.coords;
        const locationStatus = document.getElementById('locationStatus');
        const mapLink = document.getElementById('mapLink');

        locationStatus.textContent = `Latitude: ${latitude.toFixed(5)}, Longitude: ${longitude.toFixed(5)}`;
        mapLink.href = `https://www.google.com/maps?q=${latitude},${longitude}`;
        mapLink.style.display = "inline-block";
      },
      function (error) {
        document.getElementById('locationStatus').textContent = "Gagal mendapatkan lokasi.";
      }
    );
  } else {
    document.getElementById('locationStatus').textContent = "Peramban Anda tidak mendukung Geolocation.";
  }
</script>
