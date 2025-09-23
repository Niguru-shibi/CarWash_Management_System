<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Script (Top) -->
<script>
  function toggleMenu() {
    const navLinks = document.getElementById("navLinks");
    const hamburger = document.getElementById("hamburger");
    navLinks.classList.toggle("open");
    hamburger.classList.toggle("open");
  }
</script>

<!-- Styles -->
<style>
  .washing-points {
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

  /* Washing Points Section */
  .washing-points {
    padding: 5rem 2rem;
  }

  .section-header p {
    color: #ffc107;
    font-weight: 600;
    margin-bottom: 0.5rem;
    text-align: center;
  }

  .section-header h2 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
    text-align: center;
  }

  .section-header .intro {
    max-width: 700px;
    margin: 0 auto 3rem;
    color: #e0e0e0;
    font-size: 1rem;
    line-height: 1.6;
    text-align: center;
  }

  /* Grid Layout */
  .row {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
  }

  .col-md-6.col-lg-4 {
    flex: 1 1 calc(33.333% - 20px);
    max-width: calc(33.333% - 20px);
  }

  @media (max-width: 992px) {
    .col-md-6.col-lg-4 {
      flex: 1 1 calc(50% - 20px);
      max-width: calc(50% - 20px);
    }
  }

  @media (max-width: 768px) {
    .col-md-6.col-lg-4 {
      flex: 1 1 100%;
      max-width: 100%;
    }
  }

  /* Location Card */
  .location-card {
    background: #112b5a;
    border-radius: 15px;
    padding: 2rem;
    text-align: center;
    margin-bottom: 2rem;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
    transition: all 0.3s ease;
  }

  .location-card:hover {
    background: #193b75;
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.35);
  }

  .location-card i {
    font-size: 2rem;
    color: #ffc107;
    margin-bottom: 1rem;
  }

  .location-card h3 {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
  }

  .location-card p {
    margin: 0.3rem 0;
    color: #d6d6d6;
    font-size: 0.95rem;
  }

  .location-card strong {
    color: #ffc107;
  }

  /* Footer */
  footer {
    background: linear-gradient(135deg, #0d1b2a, #1b263b, #0d6efd);
    padding: 2rem 1rem;
    text-align: center;
    color: #fff;
    margin-top: 3rem;
  }

  footer h3 {
    margin-bottom: 1rem;
    font-size: 1.5rem;
    font-weight: bold;
  }

  footer p {
    font-size: 0.95rem;
    color: #ddd;
    margin-bottom: 1rem;
  }

  footer .social-icons {
    margin: 1rem 0;
  }

  footer .social-icons a {
    color: #ffc107;
    margin: 0 10px;
    font-size: 1.3rem;
    transition: color 0.3s ease;
  }

  footer .social-icons a:hover {
    color: #fff;
  }

  footer small {
    display: block;
    margin-top: 1rem;
    color: #aaa;
  }
</style>
</head>

<body>

  <!-- Washing Points Section -->
  <section class="washing-points">
    <div class="container">
      <div class="section-header">
        <p>Find Us Easily</p>
        <h2>Our Auto Shine Car Wash Points</h2>
        <p class="intro">
          We’re closer than you think! Auto Shine has multiple service locations to make sure your car
          gets the shine it deserves—wherever you are. Drop by at any of our car care points below:
        </p>
      </div>

      <!-- Dynamic Branch Cards -->
      <div class="row" id="locationContainer">
        <!-- Branch cards will be loaded here dynamically -->
      </div>
    </div>
  </section>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    $(function() {
      function loadLocationCards() {
        $.ajax({
          url: "../controller/location.php?action=getLocation", // adjust path if needed
          method: "GET",
          dataType: "json",
          success: function(response) {
            let html = "";

            if (!response || response.length === 0) {
              html = `<div class="col-12 text-center">
                    <p class="text-muted">No branches available at the moment.</p>
                  </div>`;
            } else {
              response.forEach(loc => {
                html += `
              <div class="col-md-6 col-lg-4">
                <div class="location-card">
                  <i class="fa fa-map-marker-alt"></i>
                  <h3>${loc.washpoint_name}</h3>
                  <p>${loc.washpoint_location}</p>
                  <p><strong>Call:</strong> ${loc.washpoint_num}</p>
                  <a href="${loc.washpoint_map}" target="_blank" class="btn btn-sm btn-warning mt-2">View Map</a>
                </div>
              </div>
            `;
              });
            }

            $("#locationContainer").html(html);
          },
          error: function() {
            $("#locationContainer").html(
              `<div class="col-12 text-danger text-center">⚠ Failed to load branches</div>`
            );
          }
        });
      }

      // Load on page ready
      loadLocationCards();
    });
  </script>

</body>

</html>