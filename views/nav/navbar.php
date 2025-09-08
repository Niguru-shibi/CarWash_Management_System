<style>
    .custom-navbar {
        width: 100%;
        position: sticky !important;
        top: 0;
        z-index: 1000;
        height: 70px;
        background: linear-gradient(90deg, #007bff, #0056b3);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .custom-nav {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        position: relative;
    }

    .custom-ul {
        list-style: none;
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        margin: 0;
        padding: 10px 30px;
        border-radius: 50px;
        background-color: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(8px);
        transition: max-height 0.4s ease, opacity 0.4s ease;
    }

    .custom-ul li {
        list-style: none;
    }

    .custom-ul a {
        text-decoration: none;
        color: white;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
        padding: 8px 15px;
        border-radius: 8px;
    }

    .custom-ul a:hover {
        background: #ffc107;
        color: #000;
    }

    /* Hamburger */
    .hamburger {
        display: none;
        flex-direction: column;
        justify-content: center;
        gap: 5px;
        position: absolute;
        right: 20px;
        cursor: pointer;
    }

    .hamburger div {
        width: 26px;
        height: 3px;
        background: white;
        border-radius: 2px;
        transition: all 0.3s ease;
    }

    .hamburger.open div:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
    }

    .hamburger.open div:nth-child(2) {
        opacity: 0;
    }

    .hamburger.open div:nth-child(3) {
        transform: rotate(-45deg) translate(5px, -5px);
    }

    /* Mobile styles */
    @media (max-width: 768px) {
        .custom-ul {
            position: absolute;
            top: 70px;
            left: 0;
            right: 0;
            flex-direction: column;
            align-items: center;
            gap: 15px;
            background: rgba(0, 0, 0, 0.85);
            border-radius: 0;
            max-height: 0;
            overflow: hidden;
            opacity: 0;
        }

        .custom-ul.open {
            max-height: 400px;
            opacity: 1;
            padding: 1rem 0;
        }

        .hamburger {
            display: flex;
        }
    }
</style>

<!-- Navbar -->
<nav class="custom-navbar">
    <div class="custom-nav">
        <ul class="custom-ul" id="navLinks">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Washing Plan</a></li>
            <li><a href="#">Washing Point</a></li>
            <li><a href="#">Book Now</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <div class="hamburger" id="hamburger" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</nav>

<script>
    function toggleMenu() {
        const navLinks = document.getElementById("navLinks");
        const hamburger = document.getElementById("hamburger");
        navLinks.classList.toggle("open");
        hamburger.classList.toggle("open");
    }
</script>
