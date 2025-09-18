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

  @keyframes gradientBG {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
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
    from { opacity: 0; transform: translateY(50px); }
    to { opacity: 1; transform: translateY(0); }
  }

  /* Left Info */
  .contact-info { display: flex; flex-direction: column; justify-content: center; gap: 1.5rem; }
  .contact-info h1 { font-size: 2.8rem; font-weight: 700; margin-bottom: 1rem; color: #ffc107; }
  .contact-info p { color: #f1f1f1; line-height: 1.7; }

  .contact-item { display: flex; align-items: center; gap: 1rem; font-size: 1.1rem; transition: transform 0.3s ease; }
  .contact-item i { font-size: 1.6rem; color: #ffc107; transition: transform 0.3s ease; }
  .contact-item:hover { transform: translateX(8px); }
  .contact-item:hover i { transform: scale(1.2); }

  /* Right Form */
  .contact-form form { display: flex; flex-direction: column; gap: 1.5rem; }
  .form-group { position: relative; }
  .form-group input, .form-group textarea {
    width: 100%;
    padding: 14px 16px 14px 44px;
    border: none;
    border-radius: 12px;
    outline: none;
    font-size: 1rem;
    background: rgba(255, 255, 255, 0.9);
    color: #333;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    transition: all 0.3s ease;
  }

  .form-group input:focus, .form-group textarea:focus {
    border: 2px solid #0d6efd;
    box-shadow: 0 0 12px rgba(13, 110, 253, 0.7);
  }

  .form-group i { position: absolute; top: 50%; left: 14px; transform: translateY(-50%); color: #0d6efd; font-size: 1rem; }
  .form-group textarea { resize: none; }
  .form-group label {
    position: absolute;
    top: -10px;
    left: 40px;
    font-size: 0.85rem;
    background: #0a192f;
    color: #ccc;
    padding: 0 8px;
    border-radius: 6px;
    z-index: 10;
    transition: all 0.3s ease;
    box-shadow: none;
  }
  .form-group input:focus+label, .form-group textarea:focus+label {
    color: #0d6efd;
    box-shadow: 0 0 8px rgba(13, 110, 253, 0.7);
  }

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
  .contact-form button:hover { background: linear-gradient(135deg, #e0a800, #cc8400); transform: scale(1.05); }
  .contact-form button:active { transform: scale(0.95); box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); }

  /* Popup */
  .popup {
    position: fixed;
    top: 20px;
    right: 20px;
    background: #28a745;
    color: #fff;
    padding: 12px 20px;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    opacity: 0;
    transform: translateY(-20px);
    transition: all 0.4s ease;
    z-index: 9999;
  }
  .popup.show { opacity: 1; transform: translateY(0); }
  .popup.error { background: #dc3545; }

  /* Map */
  .map-container { margin-top: 2rem; border-radius: 15px; overflow: hidden; box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25); }
  .map-container iframe { width: 100%; height: 250px; border: 0; }

  @media (max-width: 950px) {
    .contact-container { grid-template-columns: 1fr; text-align: center; }
    .contact-info { align-items: center; }
  }
</style>

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

        <!-- Map -->
        <div class="map-container">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926.440979688939!2d124.99877637578838!3d11.16092218901506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33085f6d1a0e52c7%3A0xddd3560a6b2a8414!2sLeyte%20Academic%20Center!5e0!3m2!1sen!2sph!4v1737173064000!5m2!1sen!2sph"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>

      <!-- Right Form -->
      <div class="contact-form">
        <div id="contactMessage"></div> <!-- Message display -->

        <form id="sendContactForm">

          <div class="form-group">
            <i class="fas fa-user"></i>
            <input type="text" id="contactName" name="contactName" placeholder=" Name" required>
            <label for="contactName">Your Name</label>
          </div>

          <div class="form-group">
            <i class="fas fa-envelope"></i>
            <input type="email" id="contactEmail" name="contactEmail" placeholder=" Email" required>
            <label for="contactEmail">Your Email</label>
          </div>

          <div class="form-group">
            <i class="fas fa-mobile-alt"></i>
            <input type="text" id="contactContact" name="contactContact" placeholder=" Contact No./Facebook" required>
            <label for="contactContact">Your Contact No./Contact Info</label>
          </div>

          <div class="form-group">
            <i class="fas fa-map-marker-alt"></i>
            <input type="text" id="contactAddress" name="contactAddress" placeholder=" Address" required>
            <label for="contactAddress">Your Address</label>
          </div>

          <div class="form-group">
            <i class="fas fa-comment-dots"></i>
            <textarea id="contactMessageText" name="contactMessage" rows="4" placeholder=" Message" required></textarea>
            <label for="contactMessageText">Your Message</label>
          </div>

          <button type="submit" id="sendContactBtn">Send Message</button>

        </form>
      </div>

    </div>
  </section>

  <!-- Popup -->
  <div id="popup" class="popup"></div>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    $(function () {
      const popup = $('#popup');

      $('#sendContactForm').on('submit', function(e) {
        e.preventDefault();
        $('#sendContactBtn').prop('disabled', true).text('Please wait...');
        $('#contactMessage').empty();

        $.ajax({
          url: '../../CarWash_Management_System/controller/contact.php',
          type: 'POST',
          data: $(this).serialize(),
          dataType: 'json',
          success: function(res) {
            if (res.status === 'success') {
              popup.text('Message sent successfully!').removeClass('error').addClass('show');
              $('#sendContactForm')[0].reset();
            } else {
              popup.text(res.message).removeClass('success').addClass('show error');
            }

            setTimeout(() => {
              popup.removeClass('show error');
            }, 3000);

            $('#sendContactBtn').prop('disabled', false).text('Send Message');
          },
          error: function() {
            popup.text('Server error! Please try again.').removeClass('success').addClass('show error');
            setTimeout(() => {
              popup.removeClass('show error');
            }, 3000);
            $('#sendContactBtn').prop('disabled', false).text('Send Message');
          }
        });
      });
    });
  </script>
</body>
