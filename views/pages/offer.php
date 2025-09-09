<style>
    body {
      font-family: 'Segoe UI', Arial, sans-serif;
      margin: 0;
      background: #0b1221;
      color: #fff;
    }

    .services-container {
      padding: 6rem 2rem;
      background: linear-gradient(135deg, #0d1b2a, #1b263b, #0d6efd);
      text-align: center;
    }

    .services-title {
      margin-bottom: 4rem;
    }

    .services-title span {
      font-size: 0.9rem;
      font-weight: bold;
      color: #00d4ff;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    .services-title h1 {
      font-size: 2.8rem;
      margin: 1rem 0;
      color: #fff;
    }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 2rem;
      max-width: 1200px;
      margin: 0 auto;
    }

    .service-box {
      background: rgba(255, 255, 255, 0.08);
      backdrop-filter: blur(15px);
      border-radius: 20px;
      padding: 2rem 1.5rem;
      transition: all 0.4s ease;
      cursor: pointer;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
      position: relative;
      overflow: hidden;
    }

    .service-box::before {
      content: "";
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: conic-gradient(from 180deg, #00d4ff, #6610f2, #0d6efd, #00d4ff);
      animation: spin 6s linear infinite;
      opacity: 0.2;
    }

    @keyframes spin {
      100% { transform: rotate(360deg); }
    }

    .service-box:hover {
      transform: translateY(-10px) scale(1.05);
      box-shadow: 0 15px 40px rgba(0, 191, 255, 0.4);
    }

    .service-icon {
      width: 100px;
      height: 100px;
      margin: 0 auto 1rem;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #0d6efd, #00d4ff);
      box-shadow: 0 4px 20px rgba(13, 110, 253, 0.6);
      transition: all 0.4s ease;
      position: relative;
      z-index: 2;
    }

    .service-icon img {
      max-height: 55px;
      filter: brightness(0) invert(1);
      transition: transform 0.3s ease;
    }

    .service-box:hover .service-icon img {
      transform: rotate(15deg) scale(1.1);
    }

    .service-box h6 {
      font-size: 1.2rem;
      font-weight: bold;
      margin: 0.5rem 0;
      color: #fff;
    }

    .service-box p {
      font-size: 0.95rem;
      color: #d1d5db;
      margin: 0.5rem 0 0;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .services-title h1 {
        font-size: 2rem;
      }
      .service-box {
        padding: 1.5rem;
      }
    }
  </style>
</head>
<body>

  <div class="services-container">
    <div class="services-title">
      <span>Our Programs</span>
      <h1>Choose the Perfect Wash</h1>
    </div>

    <div class="services-grid">
      <!-- Box 1 -->
      <div class="service-box">
        <div class="service-icon">
          <img src="https://adriateh.com/wp-content/uploads/2022/06/washing-program-7-felge-i-insekti.svg" alt="Felge & Insects">
        </div>
        <h6>Felge & Insects</h6>
        <p>Removes dirt, bugs & grime from wheels and front grills.</p>
      </div>

      <!-- Box 2 -->
      <div class="service-box">
        <div class="service-icon">
          <img src="https://adriateh.com/wp-content/uploads/2022/06/washing-program-4-aktivna-pjena.svg" alt="Active Foam">
        </div>
        <h6>Active Foam</h6>
        <p>Deep cleaning foam for a spotless and fresh shine.</p>
      </div>

      <!-- Box 3 -->
      <div class="service-box">
        <div class="service-icon">
          <img src="https://adriateh.com/wp-content/uploads/2022/06/washing-program-1-1-prasak-pranje.svg" alt="Powder Wash">
        </div>
        <h6>Powder Wash</h6>
        <p>Powerful powder treatment for tough dirt and stains.</p>
      </div>

      <!-- Box 4 -->
      <div class="service-box">
        <div class="service-icon">
          <img src="https://adriateh.com/wp-content/uploads/2022/06/washing-program-5-cetka.svg" alt="Brush Wash">
        </div>
        <h6>Brush Wash</h6>
        <p>Gentle brushing action for bodywork and wheels.</p>
      </div>

      <!-- Box 5 -->
      <div class="service-box">
        <div class="service-icon">
          <img src="https://adriateh.com/wp-content/uploads/2022/06/washing-program-8-ispiranje.svg" alt="Rinsing">
        </div>
        <h6>Rinsing</h6>
        <p>Crystal clear rinse for a spotless final finish.</p>
      </div>

      <!-- Box 6 -->
      <div class="service-box">
        <div class="service-icon">
          <img src="https://adriateh.com/wp-content/uploads/2022/06/washing-program-3-vosak.svg" alt="Waxing">
        </div>
        <h6>Waxing</h6>
        <p>Protective wax coating for a glossy, lasting shine.</p>
      </div>

      <!-- Box 7 -->
      <div class="service-box">
        <div class="service-icon">
          <img src="https://adriateh.com/wp-content/uploads/2022/06/washing-program-2-ispiranje-osmoza.svg" alt="Osmosis Rinse">
        </div>
        <h6>Osmosis Rinse</h6>
        <p>Purified rinse that prevents water spots and streaks.</p>
      </div>

      <!-- Box 8 -->
      <div class="service-box">
        <div class="service-icon">
          <img src="https://adriateh.com/wp-content/uploads/2022/06/washing-program-6-podno-pranje.svg" alt="Underbody Wash">
        </div>
        <h6>Underbody Wash</h6>
        <p>Complete cleaning of your vehicle’s undercarriage.</p>
      </div>
    </div>
  </div>

</body>