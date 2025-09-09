<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Auto Shine Car Wash - Washing Points</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Script (Top) -->
  <script>
    function toggleMenu() {
      const navLinks = document.getElementById("navLinks");
      const hamburger = document.getElementById("hamburger");
      navLinks.classList.toggle("open");
      hamburger.classList.toggle("open");
    }
  </script>

  <!-- Styles -->
  <style>

    /* Hamburger */
    .hamburger {
      display: none;
      flex-direction: column;
      justify-content: center;
      gap: 5px;
      position: absolute;
      right: 20px;
      cursor: pointer;
    }
    .hamburger div {
      width: 26px;
      height: 3px;
      background: white;
      border-radius: 2px;
      transition: all 0.3s ease;
    }
    .hamburger.open div:nth-child(1) {
      transform: rotate(45deg) translate(5px, 5px);
    }
    .hamburger.open div:nth-child(2) {
      opacity: 0;
    }
    .hamburger.open div:nth-child(3) {
      transform: rotate(-45deg) translate(5px, -5px);
    }
    @media (max-width: 768px) {
      .ul {
        position: absolute;
        top: 70px;
        left: 0;
        right: 0;
        flex-direction: column;
        align-items: center;
        gap: 15px;
        background: rgba(0, 0, 0, 0.85);
        border-radius: 0;
        max-height: 0;
        overflow: hidden;
        opacity: 0;
      }
      .ul.open {
        max-height: 400px;
        opacity: 1;
        padding: 1rem 0;
      }
      .hamburger {
        display: flex;
      }
    }

    /* Washing Points Section */
    .washing-points {
      background: #0a1f44;
      color: #fff;
      padding: 5rem 2rem;
    }
    .section-header p {
      color: #ffc107;
      font-weight: 600;
      margin-bottom: 0.5rem;
    }
    .section-header h2 {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }
    .section-header .intro {
      max-width: 700px;
      margin: 0 auto 3rem;
      color: #e0e0e0;
      font-size: 1rem;
      line-height: 1.6;
    }
    /* Location Card */
    .location-card {
      background: #112b5a;
      border-radius: 15px;
      padding: 2rem;
      margin-bottom: 2rem;
      text-align: center;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
      transition: all 0.3s ease;
    }
    .location-card:hover {
      background: #193b75;
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.35);
    }
    .location-card i {
      font-size: 2rem;
      color: #ffc107;
      margin-bottom: 1rem;
    }
    .location-card h3 {
      font-size: 1.5rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
    }
    .location-card p {
      margin: 0.3rem 0;
      color: #d6d6d6;
      font-size: 0.95rem;
    }
    .location-card strong {
      color: #ffc107;
    }
    @media (max-width: 768px) {
      .section-header h2 {
        font-size: 2rem;
      }
      .location-card {
        padding: 1.5rem;
      }
    }
  </style>
</head>
<body>

<!-- Washing Points Section -->
<section class="washing-points">
  <div class="container">
    <div class="section-header text-center">
      <p>Find Us Easily</p>
      <h2>Our Auto Shine Car Wash Points</h2>
      <p class="intro">
        We’re closer than you think! Auto Shine has multiple service locations to make sure your car
        gets the shine it deserves—wherever you are. Drop by at any of our car care points below:
      </p>
    </div>

    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="location-card">
          <i class="fa fa-map-marker-alt"></i>
          <h3>Cielo Car Wash</h3>
          <p>ABC Street, New Delhi 1110001</p>
          <p><strong>Call:</strong> 1236547890</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="location-card">
          <i class="fa fa-map-marker-alt"></i>
          <h3>ABC Car Wash</h3>
          <p>A3263 Sector 1, Noida 201301</p>
          <p><strong>Call:</strong> 98745463210</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="location-card">
          <i class="fa fa-map-marker-alt"></i>
          <h3>Matrix Car Wash</h3>
          <p>H911 Indira Puram, Ghaziabad 201017 UP</p>
          <p><strong>Call:</strong> 4582365419</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="location-card">
          <i class="fa fa-map-marker-alt"></i>
          <h3>Pawing Car Wash Center</h3>
          <p>Pawing, Palo, Leyte</p>
          <p><strong>Call:</strong> 9123456789</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="location-card">
          <i class="fa fa-map-marker-alt"></i>
          <h3>Poto's War Wash</h3>
          <p>Pater St., Tacloban City</p>
          <p><strong>Call:</strong> 9123456789</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="location-card">
          <i class="fa fa-map-marker-alt"></i>
          <h3>Jake Car Wash</h3>
          <p>Government Center, Palo, Leyte</p>
          <p><strong>Call:</strong> 912345679890</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Script (Top) -->
  <script>
    function toggleMenu() {
      const navLinks = document.getElementById("navLinks");
      const hamburger = document.getElementById("hamburger");
      navLinks.classList.toggle("open");
      hamburger.classList.toggle("open");
    }
  </script>

</body>
</html>
