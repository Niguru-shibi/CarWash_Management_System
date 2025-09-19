<style>
  /* Sidebar */
  .sidebar {
    height: 100vh;
    width: 220px;
    background-color: #003f8a;
    color: white;
    position: fixed;
    top: 0;
    left: 0;
    padding-top: 1.5rem;
    transition: transform 0.3s ease;
    overflow-y: auto;
    z-index: 1040;
  }

  .sidebar.collapsed {
    transform: translateX(-220px);
  }

  .sidebar a {
    color: white;
    text-decoration: none;
    padding: 12px 20px;
    display: flex;
    align-items: center;
    font-weight: 500;
    transition: background-color 0.2s ease;
  }

  .sidebar a:hover {
    background-color: #005cc6;
    text-decoration: none;
    color: white;
  }

  /* Active sidebar link */
  .sidebar .nav-link.active {
    background-color: #005cc6;
    font-weight: 700;
    color: #99c2ff !important;
    border-left: 4px solid skyblue;
    border-radius: 5px;
    padding-left: 16px;
  }

  .sidebar .nav-link.active i {
    color: #99c2ff;
    font-weight: 600;
  }

  .sidebar a i {
    margin-right: 12px;
    font-size: 18px;
    min-width: 24px;
    text-align: center;
  }

  .sidebar .sidebar-header {
    font-weight: 700;
    font-size: 1.25rem;
    padding: 0 20px 1rem 20px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    margin-bottom: 1rem;
  }

  .btn-toggle-sidebar {
    background: none;
    border: none;
    font-size: 1.5rem;
    color: #003f8a;
    cursor: pointer;
    margin-right: 1rem;
  }

  /* Admin dropdown */
  .dropdown-toggle::after {
    margin-left: 0.3rem;
  }



  /* Responsive */
  @media (max-width: 768px) {
    .sidebar {
      transform: translateX(-220px);
      position: fixed;
      z-index: 1050;
    }

    .sidebar.collapsed {
      transform: translateX(0);
    }
  }
</style>

<!-- Sidebar -->
<aside class="sidebar" id="sidebar">
  <div class="sidebar-header text-center mb-4">
    <i class="bi bi-droplet-fill me-2" style="font-size: 1.5rem; color: #0dcaf0;"></i>AutoShine
  </div>
  <!-- Sidebar -->
  <aside class="sidebar" id="sidebar">
    <div class="sidebar-header text-center mb-4">
      <i class="bi bi-droplet-fill me-2" style="font-size: 1.5rem; color: #0dcaf0;"></i>AutoShine
    </div>
    <nav class="nav flex-column px-1">
      <a href="../views/client_dashboard/client_dashboard.php" class="nav-link load-page">
        <i class="bi bi-speedometer2"></i> Dashboard
      </a>
      <a href="../views/client_dashboard/client_bookings.php" class="nav-link load-page">
        <i class="bi bi-calendar-plus"></i> Book a Service
      </a>
      <a href="../views/client_dashboard/client_my_bookings.php" class="nav-link load-page">
        <i class="bi bi-journal-text"></i> My Bookings
      </a>
      <a href="../views/client_dashboard/client_services.php" class="nav-link load-page">
        <i class="bi bi-tools"></i> Services
      </a>
      <a href="../views/client_dashboard/client_pricing.php" class="nav-link load-page">
        <i class="bi bi-cash-coin"></i> Pricing
      </a>
      <a href="../views/client_dashboard/client_profile.php" class="nav-link load-page">
        <i class="bi bi-person-circle"></i> My Profile
      </a>
      <a href="../views/client_dashboard/client_inquiries.php" class="nav-link load-page">
        <i class="bi bi-chat-dots"></i> Inquiries
      </a>
      <hr class="text-white mx-3">
      <a href="../views/client_dashboard/client_logout.php" class="nav-link">
        <i class="bi bi-box-arrow-right"></i> Logout
      </a>
    </nav>
  </aside>

</aside>

<!-- Sidebar Overlay for Mobile -->
<div id="sidebarOverlay" style="
  position: fixed;
  top: 0; left: 0; right: 0; bottom: 0;
  background: rgba(0,0,0,0.3);
  display: none;
  z-index: 1035;
"></div>

<!-- Sidebar Toggle Script -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('mainContent');
    const navbar = document.querySelector('nav.navbar-custom');
    const btnToggleSidebar = document.getElementById('btnToggleSidebar');
    const sidebarOverlay = document.getElementById('sidebarOverlay');

    function toggleSidebar() {
      if (window.innerWidth <= 768) {
        if (sidebar.style.transform === 'translateX(0px)') {
          sidebar.style.transform = 'translateX(-220px)';
          sidebarOverlay.style.display = 'none';
        } else {
          sidebar.style.transform = 'translateX(0)';
          sidebarOverlay.style.display = 'block';
        }
      } else {
        sidebar.classList.toggle('collapsed');
        mainContent.classList.toggle('collapsed');
        navbar.classList.toggle('collapsed');
      }
    }

    btnToggleSidebar.addEventListener('click', toggleSidebar);

    sidebarOverlay.addEventListener('click', () => {
      sidebar.style.transform = 'translateX(-220px)';
      sidebarOverlay.style.display = 'none';
    });

    window.addEventListener('resize', () => {
      if (window.innerWidth > 768) {
        sidebar.style.transform = 'translateX(0)';
        sidebarOverlay.style.display = 'none';
        sidebar.classList.remove('collapsed');
        mainContent.classList.remove('collapsed');
        navbar.classList.remove('collapsed');
      } else {
        sidebar.style.transform = 'translateX(-220px)';
        sidebarOverlay.style.display = 'none';
      }
    });
  });
</script>