<link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">

<style>
  body {
    margin: 0;
    font-family: "Poppins", sans-serif;
    background: #f4f7fb;
    color: #1e293b;
    display: flex;
    flex-direction: column;
    height: 100vh;
  }

  /* Topbar */
  .topbar-header {
    background: #fff;
    padding: 15px 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .topbar-header h1 {
    font-size: 20px;
    margin: 0;
  }

  .topbar-header .profile {
    display: flex;
    align-items: center;
    gap: 12px;
    font-weight: 600;
    color: #334155;
  }

  .topbar-header .profile img {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    object-fit: cover;
  }

  /* Dashboard Content */
  .content {
    padding: 30px;
    flex: 1;
    overflow-y: auto;
  }

  .cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
  }

  .card {
    background: #fff;
    padding: 20px;
    border-radius: 14px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.08);
    transition: transform 0.2s;
    position: relative;
    overflow: hidden;
  }

  .card:hover {
    transform: translateY(-4px);
  }

  .card h3 {
    font-size: 18px;
    margin: 0 0 10px;
    color: #0072ff;
  }

  .card p {
    font-size: 14px;
    color: #475569;
  }

  .card i {
    font-size: 32px;
    color: #0072ff;
    position: absolute;
    top: 20px;
    right: 20px;
    opacity: 0.15;
  }

  /* Chart Box */
  .chart-box {
    background: #fff;
    padding: 20px;
    border-radius: 14px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.08);
    margin-top: 30px;
  }

  .chart-box h3 {
    margin-bottom: 15px;
    font-size: 18px;
    color: #0072ff;
  }
</style>

<!-- Topbar -->
<div class="topbar-header">
  <h1>Welcome, Client</h1>
  <div class="profile">
    <span>John Doe</span>
    <img src="https://via.placeholder.com/38" alt="profile">
  </div>
</div>

<!-- Content -->
<div class="content">
  <!-- Cards -->
  <div class="cards">
    <div class="card">
      <h3>Upcoming Booking</h3>
      <p>You have a booking scheduled for <strong>Sept 20, 2025</strong>.</p>
      <i class="ri-calendar-event-line"></i>
    </div>
    <div class="card">
      <h3>Completed Services</h3>
      <p>Total of <strong>5</strong> services completed successfully.</p>
      <i class="ri-check-double-line"></i>
    </div>
    <div class="card">
      <h3>Account Status</h3>
      <p>Your account is <strong>Active</strong> since Jan 2025.</p>
      <i class="ri-user-smile-line"></i>
    </div>
  </div>

  <!-- Chart -->
  <div class="chart-box">
    <h3>Service Overview</h3>
    <canvas id="serviceChart" height="100"></canvas>
  </div>
</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('serviceChart').getContext('2d');
  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Completed', 'Upcoming', 'Cancelled'],
      datasets: [{
        data: [5, 2, 1],
        backgroundColor: ['#0072ff', '#22c55e', '#ef4444'],
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { position: 'bottom' }
      }
    }
  });
</script>
