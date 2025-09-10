<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Car Wash Management Dashboard</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />

  <!-- Simple-DataTables CSS -->
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.css" rel="stylesheet" />

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f5f7fa;
      margin: 0;
    }

    /* Sidebar */
    .sidebar {
      height: 100vh;
      width: 220px;
      background-color: #003f8a;
      color: white;
      position: fixed;
      top: 0;
      left: 0;
      padding-top: 1.5rem;
      transition: transform 0.3s ease;
      overflow-y: auto;
      z-index: 1040;
    }

    .sidebar.collapsed {
      transform: translateX(-220px);
    }

    .sidebar a {
      color: white;
      text-decoration: none;
      padding: 12px 20px;
      display: flex;
      align-items: center;
      font-weight: 500;
      transition: background-color 0.2s ease;
    }

    .sidebar a:hover {
      background-color: #005cc6;
      text-decoration: none;
    }

    .sidebar a i {
      margin-right: 12px;
      font-size: 18px;
      min-width: 24px;
      text-align: center;
    }

    .sidebar .sidebar-header {
      font-weight: 700;
      font-size: 1.25rem;
      padding: 0 20px 1rem 20px;
      border-bottom: 1px solid rgba(255,255,255,0.2);
      margin-bottom: 1rem;
    }

    /* Navbar */
    nav.navbar-custom {
      height: 56px;
      background-color: white;
      box-shadow: 0 2px 5px rgb(0 0 0 / 0.1);
      position: fixed;
      top: 0;
      left: 220px;
      right: 0;
      display: flex;
      align-items: center;
      padding: 0 1rem;
      transition: left 0.3s ease;
      z-index: 1030;
    }

    nav.navbar-custom.collapsed {
      left: 0;
    }

    .btn-toggle-sidebar {
      background: none;
      border: none;
      font-size: 1.5rem;
      color: #003f8a;
      cursor: pointer;
      margin-right: 1rem;
    }

    .navbar-brand-text {
      font-weight: 600;
      font-size: 1.25rem;
      flex-grow: 1;
      user-select: none;
    }

    /* Admin dropdown */
    .dropdown-toggle::after {
      margin-left: 0.3rem;
    }

    /* Main Content */
    .main-content {
      margin-left: 220px;
      padding: 1.5rem 2rem 3rem;
      transition: margin-left 0.3s ease;
      margin-top: 56px;
    }

    .main-content.collapsed {
      margin-left: 0;
    }

    /* Banner */
    .banner {
      background: linear-gradient(90deg, #005cc6, #003f8a);
      color: white;
      border-radius: 0.5rem;
      padding: 2rem 1.5rem;
      margin-bottom: 2rem;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0, 63, 138, 0.3);
    }

    /* Cards */
    .stats-cards .card {
      border-radius: 0.5rem;
      box-shadow: 0 1px 8px rgb(0 0 0 / 0.1);
    }

    /* Responsive */
    @media (max-width: 768px) {
      .sidebar {
        transform: translateX(-220px);
        position: fixed;
        z-index: 1050;
      }
      .sidebar.collapsed {
        transform: translateX(0);
      }

      nav.navbar-custom {
        left: 0;
      }
      .main-content {
        margin-left: 0;
      }
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <aside class="sidebar" id="sidebar">
    <div class="sidebar-header text-center mb-4">
      <i class="bi bi-droplet-fill me-2" style="font-size: 1.5rem; color: #0dcaf0;"></i>My CarWash
    </div>
    <nav class="nav flex-column px-1">
      <a href="#" class="nav-link"><i class="bi bi-speedometer2"></i> Dashboard</a>
      <a href="#" class="nav-link"><i class="bi bi-house-door"></i> Home</a>
      <a href="#" class="nav-link"><i class="bi bi-info-circle"></i> About</a>
      <a href="#" class="nav-link"><i class="bi bi-tools"></i> Services</a>
      <a href="#" class="nav-link"><i class="bi bi-geo-alt"></i> Location</a>
      <a href="#" class="nav-link"><i class="bi bi-card-list"></i> Packages</a>
      <a href="#" class="nav-link"><i class="bi bi-envelope"></i> Contact</a>
    </nav>
  </aside>

  <!-- Navbar -->
  <nav class="navbar-custom d-flex align-items-center">
    <button class="btn-toggle-sidebar" id="btnToggleSidebar" aria-label="Toggle Sidebar">
      <i class="bi bi-list"></i>
    </button>
    <div class="navbar-brand-text">Dashboard</div>

    <div class="dropdown ms-auto">
      <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="adminDropdown" data-bs-toggle="dropdown" aria-expanded="false" role="button">
        <img src="https://via.placeholder.com/40" alt="Admin" class="rounded-circle me-2" />
        <span class="d-none d-md-inline">Admin</span>
      </a>
      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="adminDropdown">
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider" /></li>
        <li><a class="dropdown-item" href="../dashboard/admin_logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>

  <!-- Main Content -->
  <main class="main-content" id="mainContent">

    <!-- Banner -->
    <section class="banner">
      <h1>Welcome, Admin!</h1>
      <p>Your Car Wash Management System</p>
    </section>

    <!-- Cards -->
    <section class="stats-cards mb-4">
      <div class="row g-4">
        <div class="col-md-3 col-sm-6">
          <div class="card p-3">
            <div class="d-flex align-items-center">
              <i class="bi bi-calendar-check fs-1 text-primary me-3"></i>
              <div>
                <h5>New Bookings</h5>
                <h3>13</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="card p-3">
            <div class="d-flex align-items-center">
              <i class="bi bi-people fs-1 text-success me-3"></i>
              <div>
                <h5>New Customers</h5>
                <h3>75</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="card p-3">
            <div class="d-flex align-items-center">
                <i class="bi bi-check-circle fs-1 text-success me-3"></i>
              <div>
                <h5>Completed</h5>
                <h3>35</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="card p-3">
            <div class="d-flex align-items-center">
              <i class="bi bi-cash-stack fs-1 text-warning me-3"></i>
              <div>
                <h5>Total Revenue</h5>
                <h3>₱1,000</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Bookings Table -->
    <section>
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title mb-3">Recent Bookings</h5>
          <table id="bookingsTable" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th>#</th>
                <th>Customer</th>
                <th>Service</th>
                <th>Date</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Juan Dela Cruz</td>
                <td>Full Wash</td>
                <td>2025-09-08</td>
                <td><span class="badge bg-success">Completed</span></td>
              </tr>
              <tr>
                <td>2</td>
                <td>Maria Clara</td>
                <td>Interior Cleaning</td>
                <td>2025-09-07</td>
                <td><span class="badge bg-warning text-dark">Pending</span></td>
              </tr>
              <tr>
                <td>3</td>
                <td>Jose Rizal</td>
                <td>Waxing</td>
                <td>2025-09-05</td>
                <td><span class="badge bg-danger">Cancelled</span></td>
              </tr>
              <tr>
                <td>4</td>
                <td>Andres Bonifacio</td>
                <td>Full Wash</td>
                <td>2025-09-04</td>
                <td><span class="badge bg-success">Completed</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

  </main>

  <!-- Overlay for sidebar on mobile -->
  <div id="sidebarOverlay" style="
    position: fixed;
    top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(0,0,0,0.3);
    display: none;
    z-index: 1035;
  "></div>

  <!-- Bootstrap 5 JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Simple-DataTables JS -->
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/simple-datatables.js"></script>

  <script>
    // Sidebar toggle logic
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('mainContent');
    const navbar = document.querySelector('nav.navbar-custom');
    const btnToggleSidebar = document.getElementById('btnToggleSidebar');
    const sidebarOverlay = document.getElementById('sidebarOverlay');

    function toggleSidebar() {
      if(window.innerWidth <= 768) {
        // Mobile: toggle sidebar overlay
        if(sidebar.style.transform === 'translateX(0px)') {
          sidebar.style.transform = 'translateX(-220px)';
          sidebarOverlay.style.display = 'none';
        } else {
          sidebar.style.transform = 'translateX(0)';
          sidebarOverlay.style.display = 'block';
        }
      } else {
        // Desktop: collapse sidebar
        if(sidebar.classList.contains('collapsed')) {
          sidebar.classList.remove('collapsed');
          mainContent.classList.remove('collapsed');
          navbar.classList.remove('collapsed');
        } else {
          sidebar.classList.add('collapsed');
          mainContent.classList.add('collapsed');
          navbar.classList.add('collapsed');
        }
      }
    }

    btnToggleSidebar.addEventListener('click', toggleSidebar);

    // Close sidebar when clicking overlay on mobile
    sidebarOverlay.addEventListener('click', () => {
      sidebar.style.transform = 'translateX(-220px)';
      sidebarOverlay.style.display = 'none';
    });

    // Reset sidebar on window resize
    window.addEventListener('resize', () => {
      if(window.innerWidth > 768) {
        sidebar.style.transform = 'translateX(0)';
        sidebarOverlay.style.display = 'none';
        sidebar.classList.remove('collapsed');
        mainContent.classList.remove('collapsed');
        navbar.classList.remove('collapsed');
      } else {
        sidebar.style.transform = 'translateX(-220px)';
        sidebarOverlay.style.display = 'none';
      }
    });
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const table = document.querySelector('#bookingsTable');
      if (table) {
        new simpleDatatables.DataTable(table, {
          searchable: true,
          fixedHeight: true,
          perPage: 5,
          perPageSelect: [5, 10, 15, 20],
        });
      }
    });
  </script>

