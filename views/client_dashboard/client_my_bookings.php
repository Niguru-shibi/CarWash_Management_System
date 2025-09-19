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
      color: #fff;
    }
    .table-dark {
      color: #fff;
    }

    /* Status badges */
    .badge {
      font-size: 0.85rem;
      padding: 0.4em 0.7em;
      border-radius: 0.5rem;
    }
    .bg-success { background-color: #22c55e !important; }
    .bg-warning { background-color: #eab308 !important; }
    .bg-danger { background-color: #ef4444 !important; }
  </style>
</head>
<body>

  <!-- My Bookings Header -->
  <div class="card-glass text-center mb-4 p-4 mx-3 mt-4">
    <h4 class="fw-bold text-gradient">📅 My Bookings</h4>
    <p class="text-muted-light">Track all your scheduled and completed appointments here.</p>
  </div>

  <!-- My Bookings Table -->
  <section class="px-3 mb-5">
    <div class="card-glass p-4">
      <div class="table-responsive">
        <table class="table table-dark table-striped align-middle">
          <thead class="table-gradient">
            <tr>
              <th>#</th>
              <th>Service</th>
              <th>Date</th>
              <th>Time</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Full Wash</td>
              <td>2025-09-20</td>
              <td>10:00 AM</td>
              <td><span class="badge bg-success">Completed</span></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Waxing</td>
              <td>2025-09-22</td>
              <td>01:00 PM</td>
              <td><span class="badge bg-warning">Pending</span></td>
            </tr>
            <tr>
              <td>3</td>
              <td>Interior Cleaning</td>
              <td>2025-09-25</td>
              <td>03:30 PM</td>
              <td><span class="badge bg-danger">Cancelled</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

</body>
</html>