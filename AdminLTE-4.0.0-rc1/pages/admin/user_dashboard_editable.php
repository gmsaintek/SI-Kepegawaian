<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dashboard</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="AdminLTE v4 | Dashboard" />
    <meta name="author" content="ColorlibHQ" />
    <meta
      name="description"
      content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS."
    />
    <meta
      name="keywords"
      content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"
    />
    <!--end::Primary Meta Tags-->
    <!-- Font -->
    <link href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="../../dist/css/adminlte.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
  </head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
  <div class="app-wrapper">
    <?php include 'features/navbar.php';?>
    <?php include 'features/sidebar.php';?>
    <main class="app-main">
      <div class="app-content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <h3 class="mb-0">
                Dashboard
              </h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item">
                  <a href="index.php">
                    Home
                  </a>
                </li>
                <li class="breadcrumb-item">
                  Dashboard
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="app-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="card card-primary card-outline mb-4">
                <div class="card-header">
                  <h3 class="card-title">Profil</h3>
                </div>
                <div class="card-body p-0">
                  <div class="text-center">
                    <img src="../../dist/assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" style="width: 160px; height: 160px;"/>
                  </div>
                  <table class="table">
                    <tbody>
                      <tr>
                        <th>Nama</th>
                        <td>(name)</td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <th>NIP</th>
                        <td>280898</td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <th>Tempat Lahir</th>
                        <td>Seoul</td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <th>Tanggal Lahir</th>
                        <td>21/02/1994</td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <th>Jabatan</th>
                        <td>Admin</td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <th>Status Kepegawaian</th>
                        <td>Tetap</td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <th>Pendidikan</th>
                        <td>S1</td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <th>Alamat</th>
                        <td>Jl. Dolor Sit, Amet 19892</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-success card-outline mb-4">
                <div class="card-header">
                  <h3 class="card-title">Riwayat</h3>
                </div>
                <div class="card-body">
                  <div class="card card-success collapsed-card mb-2">
                    <div class="card-header">
                      <h4 class="card-title">Jabatan</h4>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                          <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                          <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                      <table class="table table-bordered">
                        <thead>
                          <th>Tanggal Mulai</th>
                          <th>Jabatan</th>
                          <th>Status Kepegawaian</th>
                          <th>Tanggal Akhir</th>
                          <th>SK</th>
                          <th>Keterangan</th>
                        </thead>
                        <tbody>
                          <td>13/10/2002</td>
                          <td>Staf IT</td>
                          <td>Magang</td>
                          <td>13/10/2005</td>
                          <td>
                            <a href="#">SK</a>
                          </td>
                          <td>-</td>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="card card-success collapsed-card mb-2">
                    <div class="card-header">
                      <h4 class="card-title">Gaji</h4>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                          <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                          <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                      <table class="table table-bordered">
                        <thead>
                          <th>Bulan</th>
                          <th>Tanggal Penerbitan</th>
                          <th>Tunjangan</th>
                          <th>Keterangan</th>
                          <th>Slip Gaji</th>
                        </thead>
                        <tbody>
                          <td>Desember 2025</td>
                          <td>01/01/2026</td>
                          <td>-</td>
                          <td>-</td>
                          <td>
                            <div class="d-flex gap-1">
                              <button class="btn btn-sm btn-primary">
                                <i class="bi bi-eye"></i>
                              </button>
                            </div>
                          </td>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="card card-success collapsed-card mb-2">
                    <div class="card-header">
                      <h4 class="card-title">Keluarga</h4>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                          <i data-lte-icon="expand" class="bi bi-plus"></i>
                          <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                      <table class="table">
                        <tbody>
                          <th>Posisi</th>
                          <td>Kepala Keluarga</td>
                        </tbody>
                        <tbody>
                          <th>Ibu</th>
                          <td>(name)'s mom</td>
                        </tbody>
                        <tbody>
                          <th>Bapak</th>
                          <td>(name)'s dad</td>
                        </tbody>
                        <tbody>
                          <th>Istri</th>
                          <td>(name)'s wife</td>
                        </tbody>
                        <tbody>
                          <th>Anak 1</th>
                          <td>(name)'s child 1</td>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="card card-success collapsed-card mb-2">
                    <div class="card-header">
                      <h4 class="card-title">Pendidikan</h4>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                          <i data-lte-icon="expand" class="bi bi-plus"></i>
                          <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                      <table class="table">
                        <tbody>
                          <th>TK</th>
                          <td>Tadika Mesra</td>
                        </tbody>
                        <tbody>
                          <th>SD</th>
                          <td>Kinderfield</td>
                        </tbody>
                        <tbody>
                          <th>SMP</th>
                          <td>SMP 1 Lorem</td>
                        </tbody>
                        <tbody>
                          <th>SMA</th>
                          <td>SMAK 1 Penabur Jakarta</td>
                        </tbody>
                        <tbody>
                          <th>S1</th>
                          <td>Universitas Gadjah Mada</td>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
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

                  <!-- Legend -->
                  <div class="mt-4">
                    <div class="row text-center">
                      <div class="col"><span class="badge bg-success">Present</span></div>
                      <div class="col"><span class="badge bg-danger">Absent / Future</span></div>
                      <div class="col"><span class="badge bg-warning text-dark">Today</span></div>
                      <div class="col"><span class="badge bg-secondary">Leave</span></div>
                      <div class="col"><span class="badge bg-white border text-dark">Weekend / Holiday</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>
          <?php include 'features/footer.php';?>
    </main>

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

    const today = new Date();
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
        let isToday = false;

        if (week === 0 && day < startDay) {
          // Fill previous month's dates
          text = prevMonthLastDate - (startDay - day - 1);
          cellDate = new Date(year, month - 1, text);
          bgClass = "bg-light text-muted";
        } else if (dateCounter > lastDate) {
          // Fill next month's dates
          text = nextMonthCounter++;
          cellDate = new Date(year, month + 1, text);
          bgClass = "bg-light text-muted";
        } else {
          // Current month's dates
          text = dateCounter;
          cellDate = new Date(year, month, dateCounter++);

          const isWeekend = cellDate.getDay() === 0 || cellDate.getDay() === 6;
          isToday = cellDate.toDateString() === today.toDateString();

          // Random status for current month days
          let status = isWeekend ? "holiday" :
                       cellDate < today ? ["present", "leave", "absent"][Math.floor(Math.random() * 3)] :
                       "future";

          switch (status) {
            case "present":
              bgClass = "bg-success text-white";
              break;
            case "leave":
              bgClass = "bg-secondary text-white";
              break;
            case "holiday":
              bgClass = "bg-white";
              break;
            case "future":
            case "absent":
              bgClass = "bg-danger text-white";
              break;
          }

          if (isToday) {
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