</body>
</html>
=======
<!-- Banner -->
<section class="banner text-center py-5 bg-primary text-white rounded shadow-sm mb-4">
  <h1 class="fw-bold">Welcome, Admin!</h1>
  <p class="mb-0">Your Car Wash Management System</p>
</section>

<!-- Cards -->
<section class="stats-cards mb-4">
  <div class="row g-4">
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm p-3">
        <div class="d-flex align-items-center">
          <i class="bi bi-calendar-check fs-1 text-primary me-3"></i>
          <div>
            <h6 class="text-muted mb-1">New Bookings</h6>
            <h3 class="fw-bold">13</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm p-3">
        <div class="d-flex align-items-center">
          <i class="bi bi-people fs-1 text-success me-3"></i>
          <div>
            <h6 class="text-muted mb-1">New Customers</h6>
            <h3 class="fw-bold">75</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm p-3">
        <div class="d-flex align-items-center">
          <i class="bi bi-check-circle fs-1 text-success me-3"></i>
          <div>
            <h6 class="text-muted mb-1">Completed</h6>
            <h3 class="fw-bold">35</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm p-3">
        <div class="d-flex align-items-center">
          <i class="bi bi-cash-stack fs-1 text-warning me-3"></i>
          <div>
            <h6 class="text-muted mb-1">Total Revenue</h6>
            <h3 class="fw-bold">₱1,000</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Bookings Table -->
