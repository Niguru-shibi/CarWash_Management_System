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

    

    .logo {
      font-size: 1.9rem;
      font-weight: bold;
      background: linear-gradient(to right, #38bdf8, #0ea5e9, #1d4ed8);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo::before {
      content: "🚙";
      font-size: 1.5rem;
      animation: bounce 2s infinite ease-in-out;
    }

    @keyframes bounce {

      0%,
      100% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(-6px);
      }
    }

    .nav-links {
      display: flex;
      gap: 2rem;
      align-items: center;
    }

    .nav-links a {
      position: relative;
      color: #fff;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .nav-links a::after {
      content: '';
      position: absolute;
      width: 0%;
      height: 3px;
      bottom: -6px;
      left: 0;
      background: linear-gradient(to right, #38bdf8, #0ea5e9);
      transition: width 0.3s ease;
      border-radius: 10px;
    }

    .nav-links a:hover::after {
      width: 100%;
    }

    .nav-links a:hover {
      color: #e0f2fe;
    }

    /* Login button */
    .login-btn {
      background: linear-gradient(to right, #0ea5e9, #2563eb);
      color: #fff;
      padding: 0.5rem 1.2rem;
      border-radius: 25px;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(0, 180, 255, 0.3);
    }

    .login-btn:hover {
      background: linear-gradient(to right, #2563eb, #0ea5e9);
      box-shadow: 0 6px 20px rgba(0, 180, 255, 0.5);
      transform: translateY(-2px);
    }

    /* Carousel */
    .carousel,
    .carousel-inner,
    .carousel-item {
      height: 90vh;
      width: 100%;
      margin-top: -40px;
    }

    .carousel-item img {
      height: 100%;
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

    /* Captions */
    .carousel-caption {
      position: absolute;
      top: 25%;
      left: 10%;
      text-align: left;
      max-width: 600px;
      animation: fadeInUp 1.5s ease;
    }

    .carousel-caption h1 {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }

    .carousel-caption p {
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

    /* Fade animation */
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
      .carousel-caption h1 {
        font-size: 2rem;
      }

      .carousel-caption p {
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

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <img src="https://i.pinimg.com/1200x/62/4c/eb/624ceb1dde337b8e178f266963f018dd.jpg" alt="Car Wash 1">
        <div class="carousel-caption">
          <h1>Premium Car Wash Service</h1>
          <p>
            At <strong>Auto Shine</strong>, we believe your car deserves more than just a wash –
            it deserves a full transformation. Our team uses high-quality cleaning products and
            advanced techniques to remove every speck of dirt, dust, and grime, leaving your vehicle
            sparkling inside and out. Whether it’s a quick wash or a deep clean, we make sure your car
            looks showroom-ready every time.
          </p>
          <a href="#appointment" class="btn-appointment">Get Appointment</a>
          <div class="contact-info">
            <p><i class="fas fa-map-marker-alt"></i> 123 Shine Street, Auto City</p>
            <p><i class="fas fa-phone-alt"></i> (123) 456-7890</p>
            <p><i class="fas fa-envelope"></i> info@autoshine.com</p>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <img src="https://i.pinimg.com/1200x/48/15/6d/48156d0b461632742767c7b953ebdf62.jpg" alt="Car Wash 2">
        <div class="carousel-caption">
          <h1>Fast & Reliable Cleaning</h1>
          <p>
            We know your time is valuable. That’s why we’ve designed our wash process to be
            <strong>fast, reliable, and stress-free</strong>. With state-of-the-art equipment and
            expert staff, we guarantee a spotless clean in record time – without compromising quality.
            Drive in during your lunch break or on your way home, and leave with a car that’s refreshed,
            polished, and ready to turn heads.
          </p>
          <a href="#appointment" class="btn-appointment">Get Appointment</a>
          <div class="contact-info">
            <p><i class="fas fa-map-marker-alt"></i> 123 Shine Street, Auto City</p>
            <p><i class="fas fa-phone-alt"></i> (123) 456-7890</p>
            <p><i class="fas fa-envelope"></i> info@autoshine.com</p>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <img src="https://cdn.prod.website-files.com/62680100be4ef509fad9aba5/67ca2bc40733c278e4da4578_Car-covered-white-foam.webp" alt="Car Wash 3">
        <div class="carousel-caption">
          <h1>Shine Like Never Before</h1>
          <p>
            Give your car the shine it deserves! Our detailing experts go the extra mile to protect your
            paint, restore its natural glow, and keep your vehicle looking as good as new. From gentle hand
            washes to deep foam treatments, we provide care that enhances the beauty of your car while
            preserving its value. At <strong>Auto Shine</strong>, it’s not just a wash – it’s a promise to
            make your car stand out wherever you go.
          </p>
          <a href="#appointment" class="btn-appointment">Get Appointment</a>
          <div class="contact-info">
            <p><i class="fas fa-map-marker-alt"></i> 123 Shine Street, Auto City</p>
            <p><i class="fas fa-phone-alt"></i> (123) 456-7890</p>
            <p><i class="fas fa-envelope"></i> info@autoshine.com</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>