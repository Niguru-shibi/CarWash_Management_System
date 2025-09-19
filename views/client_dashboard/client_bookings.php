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

    /* Buttons */
    .btn-primary {
      background: linear-gradient(to right, #0ea5e9, #1d4ed8);
      border: none;
      border-radius: 10px;
    }
    .btn-primary:hover {
      background: linear-gradient(to right, #1d4ed8, #0ea5e9);
    }

    .btn-sm {
      border-radius: 8px;
    }

    .btn-danger {
      background-color: #ef4444;
      border: none;
    }
    .btn-danger:hover {
      background-color: #dc2626;
    }

    input,
    select,
    textarea {
      border-radius: 10px;
    }

    /* Table Gradient */
    .table-gradient {
      background: linear-gradient(to right, #0ea5e9, #1d4ed8);
    }
  </style>
</head>
<body>

  <!-- Page Header -->
  <div class="card-glass text-center mb-4 p-4 mx-3 mt-4">
    <h4 class="fw-bold text-gradient">📖 Bookings</h4>
    <p class="text-muted-light">Add a new booking or view your history</p>
  </div>

  <!-- Two Column Layout -->
  <div class="container mb-5">
    <div class="row g-4">

      <!-- Add Booking Form (Left) -->
      <div class="col-lg-5">
        <div class="card-glass p-4 h-100">
          <h5 class="fw-bold text-gradient mb-3">➕ Add Booking</h5>
          <form>
            <div class="mb-3">
              <label for="name" class="form-label fw-bold">Full Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your full name">
            </div>

            <div class="mb-3">
              <label for="service" class="form-label fw-bold">Select Service</label>
              <select class="form-select" id="service">
                <option>Full Wash</option>
                <option>Waxing</option>
                <option>Interior Cleaning</option>
                <option>Engine Wash</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="date" class="form-label fw-bold">Date</label>
              <input type="date" class="form-control" id="date">
            </div>

            <div class="mb-3">
              <label for="time" class="form-label fw-bold">Time</label>
              <input type="time" class="form-control" id="time">
            </div>

            <div class="mb-3">
              <label for="notes" class="form-label fw-bold">Additional Notes</label>
              <textarea class="form-control" id="notes" rows="3" placeholder="Any special requests?"></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100 fw-bold">
              <i class="bi bi-calendar-check me-2"></i>Confirm Booking
            </button>
          </form>
        </div>
      </div>

      <!-- Booking History Table (Right) -->
      <div class="col-lg-7">
        <div class="card-glass p-4 h-100">
          <h5 class="fw-bold text-gradient mb-3 text-center">📅 Booking History</h5>
          <div class="table-responsive">
            <table class="table table-dark table-hover align-middle mb-0">
              <thead class="table-gradient text-white">
                <tr>
                  <th>#</th>
                  <th>Service</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Status</th>
                  <th>Payment</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Full Car Wash</td>
                  <td>2025-09-19</td>
                  <td>10:00 AM</td>
                  <td><span class="badge bg-warning text-dark">Pending</span></td>
                  <td><span class="badge bg-secondary">Unpaid</span></td>
                  <td>
                    <button class="btn btn-sm btn-primary"><i class="bi bi-credit-card"></i></button>
                    <button class="btn btn-sm btn-danger"><i class="bi bi-x-circle"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Wax + Vacuum</td>
                  <td>2025-09-15</td>
                  <td>02:30 PM</td>
                  <td><span class="badge bg-success">Completed</span></td>
                  <td><span class="badge bg-success">Paid</span></td>
                  <td>
                    <button class="btn btn-sm btn-secondary" disabled><i class="bi bi-check-circle"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Interior Detailing</td>
                  <td>2025-09-12</td>
                  <td>01:00 PM</td>
                  <td><span class="badge bg-danger">Cancelled</span></td>
                  <td><span class="badge bg-secondary">Unpaid</span></td>
                  <td>
                    <button class="btn btn-sm btn-secondary" disabled><i class="bi bi-lock"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </div>

</body>
</html>