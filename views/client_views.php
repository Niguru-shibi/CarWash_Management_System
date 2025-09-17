<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>AutoShine Carwash</title>

  <!-- Bootstrap & Icons -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- DataTables -->
  <link href="../assets/css/datatables.min.css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />

  <!-- Load jQuery first -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f5f7fa;
      margin: 0;
    }

    .main-content {
      margin-left: 220px;
      padding: 1.5rem 2rem 3rem;
      transition: margin-left 0.3s ease;
      margin-top: 56px;
    }

    .main-content.collapsed {
      margin-left: 0;
    }

    @media (max-width: 768px) {
      .main-content {
        margin-left: 0;
      }
    }
  </style>
</head>

<body>
  <!-- Include Admin Sidebar -->
  <?php include 'nav/client_sidebar.php'; ?>

  <!-- Include Admin Navbar -->
  <?php include 'nav/client_navbar.php'; ?>

  <!-- Main Content -->
  <main class="main-content" id="mainContent">
    <!-- Blank Page -->
  </main>

  <!-- AJax Script -->

  <script>
    $(function() {
      // Function to load a page via AJAX
      function loadPage(url) {
        // Optional: Show loading spinner here

        $.ajax({
          url: url,
          type: "GET",
          success: function(data) {
            // Optional: Hide loading spinner
            $("#mainContent").html(data);
          },
          error: function() {
            // Optional: Hide loading spinner
            $("#mainContent").html("<p class='text-danger'>Error loading page. Please try again.</p>");
          }
        });
      }

      // Handle the sidebar clicks
      $(document).on("click", ".load-page", function(e) {
        e.preventDefault();

        let url = $(this).attr("href");

        $(".nav-link").removeClass("active");
        $(this).addClass("active");

        loadPage(url);
      });

      // Load the dashboard page by default
      loadPage("client_dashboard/client_profile.php");
    });
  </script>

  <!-- End AJax Script -->


  <!-- Bootstra 5 Scripts -->
  <script src="../assets/js/bootstrap.bundle.min.js"></script>

  <!-- Datatables Scripts -->
  <script src="../assets/js/datatables.min.js"></script>

</body>

</html>