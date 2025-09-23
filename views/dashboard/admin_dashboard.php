
<!-- Dashboard Cards -->
<div class="row g-4 mb-4 mt-4 px-3">
  <div class="col-md-4">
    <div class="card-glass text-center p-4">
      <i class="bi bi-calendar-check fs-2 text-cyan mb-2"></i>
      <h5 class="fw-bold">Total Bookings</h5>
      <h2 class="fw-bolder">350</h2>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card-glass text-center p-4">
      <i class="bi bi-people-fill fs-2 text-info mb-2"></i>
      <h5 class="fw-bold">Customers</h5>
      <h2 class="fw-bolder">150</h2>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card-glass text-center p-4">
      <i class="bi bi-cash-coin fs-2 text-success mb-2"></i>
      <h5 class="fw-bold">Revenue</h5>
      <h2 class="fw-bolder">₱60,000</h2>
    </div>
  </div>
</div>

<!-- Welcome -->
<div class="card-glass text-center mb-4 p-4 mx-3">
  <h4 class="fw-bold text-gradient">Welcome to the Auto Shine Admin Dashboard</h4>
  <p class="text-muted-light">Manage your car wash services, customers, bookings, and reports with ease.</p>
</div>

<!-- Bookings Table -->
<section class="px-3 mb-5">
  <div class="card-glass p-4">
    <h5 class="mb-3 text-center fw-bold text-gradient">📅 Recent Bookings</h5>
    <div class="table-responsive">
      <table class="table table-dark table-hover align-middle mb-0">
        <thead class="table-gradient text-white">
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

<style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap');

body {
  font-family: 'Quicksand', sans-serif;
  background: linear-gradient(135deg, #0a192f, #001f54);
  color: #fff;
  min-height: 100vh;
  padding-top: 70px;
}


.logo {
  font-size: 1.5rem;
  font-weight: 700;
  background: linear-gradient(to right, #38bdf8, #0ea5e9, #1d4ed8);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* Cards */
.card-glass {
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.15);
  border-radius: 15px;
  box-shadow: 0 8px 20px rgba(14, 165, 233, 0.2);
  backdrop-filter: blur(15px);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  color: #fff;
}
.card-glass:hover {
  transform: translateY(-6px);
  box-shadow: 0 12px 25px rgba(14, 165, 233, 0.35);
}

/* Gradient Text */
.text-gradient {
  background: linear-gradient(to right, #38bdf8, #0ea5e9, #1d4ed8);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* Table */
.table-gradient {
  background: linear-gradient(to right, #0ea5e9, #1d4ed8);
}
.table-dark {
  color: #fff;
}
.text-muted-light {
  color: #9ca3af;
}

/* Light Mode */
body.light {
  background: #f9fafb;
  color: #111;
}
body.light .card-glass {
  background: rgba(255, 255, 255, 0.9);
  color: #111;
}
</style>

