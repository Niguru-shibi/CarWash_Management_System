<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Car Wash Management System</title>

    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Animate On Scroll Library -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body>
    <section id="home">
        <?php include "pages/home.php"; ?>
    </section>

    <?php include "../views/nav/navbar.php"; ?>

    <section id="about">
        <?php include "pages/about.php"; ?>
    </section>

    <section id="services">
        <?php include "pages/services.php"; ?>
        <?php include "pages/offer.php"; ?>
    </section>

    <section id="washingplan">
        <?php include "pages/washingplan.php"; ?>
    </section>

    <section id="washingpoint">
        <?php include "pages/washingpoint.php"; ?>
    </section>

    <section id="contact">
        <?php include "pages/contact.php"; ?>
    </section>

    <?php include "../views/nav/footer.php"; ?>

    <!-- jQuery (required for Bootstrap JS) -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Bootstrap JS Bundle (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Animate On Scroll Library -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1800,
            once: true,
        });

        window.addEventListener("load", () => {
            AOS.refresh();
        });
    </script>
</body>

</html>
