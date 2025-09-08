<style>
    /* Contact Section */
    .contact-section {
      width: 100%;
      padding: 5rem 2rem;
      background: linear-gradient(135deg, #0d6efd, #00c4ff);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .contact-container {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 3rem;
      width: 100%;
      max-width: 1100px;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(20px);
      border-radius: 20px;
      padding: 3rem;
      color: #fff;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.25);
    }

    /* Left Info */
    .contact-info {
      display: flex;
      flex-direction: column;
      justify-content: center;
      gap: 1.5rem;
    }

    .contact-info h1 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
    }

    .contact-info p {
      color: #e0e0e0;
      line-height: 1.6;
    }

    .contact-item {
      display: flex;
      align-items: center;
      gap: 1rem;
      font-size: 1rem;
    }

    .contact-item i {
      font-size: 1.5rem;
      color: #ffc107;
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
      padding: 14px 16px;
      border: none;
      border-radius: 12px;
      outline: none;
      font-size: 1rem;
      background: rgba(255, 255, 255, 0.9);
      color: #333;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .form-group textarea {
      resize: none;
    }

    .form-group label {
      position: absolute;
      top: 14px;
      left: 16px;
      color: #777;
      font-size: 0.9rem;
      transition: all 0.3s ease;
      pointer-events: none;
    }

    .form-group input:focus + label,
    .form-group input:not(:placeholder-shown) + label,
    .form-group textarea:focus + label,
    .form-group textarea:not(:placeholder-shown) + label {
      top: -10px;
      left: 12px;
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
      background: #ffc107;
      color: #000;
      font-weight: bold;
      cursor: pointer;
      font-size: 1rem;
      transition: all 0.3s ease;
    }

    .contact-form button:hover {
      background: #e0a800;
    }

    /* Responsive */
    @media (max-width: 900px) {
      .contact-container {
        grid-template-columns: 1fr;
        text-align: center;
      }

      .contact-info {
        align-items: center;
      }
    }
  </style>
  <!-- Font Awesome for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body>

  <!-- Contact Section -->
  <section class="contact-section">
    <div class="contact-container">
      
      <!-- Left Info -->
      <div class="contact-info">
        <h1>Contact Us</h1>
        <p>We’d love to hear from you! Whether you have questions about our services or want to schedule a car wash, get in touch today.</p>
        
        <div class="contact-item"><i class="fas fa-phone"></i> +1 234 567 890</div>
        <div class="contact-item"><i class="fas fa-envelope"></i> info@sparkleclean.com</div>
        <div class="contact-item"><i class="fas fa-map-marker-alt"></i> 123 Car Wash St, Auto City</div>
      </div>

      <!-- Right Form -->
      <div class="contact-form">
        <form>
          <div class="form-group">
            <input type="text" id="name" placeholder=" " required>
            <label for="name">Your Name</label>
          </div>

          <div class="form-group">
            <input type="email" id="email" placeholder=" " required>
            <label for="email">Your Email</label>
          </div>

          <div class="form-group">
            <textarea id="message" rows="4" placeholder=" " required></textarea>
            <label for="message">Your Message</label>
          </div>

          <button type="submit">Send Message</button>
        </form>
      </div>

    </div>
  </section>

</body>