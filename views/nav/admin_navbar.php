<style>
    /* Navbar */
    nav.navbar-custom {
        height: 56px;
        background-color: white;
        box-shadow: 0 2px 5px rgb(0 0 0 / 0.1);
        position: fixed;
        top: 0;
        left: 220px;
        right: 0;
        display: flex;
        align-items: center;
        padding: 0 1rem;
        transition: left 0.3s ease;
        z-index: 1030;
        max-width: 100vw;
    }

    nav.navbar-custom.collapsed {
        left: 0;
    }

    .navbar-brand-text {
        font-weight: 600;
        font-size: 1.25rem;
        flex-grow: 1;
        user-select: none;
    }

    /* Admin dropdown */
    .dropdown-toggle::after {
        margin-left: 0.3rem;
    }

    /* Responsive */
    @media (max-width: 768px) {
        nav.navbar-custom {
            left: 0;
        }
    }
</style>

<!-- Navbar -->
<nav class="navbar-custom d-flex align-items-center">
    <button class="btn-toggle-sidebar" id="btnToggleSidebar" aria-label="Toggle Sidebar">
        <i class="bi bi-list"></i>
    </button>

    <div class="navbar-brand-text">Dashboard</div>

    <!-- Theme Toggle Button -->
    <button id="themeToggle" class="btn btn-outline-secondary me-3" aria-label="Toggle Theme">
        <i class="bi bi-moon"></i>
    </button>


    <!-- Admin Dropdown -->
    <div class="dropdown ms-auto">
        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle"
            id="adminDropdown" data-bs-toggle="dropdown" aria-expanded="false" role="button">
            <span class="d-none d-md-inline">Admin</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="adminDropdown">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider" />
            </li>
            <li><a class="dropdown-item" href="../views/dashboard/admin_logout.php">Logout</a></li>
        </ul>
    </div>
</nav>