<style>
  /* Scroll-to-top button */
  .scroll-top {
    position: fixed;
    bottom: 25px;
    right: 25px;
    background: linear-gradient(135deg, #0d6efd, #6610f2);
    color: white;
    padding: 12px;
    border-radius: 50%;
    cursor: pointer;
    z-index: 5;
    transition: transform 0.3s ease;
  }

  .scroll-top:hover {
    transform: translateY(-5px);
  }

  /* About Section */
  .about-section {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 3rem;
    padding: 5rem 2rem;
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
  }

  .about-image {
    flex: 1;
    min-width: 320px;
  }

  .about-image img {
    width: 100%;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    object-fit: cover;
  }

  .about-content {
    flex: 1.2;
    min-width: 320px;
  }

  .about-content .tagline {
    color: #0d6efd;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 0.9rem;
  }

  .about-content h1 {
    font-size: 2.8rem;
    font-weight: 800;
    margin: 0.8rem 0 1.2rem;
    color: #212529;
  }

  .about-content p {
    font-size: 1.1rem;
    color: #495057;
    line-height: 1.8;
    margin-bottom: 2rem;
  }

  /* Counter Style */
  .counters {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
    gap: 20px;
  }

  .counter {
    background: white;
    padding: 1.5rem;
    border-radius: 16px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
  }

  .counter:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
  }

  .counter h2 {
    font-size: 2rem;
    font-weight: 700;
    color: #6610f2;
  }

  .counter p {
    margin-top: 0.3rem;
    color: #6c757d;
    font-size: 0.95rem;
  }

  @media (max-width: 768px) {
    .about-content h1 {
      font-size: 2rem;
    }
  }
</style>

<body>
  <!-- Scroll to Top -->
  <a href="#home" class="scroll-top">
    ↑
  </a>

  <!-- About Section -->
  <section class="about-section" id="about">
    <div class="about-image">
      <img src="https://thumbs.dreamstime.com/b/background-image-car-wash-promotion-white-soap-foam-body-washing-wallpaper-344293660.jpg" alt="Car Wash Banner">
    </div>

    <div class="about-content">
      <span class="tagline">About Us</span>
      <h1>We Make Cars Shine Like New</h1>
      <p>
        At SparkleClean, our mission is simple: to keep your vehicle spotless while caring for the planet.
        Using eco-friendly solutions and advanced technology, we guarantee a premium wash and detailing experience
        every time you visit us.
      </p>

      <div class="counters">
        <div class="counter">
          <h2>50+</h2>
          <p>Happy Clients</p>
        </div>
        <div class="counter">
          <h2>20+</h2>
          <p>Years Experience</p>
        </div>
        <div class="counter">
          <h2>100%</h2>
          <p>Satisfaction</p>
        </div>
        <div class="counter">
          <h2>15</h2>
          <p>Service Locations</p>
        </div>
      </div>
    </div>
  </section>
</body>