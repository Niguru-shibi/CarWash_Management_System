<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
/* Footer */
.footer {
  background: linear-gradient(135deg, #001f54, #0a192f, #003566, #0d6efd);
  background-size: 300% 300%;
  animation: gradientBG 15s ease infinite;
  color: #fff;
  padding: 4rem 2rem 1rem;
  margin-top: 3rem;
  font-family: 'Segoe UI', sans-serif;
}
@keyframes gradientBG {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

.footer-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 2.5rem;
  max-width: 1200px;
  margin: 0 auto;
}

.footer h3, .footer h4 {
  color: #ffc107;
  margin-bottom: 1rem;
  position: relative;
  font-weight: 600;
}
.footer h3::after, .footer h4::after {
  content: '';
  display: block;
  width: 50px;
  height: 3px;
  background: #ffc107;
  margin-top: 5px;
  border-radius: 2px;
}

.footer p {
  color: #d6d6d6;
  font-size: 0.95rem;
  line-height: 1.8;
}

.footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
.footer-links ul li {
  margin: 0.6rem 0;
}
.footer-links ul li a {
  color: #fff;
  text-decoration: none;
  font-size: 0.95rem;
  position: relative;
  transition: all 0.3s ease;
}
.footer-links ul li a::before {
  content: "➤";
  margin-right: 8px;
  color: #ffc107;
  opacity: 0;
  transition: 0.3s ease;
}
.footer-links ul li a:hover {
  color: #ffc107;
  padding-left: 8px;
}
.footer-links ul li a:hover::before {
  opacity: 1;
}

.footer-contact p {
  margin: 0.6rem 0;
  font-size: 0.95rem;
}
.footer-contact i {
  margin-right: 10px;
  color: #ffc107;
}

.socials {
  margin-top: 1.5rem;
}
.socials a {
  display: inline-block;
  width: 40px;
  height: 40px;
  background: #ffc107;
  color: #0a1f44;
  border-radius: 50%;
  text-align: center;
  line-height: 40px;
  margin-right: 12px;
  font-size: 1.1rem;
  transition: all 0.4s ease;
  box-shadow: 0 4px 12px rgba(255, 193, 7, 0.4);
}
.socials a:hover {
  background: #fff;
  color: #0d6efd;
  transform: translateY(-4px) scale(1.1);
  box-shadow: 0 6px 16px rgba(255, 193, 7, 0.6);
}

.footer-bottom {
  border-top: 1px solid rgba(255, 255, 255, 0.15);
  text-align: center;
  padding-top: 1rem;
  margin-top: 2.5rem;
}
.footer-bottom p {
  font-size: 0.9rem;
  color: #ccc;
}
</style>

<!-- Footer Start -->
<footer class="footer">
  <div class="footer-container">
    
    <!-- About -->
    <div class="footer-about">
      <h3>Auto Shine</h3>
      <p>
        At Auto Shine, we deliver more than just a wash—we provide a refreshing 
        car care experience. With our advanced technology, eco-friendly solutions, 
        and passionate team, your car will always leave looking brand new.
      </p>
    </div>

    <!-- Quick Links -->
    <div class="footer-links">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#washingplan">Washing Plan</a></li>
        <li><a href="#washingpoint">Washing Points</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>

    <!-- Contact -->
    <div class="footer-contact">
      <h4>Contact Us</h4>
      <p><i class="fas fa-map-marker-alt"></i> 123 Auto Street, Car City</p>
      <p><i class="fas fa-phone"></i> +1 234 567 890</p>
      <p><i class="fas fa-envelope"></i> info@autoshine.com</p>
     
    </div>

  </div>

  <!-- Bottom -->
  <div class="footer-bottom">
    <p>© 2025 Auto Shine. All Rights Reserved. | Designed with ❤️ for your car.</p>
  </div>
</footer>
<!-- Footer End -->
