<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services Alternative</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background: #f8f9fa;
    }

    .services-container {
      padding: 5rem 2rem;
      background: linear-gradient(135deg, #e3f2fd, #ffffff);
      text-align: center;
    }

    .services-title {
      margin-bottom: 3rem;
    }

    .services-title h1 {
      font-size: 2.5rem;
      margin: 0.5rem 0;
      color: #222;
    }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 2rem;
      max-width: 1100px;
      margin: 0 auto;
    }

    .service-box {
      background: rgba(255, 255, 255, 0.7);
      backdrop-filter: blur(15px);
      border-radius: 16px;
      padding: 2rem 1.5rem;
      transition: all 0.4s ease;
      cursor: pointer;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
    }

    .service-box:hover {
      transform: translateY(-8px) scale(1.05);
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
    }

    .service-icon {
      width: 90px;
      height: 90px;
      margin: 0 auto 1rem;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #0d6efd, #00bfff);
      box-shadow: 0 4px 15px rgba(13, 110, 253, 0.4);
      transition: all 0.3s ease;
    }

    .service-icon img {
      max-height: 50px;
      filter: brightness(0) invert(1); /* makes icons white */
    }

    .service-box:hover .service-icon {
      transform: rotate(10deg) scale(1.1);
      box-shadow: 0 6px 20px rgba(0, 191, 255, 0.6);
    }

    .service-box h6 {
      font-size: 1.1rem;
      font-weight: bold;
      margin: 0;
      color: #222;
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
      </div>

      <!-- Box 2 -->
      <div class="service-box">
        <div class="service-icon">
          <img src="https://adriateh.com/wp-content/uploads/2022/06/washing-program-4-aktivna-pjena.svg" alt="Active Foam">
        </div>
        <h6>Active Foam</h6>
      </div>

      <!-- Box 3 -->
      <div class="service-box">
        <div class="service-icon">
          <img src="https://adriateh.com/wp-content/uploads/2022/06/washing-program-1-1-prasak-pranje.svg" alt="Powder Wash">
        </div>
        <h6>Powder Wash</h6>
      </div>

      <!-- Box 4 -->
      <div class="service-box">
        <div class="service-icon">
          <img src="https://adriateh.com/wp-content/uploads/2022/06/washing-program-5-cetka.svg" alt="Brush Wash">
        </div>
        <h6>Brush Wash</h6>
      </div>

      <!-- Box 5 -->
      <div class="service-box">
        <div class="service-icon">
          <img src="https://adriateh.com/wp-content/uploads/2022/06/washing-program-8-ispiranje.svg" alt="Rinsing">
        </div>
        <h6>Rinsing</h6>
      </div>

      <!-- Box 6 -->
      <div class="service-box">
        <div class="service-icon">
          <img src="https://adriateh.com/wp-content/uploads/2022/06/washing-program-3-vosak.svg" alt="Waxing">
        </div>
        <h6>Waxing</h6>
      </div>

      <!-- Box 7 -->
      <div class="service-box">
        <div class="service-icon">
          <img src="https://adriateh.com/wp-content/uploads/2022/06/washing-program-2-ispiranje-osmoza.svg" alt="Osmosis Rinse">
        </div>
        <h6>Osmosis Rinse</h6>
      </div>

      <!-- Box 8 -->
      <div class="service-box">
        <div class="service-icon">
          <img src="https://adriateh.com/wp-content/uploads/2022/06/washing-program-6-podno-pranje.svg" alt="Underbody Wash">
        </div>
        <h6>Underbody Wash</h6>
      </div>
    </div>
  </div>

</body>
</html>
