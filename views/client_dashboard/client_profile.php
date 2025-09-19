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

    /* Buttons */
    .btn-custom {
      background: linear-gradient(to right, #38bdf8, #0ea5e9, #1d4ed8);
      border: none;
      color: white;
      font-weight: 600;
      border-radius: 10px;
      padding: 10px 20px;
      transition: 0.3s;
    }
    .btn-custom:hover {
      opacity: 0.85;
    }

    .profile-avatar {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid #38bdf8;
    }
  </style>
</head>
<body>

  <!-- Profile Header -->
  <div class="card-glass text-center mb-4 p-4 mx-3 mt-4">
    <h4 class="fw-bold text-gradient">👤 My Profile</h4>
    <p class="text-muted-light">View and update your personal information.</p>
  </div>

  <!-- Profile Card -->
  <section class="px-3 mb-5">
    <div class="card-glass p-4 mx-auto" style="max-width: 600px;">
      <div class="text-center mb-4">
        <img src="https://via.placeholder.com/120" alt="Profile Picture" class="profile-avatar mb-3">
        <h5 class="fw-bold">Juan Dela Cruz</h5>
        <p class="text-muted-light">juan.delacruz@example.com</p>
        <button class="btn btn-sm btn-custom"><i class="bi bi-camera"></i> Change Photo</button>
      </div>

      <form>
        <div class="mb-3">
          <label class="form-label">Full Name</label>
          <input type="text" class="form-control" value="Juan Dela Cruz">
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" value="juan.delacruz@example.com">
        </div>
        <div class="mb-3">
          <label class="form-label">Phone</label>
          <input type="text" class="form-control" value="+63 912 345 6789">
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" value="password123">
        </div>
        <div class="text-end">
          <button type="submit" class="btn btn-custom">Save Changes</button>
        </div>
      </form>
    </div>
  </section>

</body>
</html>