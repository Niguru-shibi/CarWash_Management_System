<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<style>
  body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #0a192f;
    color: #fff;
  }

  /* Scroll-to-top button */
  .scroll-top {
    position: fixed;
    bottom: 25px;
    right: 25px;
    background: linear-gradient(135deg, #0d6efd, #6610f2);
    color: white;
    padding: 14px;
    border-radius: 50%;
    cursor: pointer;
    z-index: 10;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
  }

  .scroll-top:hover {
    transform: translateY(-6px);
    box-shadow: 0 8px 25px rgba(13, 110, 253, 0.6);
  }

  /* About Section */
  /* About Section */
  .about-section {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 3rem;
    padding: 6rem 2rem;
    background: linear-gradient(135deg, #001f54, #0a192f, #003566, #0d6efd);
    background-size: 300% 300%;
    animation: gradientBG 12s ease infinite;
  }

  /* Smooth gradient animation */
  @keyframes gradientBG {
    0% {
      background-position: 0% 50%;
    }

    50% {
      background-position: 100% 50%;
    }

    100% {
      background-position: 0% 50%;
    }
  }


  .about-image {
    flex: 1;
    min-width: 320px;
  }

  .about-image img {
    width: 100%;
    border-radius: 20px;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
    object-fit: cover;
  }

  .about-content {
    flex: 1.2;
    min-width: 320px;
  }

  .about-content .tagline {
    color: #38bdf8;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 3px;
    font-size: 1rem;
    display: inline-block;
    margin-bottom: 0.5rem;
  }

  .about-content h1 {
    font-size: 3rem;
    font-weight: 800;
    margin: 0.8rem 0 1.2rem;
    color: #fff;
    line-height: 1.2;
  }

  .about-content p {
    font-size: 1.2rem;
    color: #e0e7ff;
    line-height: 1.9;
    margin-bottom: 2.5rem;
    max-width: 600px;
  }

  /* Counter Style */
  .counters {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
    gap: 20px;
  }

  .counter {
    background: rgba(255, 255, 255, 0.08);
    padding: 2rem;
    border-radius: 16px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
  }

  .counter:hover {
    transform: scale(1.08);
    box-shadow: 0 10px 30px rgba(56, 189, 248, 0.5);
  }

  .counter h2 {
    font-size: 2.5rem;
    font-weight: 800;
    color: #38bdf8;
  }

  .counter p {
    margin-top: 0.3rem;
    color: #dbeafe;
    font-size: 1rem;
    letter-spacing: 0.5px;
  }

  @media (max-width: 768px) {
    .about-content h1 {
      font-size: 2.2rem;
    }

    .about-content p {
      font-size: 1rem;
    }
  }
</style>
</head>

<body>

  <!-- Scroll to Top -->
  <a href="#home" class="scroll-top">↑</a>

  <!-- About Section -->
  <section class="about-section" id="about">
    <div class="about-image">
      <img src="https://i.pinimg.com/1200x/3e/19/ea/3e19ea819d960576c337ca8e9c11a57e.jpg" alt="Car Wash Banner">
    </div>

    <div class="about-content">
      <span class="tagline">About Us</span>
      <h1>We Make Cars Shine Like New</h1>
      <p>
        At <strong>Auto Shine</strong>, we believe your car deserves more than just a wash – it deserves to shine.
        With our eco-friendly products, skilled professionals, and advanced detailing techniques, we ensure every vehicle leaves our station spotless, glossy, and protected.
        Experience the perfect blend of speed, care, and quality every time you visit us.
      </p>

      <div class="counters">
        <div class="counter">
          <h2 class="count" data-target="500">0</h2>
          <p>Cars Washed</p>
        </div>
        <div class="counter">
          <h2 class="count" data-target="20">0</h2>
          <p>Years of Experience</p>
        </div>
        <div class="counter">
          <h2 class="count" data-target="100">0%</h2>
          <p>Customer Satisfaction</p>
        </div>
        <div class="counter">
          <h2 class="count" data-target="6">0</h2>
          <p>Service Locations</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Counter Script -->
  <script>
    const counters = document.querySelectorAll('.count');
    counters.forEach(counter => {
      counter.innerText = '0';
      const updateCounter = () => {
        const target = +counter.getAttribute('data-target');
        const c = +counter.innerText.replace('%', '');
        const increment = target / 100;
        if (c < target) {
          counter.innerText = `${Math.ceil(c + increment)}${counter.getAttribute('data-target').includes('%') ? '%' : ''}`;
          setTimeout(updateCounter, 30);
        } else {
          counter.innerText = counter.getAttribute('data-target');
        }
      };
      updateCounter();
    });
  </script>
</body>