<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Auto Shine</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="../assets/js/color-modes.js"></script>
    <link href="carousel.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Quicksand', sans-serif;
            background: linear-gradient(135deg, #0f172a, #1e3a8a);
            color: #fff;
            height: 100vh;
        }

        nav {
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 95%;
            max-width: 1200px;
            z-index: 1030;
            margin: 0;
            background: linear-gradient(90deg, rgba(2, 28, 60, 0.95) 0%, rgba(3, 105, 161, 0.85) 100%);
            /* darker blue */
            backdrop-filter: blur(15px);
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 1.2rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo::before {
            content: "🚗";
            font-size: 1.5rem;
            animation: bounce 2s infinite ease-in-out;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-5px);
            }
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            transition: all 0.3s ease;
        }

        .nav-links a {
            position: relative;
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0%;
            height: 3px;
            bottom: -6px;
            left: 0;
            background: linear-gradient(to right, #38bdf8, #3b82f6);
            transition: width 0.3s ease;
            border-radius: 10px;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-links a:hover {
            color: #38bdf8;
            text-shadow: 0 0 10px #38bdf8;
        }

        .hamburger {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
        }

        .hamburger div {
            width: 26px;
            height: 3px;
            background: #fff;
            border-radius: 3px;
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

        @media (max-width: 768px) {
            .nav-links {
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: rgba(0, 0, 0, 0.7);
                flex-direction: column;
                align-items: center;
                overflow: hidden;
                max-height: 0;
                transition: max-height 0.4s ease;
                border-radius: 0 0 16px 16px;
            }

            .nav-links.open {
                max-height: 300px;
                padding: 1rem 0;
            }

            .hamburger {
                display: flex;
            }

            .carousel,
            .carousel-inner,
            .carousel-item {
                height: 100vh;
                width: 100vw;
            }

        }

        .carousel-control-prev,
        .carousel-control-next {
            display: none;
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">AutoShine</div>
        <div class="hamburger" id="hamburger" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="nav-links" id="navLinks">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Washing Plan</a>
            <a href="#">Washing Point</a>
            <a href="#">Contact</a>
        </div>
    </nav>

    <div class="container-fluid p-0 position-relative">
        <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <!-- Slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://thumbs.dreamstime.com/b/banner-car-wash-business-features-backdrop-being-washed-space-copy-341228888.jpg"
                        class="d-block w-100" alt="Slide 1" />
                </div>
                <div class="carousel-item">
                    <img src="https://thumbs.dreamstime.com/b/background-image-car-wash-promotion-white-soap-foam-body-washing-wallpaper-344293512.jpg"
                        class="d-block w-100" alt="Slide 2" />
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.prod.website-files.com/62680100be4ef509fad9aba5/67ca2bc40733c278e4da4578_Car-covered-white-foam.webp"
                        class="d-block w-100" alt="Slide 3" />
                </div>
            </div>
        </div>

        

        <!--<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators"> <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button> <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button> <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button> </div>
        <div class="carousel-inner">
            <div class="carousel-item"> <svg aria-hidden="true" class="bd-placeholder-img " height="100vh" preserveAspectRatio="xMidYMid slice" width="100%" xmlns="http://www.w3.org/2000/svg">
                    <rect width="100%" height="100vh" fill="var(--bs-secondary-color)"></rect>
                </svg>
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Example headline.</h1>
                        <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item active"> <svg aria-hidden="true" class="bd-placeholder-img " height="100vh" preserveAspectRatio="xMidYMid slice" width="100%" xmlns="http://www.w3.org/2000/svg">
                    <rect width="100%" height="100vh" fill="var(--bs-secondary-color)"></rect>
                </svg>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item"> <svg aria-hidden="true" class="bd-placeholder-img " height="100vh" preserveAspectRatio="xMidYMid slice" width="100%" xmlns="http://www.w3.org/2000/svg">
                    <rect width="100%" height="100vh" fill="var(--bs-secondary-color)"></rect>
                </svg>
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>One more for good measure.</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                    </div>
                </div>
            </div>
        </div> <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button> <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
    </div>-->

        <script>
            function toggleMenu() {
                const navLinks = document.getElementById('navLinks');
                const hamburger = document.getElementById('hamburger');
                navLinks.classList.toggle('open');
                hamburger.classList.toggle('open');
            }
        </script>
        <script src="../assets/dist/js/bootstrap.bundle.min.js" class="astro-vvvwv3sm"></script>

</body>

</html>