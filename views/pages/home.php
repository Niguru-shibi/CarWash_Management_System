<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Auto Shine</title>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet" />
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Quicksand', sans-serif;
      background: linear-gradient(135deg, #0a192f, #001f54);
      color: #fff;
    }

    .carousel,
    .carousel-inner,
    .carousel-item {
      height: 90vh;
      width: 100%;
      margin-top: -80px;
    }

    .carousel-item img {
      height: 100vh;
      width: 100%;
      object-fit: cover;
      filter: brightness(70%);
    }

    .carousel-indicators button {
      background-color: #38bdf8;
    }

    .carousel-indicators .active {
      background-color: #2563eb;
    }

    /* Fixed Caption */
    .fixed-caption {
      position: absolute;
      top: 25%;
      left: 10%;
      max-width: 600px;
      z-index: 10;
      text-align: left;
      animation: fadeInUp 1.5s ease;
    }

    .fixed-caption h1 {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }

    .fixed-caption p {
      font-size: 1.2rem;
      margin-bottom: 1.5rem;
    }

    .btn-appointment {
      padding: 10px 20px;
      background: #0ea5e9;
      border: none;
      color: white;
      font-weight: 600;
      border-radius: 25px;
      transition: 0.3s;
      text-decoration: none;
    }

    .btn-appointment:hover {
      background: #2563eb;
      transform: scale(1.05);
    }

    .contact-info {
      margin-top: 1.5rem;
      font-size: 0.95rem;
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
    }

    .contact-info i {
      margin-right: 8px;
      color: #38bdf8;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media(max-width:768px) {
      .fixed-caption h1 {
        font-size: 2rem;
      }

      .fixed-caption p {
        font-size: 1rem;
      }
    }
  </style>
</head>

<body>

  <div class="container-fluid p-0 position-relative">
    <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"></button>
      </div>

      <!-- Slides (images only) -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://i.pinimg.com/1200x/62/4c/eb/624ceb1dde337b8e178f266963f018dd.jpg" alt="Car Wash 1">
        </div>
        <div class="carousel-item">
          <img src="https://i.pinimg.com/1200x/48/15/6d/48156d0b461632742767c7b953ebdf62.jpg" alt="Car Wash 2">
        </div>
        <div class="carousel-item">
          <img src="https://cdn.prod.website-files.com/62680100be4ef509fad9aba5/67ca2bc40733c278e4da4578_Car-covered-white-foam.webp" alt="Car Wash 3">
        </div>
      </div>

      <!-- Fixed Caption -->
      <div class="fixed-caption">
        <h1>Auto Shine Carwash</h1>
        <p>
          Bringing out the best shine in every ride. At <strong>Auto Shine</strong>, we go beyond a
          simple wash — delivering premium cleaning, fast service, and a showroom finish every time.
        </p>
        <button class="btn btn-primary openModal">Book Now</button>
        <?php include 'client_modal.php'; ?>
        <div class="contact-info">
          <p><i class="fas fa-map-marker-alt"></i> 123 Shine Street, Auto City</p>
          <p><i class="fas fa-phone-alt"></i> (123) 456-7890</p>
          <p><i class="fas fa-envelope"></i> info@autoshine.com</p>
        </div>
      </div>
    </div>
  </div>

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
