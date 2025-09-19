<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pricing</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

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

    .price {
      font-size: 2rem;
      font-weight: bold;
      color: #38bdf8;
    }

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
  </style>
</head>
<body>

  <!-- Pricing Header -->
  <div class="card-glass text-center mb-4 p-4 mx-3 mt-4">
    <h4 class="fw-bold text-gradient">💰 Pricing Plans</h4>
    <p class="text-muted-light">Flexible pricing to fit your car care needs.</p>
  </div>

  <!-- Pricing Cards -->
  <section class="px-3 mb-5">
    <div class="row g-4">
      <!-- Basic -->
      <div class="col-md-4">
        <div class="card-glass p-4 text-center h-100">
          <h5 class="fw-bold text-gradient">Basic Wash</h5>
          <p class="price">₱300</p>
          <ul class="list-unstyled text-muted-light mb-4">
            <li>✔ Exterior Wash</li>
            <li>✔ Quick Rinse</li>
            <li>✘ Interior Cleaning</li>
            <li>✘ Wax/Polish</li>
          </ul>
          <button class="btn btn-custom">Choose Plan</button>
        </div>
      </div>
      <!-- Standard -->
      <div class="col-md-4">
        <div class="card-glass p-4 text-center h-100">
          <h5 class="fw-bold text-gradient">Standard Care</h5>
          <p class="price">₱600</p>
          <ul class="list-unstyled text-muted-light mb-4">
            <li>✔ Exterior Wash</li>
            <li>✔ Interior Cleaning</li>
            <li>✔ Tire Shine</li>
            <li>✘ Wax/Polish</li>
          </ul>
          <button class="btn btn-custom">Choose Plan</button>
        </div>
      </div>
      <!-- Premium -->
      <div class="col-md-4">
        <div class="card-glass p-4 text-center h-100">
          <h5 class="fw-bold text-gradient">Premium Detail</h5>
          <p class="price">₱1200</p>
          <ul class="list-unstyled text-muted-light mb-4">
            <li>✔ Exterior Wash</li>
            <li>✔ Interior Deep Cleaning</li>
            <li>✔ Wax & Polish</li>
            <li>✔ Engine Detailing</li>
          </ul>
          <button class="btn btn-custom">Choose Plan</button>
        </div>
      </div>
    </div>
  </section>

</body>
</html>
