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

    /* Buttons in table */
    .btn-sm {
      margin: 0 2px;
      border-radius: 8px;
    }

    .btn-success {
      background-color: #22c55e;
      border: none;
    }
    .btn-success:hover {
      background-color: #16a34a;
    }

    .btn-danger {
      background-color: #ef4444;
      border: none;
    }
    .btn-danger:hover {
      background-color: #dc2626;
    }
  </style>
</head>
<body>

  <!-- Inquiries Header -->
  <div class="card-glass text-center mb-4 p-4 mx-3 mt-4">
    <h4 class="fw-bold text-gradient">✉️ Inquiries</h4>
    <p class="text-muted-light">Check and manage your messages and inquiries here.</p>
  </div>

  <!-- Inquiries Table -->
  <section class="px-3 mb-5">
    <div class="card-glass p-4">
      <h5 class="mb-3 text-center fw-bold text-gradient">Recent Inquiries</h5>
      <div class="table-responsive">
        <table class="table table-dark table-hover align-middle mb-0">
          <thead class="table-gradient text-white">
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Message</th>
              <th>Date</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- Example rows (replace with PHP loop later) -->
            <tr>
              <td>1</td>
              <td>Juan Dela Cruz</td>
              <td>juan@example.com</td>
              <td>What are your car wash packages?</td>
              <td>2025-09-18</td>
              <td><span class="badge bg-warning text-dark">Pending</span></td>
              <td>
                <button class="btn btn-sm btn-success"><i class="bi bi-check2-circle"></i></button>
                <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Maria Clara</td>
              <td>maria@example.com</td>
              <td>Do you offer monthly subscriptions?</td>
              <td>2025-09-17</td>
              <td><span class="badge bg-success">Replied</span></td>
              <td>
                <button class="btn btn-sm btn-secondary" disabled><i class="bi bi-lock"></i></button>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Jose Rizal</td>
              <td>rizal@example.com</td>
              <td>Is there a discount for first-time customers?</td>
              <td>2025-09-16</td>
              <td><span class="badge bg-danger">Closed</span></td>
              <td>
                <button class="btn btn-sm btn-secondary" disabled><i class="bi bi-lock"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

</body>
</html>