<section>
  <div class="card shadow-sm">
    <div class="card-body">
      <h5 class="card-title fw-bold mb-3">Recent Bookings</h5>
      <div class="table-responsive">
        <table id="bookingsTable" class="table table-striped table-hover align-middle" style="width:100%">
          <thead class="table-light">
            <tr>
              <th>#</th>
              <th>Customer</th>
              <th>Service</th>
              <th>Date</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Juan Dela Cruz</td>
              <td>Full Wash</td>
              <td>2025-09-08</td>
              <td><span class="badge bg-success">Completed</span></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Maria Clara</td>
              <td>Interior Cleaning</td>
              <td>2025-09-07</td>
              <td><span class="badge bg-warning text-dark">Pending</span></td>
            </tr>
            <tr>
              <td>3</td>
              <td>Jose Rizal</td>
              <td>Waxing</td>
              <td>2025-09-05</td>
              <td><span class="badge bg-danger">Cancelled</span></td>
            </tr>
            <tr>
              <td>4</td>
              <td>Andres Bonifacio</td>
              <td>Full Wash</td>
              <td>2025-09-04</td>
              <td><span class="badge bg-success">Completed</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<!-- ✅ DataTables Scripts -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
  $(document).ready(function () {
    $('#bookingsTable').DataTable({
      responsive: true,
      pageLength: 5,
      lengthMenu: [5, 10, 25, 50],
      language: {
        search: "🔍 Search:",
        lengthMenu: "Show _MENU_ entries",
        info: "Showing _START_ to _END_ of _TOTAL_ bookings",
      }
    });
  });
</script>
>>>>>>> 4bcead4 (Update: Done Ajax Admin Dashboard)
