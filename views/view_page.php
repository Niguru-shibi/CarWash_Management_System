<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Car Wash Management System</title>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animate On Scroll Library */ -->
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

    <section id="location">
        <?php include "pages/washingpoint.php"; ?>
    </section>

    <section id="pricing">
        <?php include "pages/washingplan.php"; ?>
    </section>

    <section id="contact">
        <?php include "pages/contact.php"; ?>
    </section>

    <section>
        <?php include "../views/nav/footer.php"; ?>
    </section>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Animate On Scroll Library -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1800,
            once: true,
        });

        // Refresh AOS once everything is ready
        window.addEventListener("load", () => {
            AOS.refresh();
        });
    </script>


</body>

</html>