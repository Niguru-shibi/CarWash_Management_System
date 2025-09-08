<style>
    .custom-navbar {
        width: 100%;
        position: sticky !important;
        top: 0;
        z-index: 1000;
        height: 60px;
    }
    .custom-nav .custom-ul {
        list-style: none;
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        padding: 0;
        margin: 0;
        margin-right: 10rem;
        background-color: rgba(50, 50, 50, 0.5);
        border-radius: 50px;
        padding: 0px 20px;
    }
    .custom-nav .custom-ul .nav-link {
        color: white;
        font-weight: 500;
        transition: color 0.3s ease;
    }
    .custom-nav .custom-ul .nav-link:hover {
        color: #ffc107;
    }
</style>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary custom-navbar shadow custom-nav">
    <div class="container-fluid px-4">
        <a class="navbar-brand ms-5" href="#home" style="padding-left: 10rem;">
            <img src="../images/cwms-logo.png" alt="Logo" height="58" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#customNavbarNav"
            aria-controls="customNavbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="nav-links" id="navLinks">
              <a href="#">Home</a>
              <a href="#">About</a>
              <a href="#">Services</a>
              <a href="#">Washing Plan</a>
              <a href="#">Washing Point</a>
              <a href="#">Book Now</a>
              <a href="#">Contact</a>
            </div>
    </div>
</nav>
