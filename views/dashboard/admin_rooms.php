<!-- Room Status Header -->
<div class="card-glass text-center mb-4 p-4 mx-3 mt-4">
  <h4 class="fw-bold text-gradient">🏨 Room Status</h4>
  <p class="text-muted-light">Monitor the availability and condition of all rooms in real-time.</p>
</div>

<!-- Room Status Table -->
<section class="px-3 mb-5">
  <div class="card-glass p-4">
    <h5 class="mb-3 text-center fw-bold text-gradient">Current Room Availability</h5>
    <div class="table-responsive">
      <table class="table table-dark table-hover align-middle mb-0">
        <thead class="table-gradient text-white">
          <tr>
            <th>#</th>
            <th>Room Number</th>
            <th>Type</th>
            <th>Status</th>
            <th>Last Updated</th>
          </tr>
        </thead>
        <tbody>
          <!-- Example rows (replace with PHP loop later) -->
          <tr>
            <td>1</td>
            <td>101</td>
            <td>Deluxe</td>
            <td><span class="badge bg-success">Available</span></td>
            <td>2025-09-18 10:00 AM</td>
          </tr>
          <tr>
            <td>2</td>
            <td>102</td>
            <td>Standard</td>
            <td><span class="badge bg-danger">Occupied</span></td>
            <td>2025-09-18 9:30 AM</td>
          </tr>
          <tr>
            <td>3</td>
            <td>103</td>
            <td>Suite</td>
            <td><span class="badge bg-warning text-dark">Reserved</span></td>
            <td>2025-09-17 5:00 PM</td>
          </tr>
          <tr>
            <td>4</td>
            <td>104</td>
            <td>Deluxe</td>
            <td><span class="badge bg-success">Available</span></td>
            <td>2025-09-16 2:15 PM</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- Styles -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap');

body {
  font-family: 'Quicksand', sans-serif;
  background: linear-gradient(135deg, #0a192f, #001f54);
  color: #fff;
  min-height: 100vh;
  padding-top: 70px;
}

/* Gradient Text */
.text-gradient {
  background: linear-gradient(to right, #38bdf8, #0ea5e9, #1d4ed8);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* Muted text */
.text-muted-light {
  color: #9ca3af;
}

/* Glass card */
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

/* Table */
.table-gradient {
  background: linear-gradient(to right, #0ea5e9, #1d4ed8);
}
.table-dark {
  color: #fff;
}

/* Badges */
.badge {
  font-size: 0.85rem;
  padding: 0.4em 0.7em;
  border-radius: 0.5rem;
}
</style>
