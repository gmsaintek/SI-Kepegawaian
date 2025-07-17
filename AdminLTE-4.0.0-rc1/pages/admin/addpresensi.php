<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Input Presensi</title>
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
    <?php include '../features/navbar.php';?>
    <?php include '../features/sidebar.php';?>
    <main class="app-main">
      <div class="app-content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <h3 class="mb-0">
                Input Presensi
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
                  Input Presensi
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="app-content">
        <div class="container-fluid">
          <div class="row">
            <div class="d-flex gap-2">
              <button type="button" class="btn btn-danger mb-2">
                <i class="bi bi-plus-lg"></i>
                <span>Presensi</span>
              </button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card mb-4">
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
    </main>
    <?php include '../features/footer.php';?>
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