<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Auto Shine - Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    :root {
      --bg-dark: linear-gradient(135deg, #001f54, #0a192f, #003566, #0d6efd);
      --sidebar-dark: rgba(10, 25, 47, 0.95);
      --text-dark: #fff;
      --card-dark: rgba(255, 255, 255, 0.08);

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
      0%,100% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
    }

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
      font-weight: 500;
      transition: all 0.3s;
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

    .main {
      margin-left: 250px;
      padding: 2rem;
    }

    .navbar-custom {
      background: rgba(10, 25, 47, 0.7);
      backdrop-filter: blur(10px);
      border-radius: 12px;
      padding: 1rem 1.5rem;
      margin-bottom: 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar-custom i {
      font-size: 1.4rem;
      margin-left: 1rem;
      cursor: pointer;
      transition: 0.3s;
    }

    .navbar-custom i:hover {
      color: #0d6efd;
      transform: scale(1.2);
    }

    .card-glass {
      background: var(--card-dark);
      backdrop-filter: blur(10px);
      border-radius: 16px;
      padding: 1.5rem;
      transition: 0.3s;
    }

    .card-glass:hover {
      transform: translateY(-6px);
      box-shadow: 0 8px 20px rgba(13, 110, 253, 0.3);
    }

    .card-glass h5 {
      font-size: 1rem;
      color: #0d6efd;
    }

    .card-glass h2 {
      font-weight: 700;
    }

    .table-custom th {
      background: rgba(13, 110, 253, 0.1);
      color: #0d6efd;
    }

    /* Light mode */
    body.light {
      background: var(--bg-light);
      color: var(--text-light);
      animation: none;
    }

    body.light .sidebar { background: var(--sidebar-light); border-right: 1px solid #ddd; }
    body.light .sidebar a { color: #333; }
    body.light .sidebar a.active,
    body.light .sidebar a:hover { background: rgba(13,110,253,0.1); color: #0d6efd; }
    body.light .navbar-custom { background: #fff; border: 1px solid #ddd; }
    body.light .card-glass { background: var(--card-light); color: var(--text-light); }
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
      <a href="admin_home.php" class="active"><i class="bi bi-house-door"></i> Home</a>
      <a href="admin_dashboard.php"><i class="bi bi-speedometer2"></i> Dashboard</a>
      <a href="#"><i class="bi bi-calendar-check"></i> Bookings</a>
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
      <h4>👋 Welcome back, Admin!</h4>
      <div>
        <i class="bi bi-brightness-high" id="themeToggle" title="Toggle Theme"></i>
        <i class="bi bi-person-circle" title="Profile"></i>
        <i class="bi bi-box-arrow-right" title="Logout"></i>
      </div>
    </div>

    <!-- Quick Stats -->
    <div class="row g-4 mb-4">
      <div class="col-md-3">
        <div class="card-glass text-center">
          <h5>Total Bookings</h5>
          <h2>320</h2>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card-glass text-center">
          <h5>Customers</h5>
          <h2>120</h2>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card-glass text-center">
          <h5>Services</h5>
          <h2>15</h2>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card-glass text-center">
          <h5>Revenue</h5>
          <h2>₱45,000</h2>
        </div>
      </div>
    </div>

    <!-- Charts -->
    <div class="row g-4 mb-4">
      <div class="col-md-6">
        <div class="card-glass">
          <h5>Bookings Overview</h5>
          <canvas id="bookingChart"></canvas>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card-glass">
          <h5>Revenue Breakdown</h5>
          <canvas id="revenueChart"></canvas>
        </div>
      </div>
    </div>

    <!-- Quick Actions -->
    <div class="row g-4 mb-4">
      <div class="col-md-4">
        <div class="card-glass text-center">
          <i class="bi bi-plus-circle" style="font-size:2rem;color:#0d6efd;"></i>
          <h5 class="mt-2">Add Booking</h5>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-glass text-center">
          <i class="bi bi-people-fill" style="font-size:2rem;color:#0d6efd;"></i>
          <h5 class="mt-2">Manage Customers</h5>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-glass text-center">
          <i class="bi bi-tools" style="font-size:2rem;color:#0d6efd;"></i>
          <h5 class="mt-2">Manage Services</h5>
        </div>
      </div>
    </div>

    <!-- Recent Activity -->
    <div class="card-glass">
      <h5>Recent Activity</h5>
      <div class="table-responsive">
        <table class="table table-custom table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Activity</th>
              <th>User</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>New booking added</td>
              <td>Juan Dela Cruz</td>
              <td>Sept 11, 2025</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Service updated</td>
              <td>Admin</td>
              <td>Sept 10, 2025</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Payment processed</td>
              <td>Maria Santos</td>
              <td>Sept 9, 2025</td>
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
    new Chart(document.getElementById("bookingChart"), {
      type: "line",
      data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
        datasets: [{
          label: "Bookings",
          data: [40, 60, 70, 90, 110, 130],
          borderColor: "#0d6efd",
          backgroundColor: "rgba(13,110,253,0.2)",
          tension: 0.4,
          fill: true
        }]
      },
      options: { plugins: { legend: { display: false } } }
    });

    new Chart(document.getElementById("revenueChart"), {
      type: "bar",
      data: {
        labels: ["Full Wash", "Interior Clean", "Wax & Polish"],
        datasets: [{
          label: "Revenue (₱)",
          data: [20000, 18000, 12000],
          backgroundColor: ["#0d6efd", "#20c997", "#ffc107"]
        }]
      },
      options: { plugins: { legend: { display: false } } }
    });
  </script>
</body>
</html>
