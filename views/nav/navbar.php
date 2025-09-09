<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Auto Shine Car Wash</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <style>
    /* Navbar Base */
    .navbar {
      width: 100%;
      position: sticky !important;
      top: 0;
      z-index: 1000;
      height: 80px;
      background: rgba(0, 91, 187, 0.9);
      backdrop-filter: blur(12px);
      display: flex;
      align-items: center;
      transition: all 0.4s ease;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.25);
    }

    .navbar.shrink {
      height: 65px;
      background: rgba(0, 91, 187, 0.95);
    }

    .nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      max-width: 1300px;
      margin: 0 auto;
      padding: 0 2rem;
    }

    /* Logo */
    .logo {
      font-size: 1.8rem;
      font-weight: 700;
      color: #fff;
      text-transform: uppercase;
      letter-spacing: 2px;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo i {
      color: #ffc107;
      font-size: 1.6rem;
    }

    /* Nav Links */
    .ul {
      list-style: none;
      display: flex;
      gap: 30px;
      margin: 0;
      padding: 0;
      align-items: center;
    }

    .ul li {
      position: relative;
    }

    .ul a {
      text-decoration: none;
      color: white;
      font-weight: 600;
      font-size: 1rem;
      transition: all 0.3s ease;
      padding: 8px 5px;
      position: relative;
    }

    /* Underline animation */
    .ul a::after {
      content: "";
      position: absolute;
      width: 0;
      height: 2px;
      left: 0;
      bottom: -5px;
      background: #ffc107;
      transition: width 0.3s ease;
    }

    .ul a:hover::after {
      width: 100%;
    }

    /* Highlighted CTA */
    .cta-btn {
      background: #ffc107;
      color: #000 !important;
      padding: 10px 20px;
      border-radius: 30px;
      font-weight: bold;
      transition: all 0.3s ease;
    }

    .cta-btn:hover {
      background: #ffb300;
      transform: scale(1.05);
      box-shadow: 0 0 15px rgba(255, 193, 7, 0.7);
    }

    /* Hamburger */
    .hamburger {
      display: none;
      flex-direction: column;
      justify-content: center;
      gap: 5px;
      cursor: pointer;
    }

    .hamburger div {
      width: 28px;
      height: 3px;
      background: white;
      border-radius: 2px;
      transition: all 0.3s ease;
    }

    .hamburger.open div:nth-child(1) {
      transform: rotate(45deg) translate(5px, 6px);
    }

    .hamburger.open div:nth-child(2) {
      opacity: 0;
    }

    .hamburger.open div:nth-child(3) {
      transform: rotate(-45deg) translate(5px, -6px);
    }

    /* Mobile styles */
    @media (max-width: 768px) {
      .ul {
        position: absolute;
        top: 80px;
        left: 0;
        right: 0;
        flex-direction: column;
        align-items: center;
        gap: 20px;
        background: rgba(0, 0, 0, 0.9);
        backdrop-filter: blur(10px);
        max-height: 0;
        overflow: hidden;
        opacity: 0;
        transition: max-height 0.4s ease, opacity 0.4s ease;
      }

      .ul.open {
        max-height: 400px;
        opacity: 1;
        padding: 1.5rem 0;
      }

      .hamburger {
        display: flex;
      }
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar" id="navbar">
  <div class="nav">
    <!-- Logo -->
    <div class="logo">
      <i class="fas fa-car"></i> Auto Shine
    </div>

    <!-- Links -->
    <ul class="ul" id="navLinks">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Washing Plan</a></li>
      <li><a href="#">Washing Point</a></li>
      <li><a href="#" class="cta-btn">Book Now</a></li>
      <li><a href="#">Contact</a></li>
    </ul>

    <!-- Hamburger -->
    <div class="hamburger" id="hamburger" onclick="toggleMenu()">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
</nav>

<script>
  function toggleMenu() {
    const navLinks = document.getElementById("navLinks");
    const hamburger = document.getElementById("hamburger");
    navLinks.classList.toggle("open");
    hamburger.classList.toggle("open");
  }

  // Shrink navbar on scroll
  window.addEventListener("scroll", function () {
    const navbar = document.getElementById("navbar");
    if (window.scrollY > 50) {
      navbar.classList.add("shrink");
    } else {
      navbar.classList.remove("shrink");
    }
  });
</script>

</body>
</html>
