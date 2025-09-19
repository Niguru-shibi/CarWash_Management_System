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

    .service-icon {
      font-size: 2.5rem;
      color: #38bdf8;
    }
  </style>
</head>
<body>

  <!-- Services Header -->
  <div class="card-glass text-center mb-4 p-4 mx-3 mt-4">
    <h4 class="fw-bold text-gradient">🛠 Our Services</h4>
    <p class="text-muted-light">Choose from our wide range of car care services.</p>
  </div>

  <!-- Services Grid -->
  <section class="px-3 mb-5">
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card-glass p-4 text-center">
          <i class="bi bi-droplet-fill service-icon"></i>
          <h5 class="fw-bold mt-3">Full Car Wash</h5>
          <p class="text-muted-light">Complete exterior wash with eco-friendly products to keep your car shining.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-glass p-4 text-center">
          <i class="bi bi-brush service-icon"></i>
          <h5 class="fw-bold mt-3">Interior Cleaning</h5>
          <p class="text-muted-light">Deep interior cleaning with vacuuming and detailing for a fresh ride.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-glass p-4 text-center">
          <i class="bi bi-star-fill service-icon"></i>
          <h5 class="fw-bold mt-3">Wax & Polish</h5>
          <p class="text-muted-light">Protective waxing and polishing for a lasting showroom finish.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-glass p-4 text-center">
          <i class="bi bi-sun service-icon"></i>
          <h5 class="fw-bold mt-3">Engine Detailing</h5>
          <p class="text-muted-light">Professional cleaning of your car’s engine bay for better performance and look.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-glass p-4 text-center">
          <i class="bi bi-car-front-fill service-icon"></i>
          <h5 class="fw-bold mt-3">Tire & Rim Care</h5>
          <p class="text-muted-light">Special cleaning and shine treatment for your tires and rims.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-glass p-4 text-center">
          <i class="bi bi-shield-check service-icon"></i>
          <h5 class="fw-bold mt-3">Protective Coating</h5>
          <p class="text-muted-light">Long-lasting paint protection to shield your car from harsh conditions.</p>
        </div>
      </div>
    </div>
  </section>

</body>
</html>