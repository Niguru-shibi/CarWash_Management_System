<style>
    /* =========================
       SERVICES SECTION
    ========================== */
    .section-title {
        font-weight: 600;
        font-size: 2rem;
        color: #00e5ff;
        margin-bottom: 2.5rem;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* Counter Section Container */
    .services-counters {
        display: flex;
        gap: 20px;
        overflow-x: auto;
        scroll-behavior: smooth;
        padding: 20px 0;
        scrollbar-width: none;
        /* Firefox */
    }

    .services-counters::-webkit-scrollbar {
        display: none;
        /* Chrome, Safari, Edge */
    }

    /* Individual Counter Box */
    .counter-box-services {
        min-width: 400px;
        max-width: 400px;
        flex: 0 0 auto;
        border-radius: 15px;
        overflow: hidden;
        background: #111;
        box-shadow: 0 10px 25px rgba(0, 229, 255, 0.15);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        background: linear-gradient(135deg, #1e1e1e, #2c2c2c);
    }

    .counter-box-services:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 15px 40px rgba(0, 229, 255, 0.3);
        background: linear-gradient(135deg, #2b2b2b, #3d3d3d);
    }

    /* Image */
    .counter-box-services img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        filter: brightness(0.65);
        transition: transform 0.5s ease;
    }

    .counter-box-services:hover img {
        transform: scale(1.1);
    }

    /* Content */
    .counter-content {
        padding: 18px;
    }

    .counter-content h2 {
        font-size: 2em;
        font-weight: bold;
        color: #0ff;
        text-shadow: 0 0 8px rgba(0, 229, 255, 0.6);
        margin-bottom: 8px;
    }

    .counter-content p {
        font-size: 1.1em;
        font-weight: 500;
        color: #fff;
        margin-bottom: 12px;
    }

    .counter-content ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .counter-content ul li {
        font-size: 0.9em;
        color: #bbb;
        margin-bottom: 6px;
        padding-left: 18px;
        position: relative;
    }

    .counter-content ul li::before {
        content: "✔";
        color: #0ff;
        font-size: 0.85em;
        position: absolute;
        left: 0;
        top: 0;
    }

    /* Arrow Navigation */
    .counter-arrows {
        text-align: end;
        margin-right: 50px;
        font-size: 28px;
    }

    .arrow-btn {
        display: inline-block;
        margin: 0 10px;
        cursor: pointer;
        color: #0ff;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .arrow-btn:hover {
        color: #00ffaa;
        transform: scale(1.2);
    }

    .service-card {
        transition: all 0.4s ease;
        border: none;
        background: linear-gradient(135deg, #1e1e1e, #2c2c2c);
        border-radius: 12px;
        color: #fff;
    }

    .service-card:hover {
        transform: translateY(-8px) scale(1.05);
        box-shadow: 0 12px 25px rgba(0, 200, 255, 0.25);
        background: linear-gradient(135deg, #2b2b2b, #3d3d3d);
    }

    .service-card .card-body {
        padding: 2rem 1rem;
    }

    .service-card img {
        max-height: 80px;
        transition: transform 0.3s ease, filter 0.3s ease;
        filter: brightness(0) invert(1);
    }

    .service-card:hover img {
        transform: scale(1.2) rotate(8deg);
        filter: drop-shadow(0 0 12px #00e5ff);
    }

    .service-card h6 {
        font-weight: 600;
        font-size: 1rem;
        color: #00e5ff;
        margin-top: 0.75rem;
        text-shadow: 0 2px 6px rgba(0, 229, 255, 0.3);
    }
</style>

<!-- ================= SERVICES SECTION ================= -->
<section class="section" id="services">
    <div class="container text-center">

        <!-- Intro Text -->
        <span style="color:#00e5ff; letter-spacing:2px; text-transform:uppercase;" data-aos="fade-down">What We Offer</span>
        <h1 style="color:#fff; text-shadow:0 0 12px rgba(0,229,255,0.5); margin: 10px 0;" data-aos="fade-up-left">
            Everything You Need to Keep Your Car Spotless
        </h1>
        <div class="services-sub mx-auto" style="max-width: 750px;" data-aos="fade-up-right">
            <p style="color:#94a3b8; font-size:1.05rem;">
                At <strong>SparkleClean</strong>, we offer a wide range of services tailored to keep your vehicle
                spotless
                inside and out. From quick exterior washes to full-service detailing, we use high-quality,
                eco-friendly
                products to ensure a clean, safe, and polished finish every time. Whether you need a basic wash or a
                premium
                detailing package, our skilled team is here to deliver fast, affordable, and friendly service that
                exceeds
                your expectations.
            </p>
        </div>

        <!-- Navigation Arrows -->
        <div class="counter-arrows" data-aos="fade-down">
            <a onclick="scrollCountersPrev()" class="arrow-btn">
                &#9664; <!-- Left arrow -->
            </a>
            <a onclick="scrollCountersNext()" class="arrow-btn">
                &#9654; <!-- Right arrow -->
            </a>
        </div>

        <!-- Counters -->
        <div class="services-counters" id="counters" data-aos="fade-left">

            <!-- Counter Box Example -->
            <div class="counter-box-services">
                <img src="https://thumbs.dreamstime.com/b/background-image-car-wash-promotion-white-soap-foam-body-washing-wallpaper-344293660.jpg"
                    alt="Banner Image" />
                <div class="counter-content">
                    <h2>50+</h2>
                    <p>Happy Clients</p>
                    <ul>
                        <li>Exterior & Interior Cleaning</li>
                        <li>Hand Waxing & Polishing</li>
                        <li>Engine Bay Cleaning</li>
                        <li>Vacuuming & Shampooing</li>
                        <li>Eco-Friendly Products</li>
                        <li>Affordable Packages</li>
                    </ul>
                </div>
            </div>

            <div class="counter-box-services">
                <img src="https://thumbs.dreamstime.com/b/background-image-car-wash-promotion-white-soap-foam-body-washing-wallpaper-344293660.jpg"
                    alt="Banner Image" />
                <div class="counter-content">
                    <h2>20+</h2>
                    <p>Years Experience</p>
                    <ul>
                        <li>Exterior & Interior Cleaning</li>
                        <li>Hand Waxing & Polishing</li>
                        <li>Engine Bay Cleaning</li>
                        <li>Vacuuming & Shampooing</li>
                        <li>Eco-Friendly Products</li>
                        <li>Affordable Packages</li>
                    </ul>
                </div>
            </div>

            <div class="counter-box-services">
                <img src="https://thumbs.dreamstime.com/b/background-image-car-wash-promotion-white-soap-foam-body-washing-wallpaper-344293660.jpg"
                    alt="Banner Image" />
                <div class="counter-content">
                    <h2>100%</h2>
                    <p>Satisfaction</p>
                    <ul>
                        <li>Exterior & Interior Cleaning</li>
                        <li>Hand Waxing & Polishing</li>
                        <li>Engine Bay Cleaning</li>
                        <li>Vacuuming & Shampooing</li>
                        <li>Eco-Friendly Products</li>
                        <li>Affordable Packages</li>
                    </ul>
                </div>
            </div>

            <div class="counter-box-services">
                <img src="https://thumbs.dreamstime.com/b/background-image-car-wash-promotion-white-soap-foam-body-washing-wallpaper-344293660.jpg"
                    alt="Banner Image" />
                <div class="counter-content">
                    <h2>15</h2>
                    <p>Service Locations</p>
                    <ul>
                        <li>Exterior & Interior Cleaning</li>
                        <li>Hand Waxing & Polishing</li>
                        <li>Engine Bay Cleaning</li>
                        <li>Vacuuming & Shampooing</li>
                        <li>Eco-Friendly Products</li>
                        <li>Affordable Packages</li>
                    </ul>
                </div>
            </div>
        </div>

        <script>
            function scrollCountersNext() {
                const container = document.getElementById('counters');
                container.scrollBy({
                    left: 320,
                    behavior: 'smooth'
                });
            }

            function scrollCountersPrev() {
                const container = document.getElementById('counters');
                container.scrollBy({
                    left: -320,
                    behavior: 'smooth'
                });
            }
        </script>

        <!-- Section Title -->
        <div class="section-title mt-5" data-aos="fade-down">Our Car Wash Programs</div>

        <!-- Services Grid -->
        <div class="row g-4 text-center">

            <!-- Reusable Service Card -->
            <div class="col-6 col-md-3" data-aos="fade-right">
                <div class="card service-card h-100">
                    <div class="card-body">
                        <img src="https://adriateh.com/wp-content/uploads/2022/06/washing-program-7-felge-i-insekti.svg"
                            alt="Felge & Insects" class="img-fluid mb-3">
                        <h6>Felge & Insects</h6>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3" data-aos="fade-up-right">
                <div class="card service-card h-100">
                    <div class="card-body">
                        <img src="https://adriateh.com/wp-content/uploads/2022/06/washing-program-4-aktivna-pjena.svg"
                            alt="Active Foam" class="img-fluid mb-3">
                        <h6>Active Foam</h6>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3" data-aos="fade-up-left">
                <div class="card service-card h-100">
                    <div class="card-body">
                        <img src="https://adriateh.com/wp-content/uploads/2022/06/washing-program-1-1-prasak-pranje.svg"
                            alt="Powder Wash" class="img-fluid mb-3">
                        <h6>Powder Wash</h6>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3" data-aos="fade-left">
                <div class="card service-card h-100">
                    <div class="card-body">
                        <img src="https://adriateh.com/wp-content/uploads/2022/06/washing-program-5-cetka.svg"
                            alt="Brush Wash" class="img-fluid mb-3">
                        <h6>Brush Wash</h6>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3" data-aos="fade-right">
                <div class="card service-card h-100">
                    <div class="card-body">
                        <img src="https://adriateh.com/wp-content/uploads/2022/06/washing-program-8-ispiranje.svg"
                            alt="Rinsing" class="img-fluid mb-3">
                        <h6>Rinsing</h6>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="card service-card h-100" data-aos="fade-up">
                    <div class="card-body">
                        <img src="https://adriateh.com/wp-content/uploads/2022/06/washing-program-3-vosak.svg"
                            alt="Waxing" class="img-fluid mb-3">
                        <h6>Waxing</h6>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3" data-aos="fade-up">
                <div class="card service-card h-100">
                    <div class="card-body">
                        <img src="https://adriateh.com/wp-content/uploads/2022/06/washing-program-2-ispiranje-osmoza.svg"
                            alt="Osmosis Rinse" class="img-fluid mb-3">
                        <h6>Osmosis Rinse</h6>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3" data-aos="fade-left">
                <div class="card service-card h-100">
                    <div class="card-body">
                        <img src="https://adriateh.com/wp-content/uploads/2022/06/washing-program-6-podno-pranje.svg"
                            alt="Underbody Wash" class="img-fluid mb-3">
                        <h6>Underbody Wash</h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>