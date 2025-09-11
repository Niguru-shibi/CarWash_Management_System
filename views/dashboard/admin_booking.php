<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Bookings | Auto Shine</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    :root {
      /* Dark Theme */
      --bg-dark: linear-gradient(135deg, #001f54, #0a192f, #003566, #0d6efd);
      --sidebar-dark: rgba(10, 25, 47, 0.95);
      --text-dark: #fff;
      --card-dark: rgba(255, 255, 255, 0.08);

      /* Light Theme */
      --bg-light: linear-gradient(135deg, #f9fafc, #eef1f6);
      --sidebar-light: #ffffff;
      --text-light: #212529;
      --card-light: #ffffff;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: var(--bg-dark);
      background-size: 300% 300%;
      animation: gradientBG 15s ease infinite;
      color: var(--text-dark);
      min-height: 100vh;
      transition: background 0.5s, color 0.5s;
    }

    @keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* Sidebar */
    .sidebar {
      width: 250px;
      height: 100vh;
      position: fixed;
      left: 0;
      top: 0;
      background: var(--sidebar-dark);
      backdrop-filter: blur(14px);
      border-right: 1px solid rgba(255, 255, 255, 0.15);
      padding-top: 1.5rem;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      transition: background 0.5s, border-color 0.5s;
    }

    .sidebar-logo {
      text-align: center;
      margin-bottom: 2rem;
    }

    .sidebar-logo img {
      width: 70px;
      margin-bottom: 10px;
    }

    .sidebar-logo h3 {
      font-weight: 700;
      color: #0d6efd;
    }

    .sidebar a {
      display: flex;
      align-items: center;
      padding: 12px 20px;
      color: #ccc;
      text-decoration: none;
      transition: all 0.3s;
      font-weight: 500;
    }

    .sidebar a:hover,
    .sidebar a.active {
      background: rgba(13, 110, 253, 0.15);
      color: #fff;
      box-shadow: inset 3px 0 0 #0d6efd;
    }

    .sidebar a i {
      margin-right: 10px;
      font-size: 18px;
    }

    /* Main */
    .main {
      margin-left: 250px;
      padding: 2rem;
      transition: margin-left 0.3s;
    }

    /* Navbar */
    .navbar-custom {
      background: rgba(10, 25, 47, 0.7);
      backdrop-filter: blur(10px);
      border-radius: 12px;
      padding: 1rem 1.5rem;
      margin-bottom: 2rem;
      display: flex;
      align-items: center;
      justify-content: flex-end;
    }

    .navbar-custom i {
      font-size: 1.5rem;
      margin-left: 1.2rem;
      cursor: pointer;
      transition: transform 0.3s, color 0.3s;
    }

    .navbar-custom i:hover {
      transform: scale(1.2);
      color: #0d6efd;
    }

    /* Cards */
    .card-glass {
      background: var(--card-dark);
      backdrop-filter: blur(10px);
      border-radius: 16px;
      padding: 1.5rem;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .card-glass:hover {
      transform: translateY(-6px);
      box-shadow: 0 8px 20px rgba(13, 110, 253, 0.3);
    }

    .card-glass h5 {
      font-size: 1rem;
      color: #0d6efd;
    }

    /* Table */
    .table-custom {
      border-radius: 12px;
      overflow: hidden;
    }

    .table-custom th {
      background: rgba(13, 110, 253, 0.1);
      color: #0d6efd;
    }

    /* Light Mode */
    body.light {
      background: var(--bg-light);
      color: var(--text-light);
      animation: none;
    }

    body.light .sidebar {
      background: var(--sidebar-light);
      border-right: 1px solid #ddd;
    }

    body.light .sidebar a {
      color: #333;
    }

    body.light .sidebar a:hover,
    body.light .sidebar a.active {
      background: rgba(13, 110, 253, 0.1);
      color: #0d6efd;
      box-shadow: inset 3px 0 0 #0d6efd;
    }

    body.light .navbar-custom {
      background: #fff;
      border: 1px solid #ddd;
    }

    body.light .card-glass {
      background: var(--card-light);
      color: var(--text-light);
    }

    body.light .table-custom th {
      background: #f5f6fa;
      color: #0d6efd;
    }
  </style>
</head>

<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <div>
      <div class="sidebar-logo">
        <img src="https://cdn-icons-png.flaticon.com/512/808/808439.png" alt="logo">
        <h3>Auto Shine</h3>
      </div>
      <a href="admin_home.php"><i class="bi bi-house-door"></i> Home</a>
      <a href="admin_dashboard.php"><i class="bi bi-speedometer2"></i> Dashboard</a>
      <a href="admin_bookings.php" class="active"><i class="bi bi-calendar-check"></i> Bookings</a>
      <a href="#"><i class="bi bi-people"></i> Customers</a>
      <a href="#"><i class="bi bi-tools"></i> Services</a>
      <a href="#"><i class="bi bi-cash-stack"></i> Payments</a>
      <a href="#"><i class="bi bi-gear"></i> Settings</a>
    </div>
    <a href="#"><i class="bi bi-box-arrow-right"></i> Logout</a>
  </div>

  <!-- Main -->
  <div class="main">
    <!-- Navbar -->
    <div class="navbar-custom">
      <i class="bi bi-brightness-high" id="themeToggle" title="Toggle Theme"></i>
      <i class="bi bi-box-arrow-right" title="Logout"></i>
    </div>

    <!-- Overview Cards -->
    <div class="row g-4 mb-4">
      <div class="col-md-3">
        <div class="card-glass text-center">
          <h5>Total Bookings</h5>
          <h2>320</h2>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card-glass text-center">
          <h5>Pending</h5>
          <h2>45</h2>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card-glass text-center">
          <h5>Approved</h5>
          <h2>250</h2>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card-glass text-center">
          <h5>Cancelled</h5>
          <h2>25</h2>
        </div>
      </div>
    </div>

    <!-- Charts -->
    <div class="row g-4 mb-4">
      <div class="col-md-6">
        <div class="card-glass">
          <h5>Booking Trends</h5>
          <canvas id="bookingChart" height="150"></canvas>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card-glass">
          <h5>Status Breakdown</h5>
          <canvas id="statusChart" height="150"></canvas>
        </div>
      </div>
    </div>

    <!-- Table -->
    <div class="card-glass">
      <h5>All Bookings</h5>
      <div class="table-responsive">
        <table class="table table-custom table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Customer</th>
              <th>Service</th>
              <th>Status</th>
              <th>Date</th>
              <th>Time</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Juan Dela Cruz</td>
              <td>Full Wash</td>
              <td><span class="badge bg-warning">Pending</span></td>
              <td>Sept 15, 2025</td>
              <td>10:00 AM</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Maria Santos</td>
              <td>Interior Clean</td>
              <td><span class="badge bg-success">Approved</span></td>
              <td>Sept 16, 2025</td>
              <td>2:00 PM</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Carlos Reyes</td>
              <td>Wax & Polish</td>
              <td><span class="badge bg-danger">Cancelled</span></td>
              <td>Sept 17, 2025</td>
              <td>11:00 AM</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script>
    // Theme Toggle
    const themeToggle = document.getElementById("themeToggle");
    themeToggle.addEventListener("click", () => {
      document.body.classList.toggle("light");
      themeToggle.classList.toggle("bi-brightness-high");
      themeToggle.classList.toggle("bi-moon-stars");
    });

    // Charts
    const bookingChart = new Chart(document.getElementById("bookingChart"), {
      type: "line",
      data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
        datasets: [{
          label: "Bookings",
          data: [30, 50, 70, 60, 90, 80],
          borderColor: "#0d6efd",
          backgroundColor: "rgba(13,110,253,0.2)",
          tension: 0.4,
          fill: true
        }]
      },
      options: {
        responsive: true,
        plugins: { legend: { display: false } }
      }
    });

    const statusChart = new Chart(document.getElementById("statusChart"), {
      type: "doughnut",
      data: {
        labels: ["Pending", "Approved", "Cancelled"],
        datasets: [{
          data: [45, 250, 25],
          backgroundColor: ["#ffc107", "#20c997", "#dc3545"]
        }]
      },
      options: {
        responsive: true,
        plugins: { legend: { position: "bottom" } }
      }
    });
  </script>
</body>

</html>
