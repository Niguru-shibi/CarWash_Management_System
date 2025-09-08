<style>
    .container-services {
      width: 100%;
      padding: 5rem 2rem;
      background: linear-gradient(135deg, #e3f2fd, #ffffff);
    }

    .section-title {
      text-align: center;
      margin-bottom: 3rem;
    }

    .section-title span {
      display: inline-block;
      font-size: 1rem;
      text-transform: uppercase;
      font-weight: bold;
      color: #0d6efd;
      letter-spacing: 1px;
    }

    .section-title h1 {
      font-size: 2.5rem;
      margin: 0.5rem 0;
      color: #222;
    }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
      max-width: 1100px;
      margin: 0 auto;
    }

    .service-card {
      background: rgba(255, 255, 255, 0.7);
      backdrop-filter: blur(15px);
      border-radius: 16px;
      padding: 2rem;
      text-align: center;
      transition: all 0.3s ease;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    }

    .service-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
    }

    .service-card i {
      font-size: 3rem;
      color: #0d6efd;
      margin-bottom: 1rem;
    }

    .service-card h2 {
      font-size: 2rem;
      margin: 0.5rem 0;
      color: #000;
    }

    .service-card p {
      font-size: 1rem;
      color: #555;
      margin-bottom: 1rem;
    }

    .service-card ul {
      list-style: none;
      padding: 0;
      margin: 0;
      font-size: 0.95rem;
      color: #333;
    }

    .service-card ul li {
      margin-bottom: 6px;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .service-card ul li::before {
      content: "✔";
      color: #0d6efd;
      font-weight: bold;
    }

    @media (max-width: 768px) {
      .section-title h1 {
        font-size: 2rem;
      }
    }
  </style>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body>

  <div class="container-services">
    <!-- Section Title -->
    <div class="section-title">
      <span>What we offer</span>
      <h1>Premium Car Care Services</h1>
      <p style="color: black">From quick washes to full detailing, we make your car shine inside and out.</p>
    </div>

    <!-- Services Grid -->
    <div class="services-grid">
      <!-- Card 1 -->
      <div class="service-card">
        <i class="fas fa-users"></i>
        <h2>50+</h2>
        <p>Happy Clients</p>
        <ul>
          <li>Exterior & Interior Cleaning</li>
          <li>Hand Waxing & Polishing</li>
          <li>Eco-Friendly Products</li>
        </ul>
      </div>

      <!-- Card 2 -->
      <div class="service-card">
        <i class="fas fa-briefcase"></i>
        <h2>20+</h2>
        <p>Years Experience</p>
        <ul>
          <li>Skilled & Friendly Staff</li>
          <li>Professional Tools</li>
          <li>Affordable Packages</li>
        </ul>
      </div>

      <!-- Card 3 -->
      <div class="service-card">
        <i class="fas fa-star"></i>
        <h2>100%</h2>
        <p>Satisfaction</p>
        <ul>
          <li>Attention to Detail</li>
          <li>Premium Products</li>
          <li>Guaranteed Quality</li>
        </ul>
      </div>

      <!-- Card 4 -->
      <div class="service-card">
        <i class="fas fa-map-marker-alt"></i>
        <h2>15</h2>
        <p>Service Locations</p>
        <ul>
          <li>Convenient Spots</li>
          <li>Fast & Easy Access</li>
          <li>Expanding Network</li>
        </ul>
      </div>
    </div>
  </div>

</body>