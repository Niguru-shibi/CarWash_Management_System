<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>AJAX Dashboard Example</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      display: flex;
      height: 100vh;
      overflow: hidden;
    }
    nav {
      width: 220px;
      background-color: #2c3e50;
      color: white;
      display: flex;
      flex-direction: column;
      padding: 20px;
      box-sizing: border-box;
    }
    nav a {
      color: white;
      padding: 12px;
      margin: 6px 0;
      text-decoration: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    nav a:hover, nav a.active {
      background-color: #34495e;
    }
    main {
      flex-grow: 1;
      padding: 20px;
      overflow-y: auto;
      background: #ecf0f1;
    }
  </style>
</head>
<body>
  <nav>
    <a href="#" data-page="home.php" class="active">Home</a>
    <a href="#" data-page="about.php">About</a>
    <a href="#" data-page="services.php">Services</a>
  </nav>

  <main id="content">
    <h2>Welcome!</h2>
    <p>This is the default home content. Click the links to load new content dynamically.</p>
  </main>

  <script src="app.js"></script>
</body>
</html>
=======

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Car Wash Management Dashboard</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />

  <!-- Simple-DataTables CSS -->
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.css" rel="stylesheet" />

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f5f7fa;
      margin: 0;
    }

    /* Main Content */
    .main-content {
      margin-left: 220px;
      padding: 1.5rem 2rem 3rem;
      transition: margin-left 0.3s ease;
      margin-top: 56px;
    }

    .main-content.collapsed {
      margin-left: 0;
    }

    /* Spinner */
    #loading-spinner {
      display: none;
      text-align: center;
      margin: 20px 0;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .main-content {
        margin-left: 0;
      }
    }
  </style>
</head>

<body>

  <!-- Sidebar -->
  <?php include 'nav/admin_sidebar.php'; ?>

  <!-- Navbar -->
  <?php include 'nav/admin_navbar.php'; ?>


  <!-- Spinner -->
  <div id="loading-spinner">
    <div class="spinner-border text-primary" role="status"></div>
  </div>

  <!-- Main Content -->
  <main class="main-content" id="mainContent">
    <!-- Loaded content will appear here -->
  </main>

  <!-- Bootstrap 5 JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Simple-DataTables JS -->
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/simple-datatables.js"></script>

  <script>
    $(function () {
      // Function to load a page via AJAX
      function loadPage(url) {
        $("#loading-spinner").show();

        $.ajax({
          url: url,
          type: "GET",
          success: function (data) {
            $("#loading-spinner").hide();
            $("#mainContent").html(data);
          },
          error: function () {
            $("#loading-spinner").hide();
            $("#mainContent").html("<p class='text-danger'>⚠ Error loading page. Please try again.</p>");
          }
        });
      }

      // Handle sidebar clicks
      $(document).on('click', '.load-page', function (e) {
        e.preventDefault();

        let url = $(this).attr('href');

        $('.nav-link').removeClass('active');
        $(this).addClass('active');

        loadPage(url);
      });

      // Load dashboard page by default
      loadPage('dashboard/admin_dashboard.php');
    });
  </script>

</body>

</html>
>>>>>>> 4bcead4 (Update: Done Ajax Admin Dashboard)
