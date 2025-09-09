<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Auto Shine | Contact Us</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <style>
    /* Background with animated gradient */
    body {
      background: linear-gradient(135deg, #001f54, #0a192f, #003566, #0d6efd);
      background-size: 300% 300%;
      animation: gradientBG 12s ease infinite;
      color: #fff;
      padding: 5rem 0;
    }

    /* Gradient Animation (same for all sections) */
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

    /* Contact Section */
    .contact-section {
      width: 100%;
      padding: 6rem 2rem;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .contact-container {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 3rem;
      width: 100%;
      max-width: 1200px;
      background: rgba(255, 255, 255, 0.12);
      backdrop-filter: blur(25px);
      border-radius: 20px;
      padding: 3rem;
      box-shadow: 0 15px 50px rgba(0, 0, 0, 0.4);
      animation: fadeInUp 1s ease forwards;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(50px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Left Info */
    .contact-info {
      display: flex;
      flex-direction: column;
      justify-content: center;
      gap: 1.5rem;
    }

    .contact-info h1 {
      font-size: 2.8rem;
      font-weight: 700;
      margin-bottom: 1rem;
      color: #ffc107;
    }

    .contact-info p {
      color: #f1f1f1;
      line-height: 1.7;
    }

    .contact-item {
      display: flex;
      align-items: center;
      gap: 1rem;
      font-size: 1.1rem;
      transition: transform 0.3s ease;
    }

    .contact-item i {
      font-size: 1.6rem;
      color: #ffc107;
      transition: transform 0.3s ease;
    }

    .contact-item:hover {
      transform: translateX(8px);
    }

    .contact-item:hover i {
      transform: scale(1.2);
    }

    /* Right Form */
    .contact-form form {
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
    }

    .form-group {
      position: relative;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 14px 16px 14px 44px;
      border: none;
      border-radius: 12px;
      outline: none;
      font-size: 1rem;
      background: rgba(255, 255, 255, 0.9);
      color: #333;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    }

    .form-group i {
      position: absolute;
      top: 50%;
      left: 14px;
      transform: translateY(-50%);
      color: #0d6efd;
      font-size: 1rem;
    }

    .form-group textarea {
      resize: none;
    }

    .form-group label {
      position: absolute;
      top: 14px;
      left: 44px;
      color: #777;
      font-size: 0.9rem;
      transition: all 0.3s ease;
      pointer-events: none;
    }

    .form-group input:focus+label,
    .form-group input:not(:placeholder-shown)+label,
    .form-group textarea:focus+label,
    .form-group textarea:not(:placeholder-shown)+label {
      top: -10px;
      left: 40px;
      font-size: 0.75rem;
      background: #fff;
      padding: 0 6px;
      border-radius: 6px;
      color: #0d6efd;
    }

    /* Button */
    .contact-form button {
      padding: 14px;
      border: none;
      border-radius: 12px;
      background: linear-gradient(135deg, #ffc107, #ff9800);
      color: #000;
      font-weight: bold;
      cursor: pointer;
      font-size: 1rem;
      transition: all 0.3s ease;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .contact-form button:hover {
      background: linear-gradient(135deg, #e0a800, #cc8400);
      transform: scale(1.05);
    }

    /* Google Map */
    .map-container {
      margin-top: 2rem;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
    }

    .map-container iframe {
      width: 100%;
      height: 250px;
      border: 0;
    }

    /* Responsive */
    @media (max-width: 950px) {
      .contact-container {
        grid-template-columns: 1fr;
        text-align: center;
      }

      .contact-info {
        align-items: center;
      }
    }
  </style>
</head>

<body>

  <!-- Contact Section -->
  <section class="contact-section">
    <div class="contact-container">

      <!-- Left Info -->
      <div class="contact-info">
        <h1>Contact Us</h1>
        <p>Have questions or need to book a car wash? Our friendly team at <strong>Auto Shine</strong> is always ready to assist you. Reach out today and let’s make your ride shine like new.</p>

        <div class="contact-item"><i class="fas fa-phone"></i> +1 234 567 890</div>
        <div class="contact-item"><i class="fas fa-envelope"></i> info@autoshine.com</div>
        <div class="contact-item"><i class="fas fa-map-marker-alt"></i> 123 Car Wash St, Auto City</div>

        <!-- Map 
        <div class="map-container">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.0190915686745!2d-122.41941548468174!3d37.77492977975968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808a063bd9a3%3A0xa4c74a14b7c59f23!2sCar%20Wash!5e0!3m2!1sen!2sus!4v1689534852157!5m2!1sen!2sus" 
            allowfullscreen="" loading="lazy">
          </iframe>
        </div>-->
      </div>

      <!-- Right Form -->
      <div class="contact-form">
        <form>
          <div class="form-group">
            <i class="fas fa-user"></i>
            <input type="text" id="name" placeholder=" " required>
            <label for="name">Your Name</label>
          </div>

          <div class="form-group">
            <i class="fas fa-envelope"></i>
            <input type="email" id="email" placeholder=" " required>
            <label for="email">Your Email</label>
          </div>

          <div class="form-group">
            <i class="fas fa-comment-dots"></i>
            <textarea id="message" rows="4" placeholder=" " required></textarea>
            <label for="message">Your Message</label>
          </div>

          <button type="submit">Send Message</button>
        </form>
      </div>

    </div>
  </section>

</body>

</html>