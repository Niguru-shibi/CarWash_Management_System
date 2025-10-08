<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Washing Plans | Auto Shine</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

  <style>
    /* Section Background */
    .price {
      background: linear-gradient(135deg, #001f54, #0a192f, #003566, #0d6efd);
      background-size: 300% 300%;
      animation: gradientBG 12s ease infinite;
      color: #fff;
      padding: 5rem 0;
    }

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

    .price .section-header p {
      color: #00bfff;
      font-weight: 600;
      text-transform: uppercase;
      margin-bottom: 0.5rem;
    }

    .price .section-header h2 {
      color: #fff;
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }

    .price .section-header p:last-child {
      color: #d0d0d0;
      max-width: 600px;
      margin: 0 auto;
      font-size: 1rem;
    }

    /* Price Cards */
    .price-item {
      background: #112b45;
      border-radius: 16px;
      padding: 2rem 1.5rem;
      transition: transform 0.3s, box-shadow 0.3s;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
      height: 100%;
    }

    .price-item:hover {
      transform: translateY(-8px) scale(1.03);
      box-shadow: 0 12px 30px rgba(0, 191, 255, 0.4);
    }

    .price-header h3 {
      color: #00bfff;
      font-weight: 600;
      margin-bottom: 0.5rem;
    }

    .price-header h2 {
      font-size: 2.5rem;
      color: #fff;
    }

    .price-header h2 span {
      font-size: 1.2rem;
    }

    .price-body ul {
      list-style: none;
      padding: 0;
      margin: 1rem 0;
    }

    .price-body ul li {
      margin: 0.5rem 0;
      font-size: 0.95rem;
      color: #d0d0d0;
    }

    .price-body ul li i {
      margin-right: 8px;
    }

    .price-footer .btn {
      border-radius: 30px;
      padding: 0.5rem 1.5rem;
      font-weight: 500;
      transition: background 0.3s, color 0.3s;
    }

    .featured-item {
      background: linear-gradient(135deg, #00bfff, #0d6efd);
      color: #fff;
      transform: scale(1.05);
    }

    .featured-item .price-header h3 {
      color: #fff;
    }

    .featured-item .btn {
      background: #fff;
      color: #0d6efd;
      font-weight: 600;
    }

    .featured-item .btn:hover {
      background: #d9e9ff;
      color: #0a2a43;
    }
  </style>
</head>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<body>

  <!-- Price Section -->
  <div class="price">
    <div class="container">
      <div class="section-header text-center mb-5">
        <p>Washing Plans</p>
        <h2>Choose Your Shine Plan</h2>
        <p>
          At <strong>Auto Shine</strong>, we offer tailored washing packages that keep your car spotless, fresh,
          and protected. Pick the plan that best fits your lifestyle and let us handle the shine.
        </p>
      </div>

      <div class="row" id="washingPlansContainer">
        <!-- Dynamic washing plans will be loaded here -->
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Dynamic AJAX Script -->
  <script>
    $(function() {
      function loadWashingPlans() {
        $.ajax({
          url: '/Guerrero/CarWash_Management_System/controller/washplan.php?action=getServices',
          type: 'GET',
          dataType: 'json',
          success: function(plans) {
            $('#washingPlansContainer').empty();

            if (!plans || plans.length === 0) {
              $('#washingPlansContainer').html('<div class="col-12 text-center text-light">No washing plans available.</div>');
              return;
            }

            plans.forEach(function(plan) {
              let planHTML = `
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="price-item text-center ${plan.featured ? 'featured-item' : ''}">
                <div class="price-header mb-3">
                  <h3>${plan.washplan_name}</h3>
                  <h2><span>₱</span><strong>${plan.washplan_price}</strong></h2>
                </div>
                <div class="price-body mb-4">
                  <ul>
                    <li>${plan.washplan_description}</li>
                    <li>Duration: ${plan.washplan_duration}</li>
                  </ul>
                </div>
                <div class="price-footer">
                  <button class="btn btn-primary openModal" data-id="${plan.washplan_id}">Book Now</button>
                </div>
              </div>
            </div>`;
              $('#washingPlansContainer').append(planHTML);
            });
          },
          error: function() {
            $('#washingPlansContainer').html('<div class="col-12 text-center text-danger">⚠ Unable to load washing plans. Please try again later.</div>');
          }
        });
      }

      loadWashingPlans();

      // Open booking modal
      $(document).on('click', '.openModal', function() {
        const planId = $(this).data('id');
        $('#clientBookingModal').modal('show');
        $('#selectedPlanId').val(planId); // optional if you want to pass plan ID
      });
    });
  </script>

</body>

</html>