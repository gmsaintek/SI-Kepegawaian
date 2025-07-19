<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Sisforpeg Pegawai</title>
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="title" content="Sisforpeg Pegawai" />
        <meta name="author" content="Gantari Mengwi 2025" />
        <meta name="description" content="Sisforpeg Desa"/>

        <link href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <link rel="stylesheet" href="../../dist/css/adminlte.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    </head>
    <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
        <div class="app-wrapper">
            <?php include '../includes/header.php';?>
            <?php include '../includes/sidebar_user.php';?>
            <main class="app-main">
                <div class="app-content-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3 class="mb-0">Home</h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-end">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item">Welcome, (name)!</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-lg-6">
                                    <div class="small-box text-bg-warning">
                                        <div class="inner">
                                            <h3>(count)</h3>
                                            <p>Sisa hari izin cuti</p>
                                        </div>
                                        <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                                            Lebih Lanjut
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-danger card-outline mb-4">
                                    <div class="card-header">
                                        <h3 class="card-title">Presensi</h3>
                                        </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <button class="btn btn-outline-primary btn-sm" id="prevMonth">◀ Prev</button>
                                            <h3 id="monthYear" class="text-center flex-grow-1"></h3>
                                            <button class="btn btn-outline-primary btn-sm" id="nextMonth">Next ▶</button>
                                        </div>
                                        <div class="row text-center fw-bold border-bottom pb-2 mb-2">
                                            <div class="col">Sun</div>
                                            <div class="col">Mon</div>
                                            <div class="col">Tue</div>
                                            <div class="col">Wed</div>
                                            <div class="col">Thu</div>
                                            <div class="col">Fri</div>
                                            <div class="col">Sat</div>
                                        </div>
                                        <div id="calendarBody"></div>
                                        <div class="mt-4">
                                            <div class="row text-center">
                                                <div class="col"><span class="badge bg-success">Hadir</span></div>
                                                <div class="col"><span class="badge bg-danger">Absen / Mendatang</span></div>
                                                <div class="col"><span class="badge bg-warning text-dark">Hari ini</span></div>
                                                <div class="col"><span class="badge bg-secondary">Izin</span></div>
                                                <div class="col"><span class="badge bg-white border text-dark">Weekend / Libur</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>          
                    </div>
                </div>
            </main>
            <?php include '../includes/footer.php';?>
        </div>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../../dist/js/adminlte.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

        <script>
            const calendarBody = document.getElementById("calendarBody");
            const monthYear = document.getElementById("monthYear");
            const prevMonthBtn = document.getElementById("prevMonth");
            const nextMonthBtn = document.getElementById("nextMonth");

            let current = new Date();

            function renderCalendar(year, month) {
                calendarBody.innerHTML = "";

                const hariini = new Date();
                const firstDay = new Date(year, month, 1);
                const lastDate = new Date(year, month + 1, 0).getDate();
                const startDay = firstDay.getDay(); // 0 = Sunday

                const prevMonthLastDate = new Date(year, month, 0).getDate();

                monthYear.textContent = firstDay.toLocaleString("default", { month: "long", year: "numeric" });

                let dateCounter = 1;
                let nextMonthCounter = 1;
                let totalCells = 0;

                for (let week = 0; week < 5; week++) {
                    const row = document.createElement("div");
                    row.className = "row text-center mb-2";

                for (let day = 0; day < 7; day++) {
                    const col = document.createElement("div");
                    col.className = "col border p-2";
                    totalCells++;

                let cellDate;
                let text = "";
                let bgClass = "bg-light";
                let isHariini = false;

                if (week === 0 && day < startDay) {
                    text = prevMonthLastDate - (startDay - day - 1);
                    cellDate = new Date(year, month - 1, text);
                    bgClass = "bg-light text-muted";
                } else if (dateCounter > lastDate) {
                    text = nextMonthCounter++;
                    cellDate = new Date(year, month + 1, text);
                    bgClass = "bg-light text-muted";
                } else {
                    text = dateCounter;
                    cellDate = new Date(year, month, dateCounter++);

                const isWeekend = cellDate.getDay() === 0 || cellDate.getDay() === 6;
                isHariini = cellDate.toDateString() === hariini.toDateString();

                let status = isWeekend ? "libur" :
                    cellDate < hariini ? ["Hadir", "izin", "absen"][Math.floor(Math.random() * 3)] :
                    "mendatang";

                switch (status) {
                    case "Hadir":
                    bgClass = "bg-success text-white";
                    break;
                case "izin":
                    bgClass = "bg-secondary text-white";
                    break;
                case "libur":
                    bgClass = "bg-white";
                    break;
                case "mendatang":
                case "absen":
                    bgClass = "bg-danger text-white";
                    break;
                }

                if (isHariini) {
                    bgClass = "bg-warning text-dark";
                }
            }

            col.className += ` ${bgClass}`;
            col.textContent = text;
            row.appendChild(col);
        }

        calendarBody.appendChild(row);
        }
  }

  prevMonthBtn.addEventListener("click", () => {
    current.setMonth(current.getMonth() - 1);
    renderCalendar(current.getFullYear(), current.getMonth());
  });

  nextMonthBtn.addEventListener("click", () => {
    current.setMonth(current.getMonth() + 1);
    renderCalendar(current.getFullYear(), current.getMonth());
  });

  // Initial render
  renderCalendar(current.getFullYear(), current.getMonth());
</script>
    </body>
</html>