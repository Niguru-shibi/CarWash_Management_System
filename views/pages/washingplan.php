<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

  <style>
    /* Section Background */
    .price {
      background: linear-gradient(135deg, #0a2a43, #081d33);
      color: #fff;
      padding: 5rem 0;
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

    .btn-custom {
      background: #00bfff;
      color: #fff;
    }

    .btn-custom:hover {
      background: #0095cc;
      color: #fff;
    }

    /* Highlighted Featured Item */
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
<body>

  <!-- Price Start -->
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

      <div class="row">
        <!-- Basic Cleaning -->
        <div class="col-md-4 mb-4">
          <div class="price-item text-center">
            <div class="price-header mb-3">
              <h3>Basic Cleaning</h3>
              <h2><span>$</span><strong>10</strong><span>.99</span></h2>
            </div>
            <div class="price-body mb-4">
              <ul>
                <li><i class="far fa-check-circle text-success"></i> Seats Washing</li>
                <li><i class="far fa-check-circle text-success"></i> Vacuum Cleaning</li>
                <li><i class="far fa-check-circle text-success"></i> Exterior Cleaning</li>
                <li><i class="far fa-times-circle text-danger"></i> Interior Wet Cleaning</li>
                <li><i class="far fa-times-circle text-danger"></i> Window Wiping</li>
              </ul>
            </div>
            <div class="price-footer">
              <a class="btn btn-custom" data-toggle="modal" data-target="#myModal">Book Now</a>
            </div>
          </div>
        </div>

        <!-- Premium Cleaning (Featured) -->
        <div class="col-md-4 mb-4">
          <div class="price-item text-center featured-item">
            <div class="price-header mb-3">
              <h3>Premium Cleaning</h3>
              <h2><span>$</span><strong>20</strong><span>.99</span></h2>
            </div>
            <div class="price-body mb-4">
              <ul>
                <li><i class="far fa-check-circle text-light"></i> Seats Washing</li>
                <li><i class="far fa-check-circle text-light"></i> Vacuum Cleaning</li>
                <li><i class="far fa-check-circle text-light"></i> Exterior Cleaning</li>
                <li><i class="far fa-check-circle text-light"></i> Interior Wet Cleaning</li>
                <li><i class="far fa-times-circle text-dark"></i> Window Wiping</li>
              </ul>
            </div>
            <div class="price-footer">
              <a class="btn" data-toggle="modal" data-target="#myModal">Book Now</a>
            </div>
          </div>
        </div>

        <!-- Complex Cleaning -->
        <div class="col-md-4 mb-4">
          <div class="price-item text-center">
            <div class="price-header mb-3">
              <h3>Complex Cleaning</h3>
              <h2><span>$</span><strong>30</strong><span>.99</span></h2>
            </div>
            <div class="price-body mb-4">
              <ul>
                <li><i class="far fa-check-circle text-success"></i> Seats Washing</li>
                <li><i class="far fa-check-circle text-success"></i> Vacuum Cleaning</li>
                <li><i class="far fa-check-circle text-success"></i> Exterior Cleaning</li>
                <li><i class="far fa-check-circle text-success"></i> Interior Wet Cleaning</li>
                <li><i class="far fa-check-circle text-success"></i> Window Wiping</li>
              </ul>
            </div>
            <div class="price-footer">
              <a class="btn btn-custom" data-toggle="modal" data-target="#myModal">Book Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Price End -->

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>