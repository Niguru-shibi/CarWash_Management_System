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

    /* Navbar */
    nav {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      background: linear-gradient(to right, #0ea5e9, #1d4ed8, #0ea5e9);
      backdrop-filter: blur(20px);
      padding: 1.2rem 3rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 10px 30px rgba(0, 180, 255, 0.25);
      z-index: 20;
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
      transition: all 0.3s ease;
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
      height: 100vh;
      width: 100%;
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

      <!--Navigation-->
      <nav>
        <div class="logo">AutoShine</div>
        <div class="nav-links">
          <a href="#">Home</a>
          <a href="#">About</a>
          <a href="#">Services</a>
          <a href="#">Washing Plan</a>
          <a href="#">Washing Point</a>
          <a href="#">Book Now</a>
          <a href="#">Contact</a>
          <a href="#" class="login-btn">Login</a>
        </div>
      </nav>
      <!-- Slides -->
      <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <img src="https://i.pinimg.com/1200x/62/4c/eb/624ceb1dde337b8e178f266963f018dd.jpg" alt="Car Wash 1">
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <img src="https://i.pinimg.com/1200x/48/15/6d/48156d0b461632742767c7b953ebdf62.jpg" alt="Car Wash 2">
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <img src="https://cdn.prod.website-files.com/62680100be4ef509fad9aba5/67ca2bc40733c278e4da4578_Car-covered-white-foam.webp" alt="Car Wash 3">
        </div>
      </div>
    </div>
  </div>

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>