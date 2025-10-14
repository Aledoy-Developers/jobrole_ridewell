<?php
    include('inc/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ride Well | Payment Successful</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="dist/css/bootstrap.min.css" />
    <script src="dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css" />
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
</head>

<body>

    <?php include('inc/inner-header.php'); ?>

    <section class="home-abt">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="container hi">
                        <div class="card shadow-sm border-0 rounded-4 p-md-5 bg-white">
                            <h6 class="text-uppercase mb-2">
                                PAYMENT SUCCESSFUL <span><i class="bi bi-car-front-fill"></i></span>
                            </h6>
                            <h2 class=" mb-4">
                                Thank you for making this payment. <br>Your Reference no: <?php echo $_GET['ref']; ?>
                            </h2>


                            <section class="mt-5 pt-5">
                                <div class="container-fluid py-5" style="background-color: #adb9c9;">
                                    <div class="container py-5">
                                        <div class="row g-4 align-items-stretch">
                                            <!-- 🔹 makes both col-6 equal height -->

                                            <!-- Section title -->
                                            <div class="d-flex justify-content-center align-items-center mb-4 w-100">
                                                <h3 class="me-3 text-secondary fw-bold mb-0">FAQs</h3>
                                                <i class="bi bi-car-front-fill fs-3 text-secondary"></i>
                                            </div>

                                            <!-- Left side -->
                                            <div class="col-12 col-lg-6 d-flex">
                                                <div class="p-5 text-white rounded-3 w-100"
                                                    style="background-color: #003a8d; height: ;">
                                                    <h2 class="display-5 fw-bold mb-4">
                                                        Book Your On Demand Drivers Today.
                                                    </h2>
                                                    <p class="mb-5 fs-5 opacity-75">
                                                        we’ll arrange a driver that fits your schedule and business
                                                        needs.
                                                    </p>
                                                    <a href="contact" class="btn btn-light btn-lg fw-bold px-4">
                                                        Contact Us
                                                    </a>
                                                </div>
                                            </div>

                                            <!-- Right side (Accordion) -->
                                            <div class="col-12 col-lg-6 d-flex">
                                                <div class="accordion w-100 h-100" id="faqAccordion">
                                                    <!-- 🔹 full height -->

                                                    <!-- Item 1 (open by default) -->
                                                    <div class="accordion-item shadow-sm border-0 mb-3 rounded-3">
                                                        <h2 class="accordion-header">
                                                            <button
                                                                class="accordion-button fw-bold text-dark d-flex align-items-center no-arrow"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                                aria-controls="collapseOne">
                                                                <span class="toggle-icon me-2">−</span>
                                                                Can I book a on-demand drivers for just a few hours?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                                            data-bs-parent="#faqAccordion">
                                                            <div class="accordion-body text-secondary">
                                                                Yes, you can. Ridewell offers flexible booking options —
                                                                hourly, daily, weekly, or monthly. If you need a driver
                                                                for a short period to attend meetings, run errands, or
                                                                handle temporary assignments, we’ll assign a
                                                                professional driver that suits your schedule and
                                                                location.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Item 2 -->
                                                    <div class="accordion-item shadow-sm border-0 mb-3 rounded-3">
                                                        <h2 class="accordion-header">
                                                            <button
                                                                class="accordion-button collapsed fw-bold text-dark d-flex align-items-center no-arrow"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                <span class="toggle-icon me-2">+</span>
                                                                Can I request multiple chauffeurs for a large event?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            data-bs-parent="#faqAccordion">
                                                            <div class="accordion-body text-secondary">
                                                                Yes, all our chauffeurs undergo rigorous training in
                                                                professional conduct,
                                                                discretion, and customer service standards.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Item 3 -->
                                                    <div class="accordion-item shadow-sm border-0 mb-3 rounded-3">
                                                        <h2 class="accordion-header">
                                                            <button
                                                                class="accordion-button collapsed fw-bold text-dark d-flex align-items-center no-arrow"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                <span class="toggle-icon me-2">+</span>
                                                                Are your chauffeurs professionally trained?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThree" class="accordion-collapse collapse"
                                                            data-bs-parent="#faqAccordion">
                                                            <div class="accordion-body text-secondary">
                                                                While we can't guarantee a specific individual, we will
                                                                do our best to
                                                                accommodate requests based on availability and
                                                                scheduling.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Item 4 -->
                                                    <div class="accordion-item shadow-sm border-0 mb-3 rounded-3">
                                                        <h2 class="accordion-header">
                                                            <button
                                                                class="accordion-button collapsed fw-bold text-dark d-flex align-items-center no-arrow"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseFour" aria-expanded="false"
                                                                aria-controls="collapseFour">
                                                                <span class="toggle-icon me-2">+</span>
                                                                What vehicles are available for corporate chauffeur
                                                                services?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFour" class="accordion-collapse collapse"
                                                            data-bs-parent="#faqAccordion">
                                                            <div class="accordion-body text-secondary">
                                                                Amenities like Wi-Fi and bottled water are standard in
                                                                most of our
                                                                executive-class vehicles, though availability may vary
                                                                by service level.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Item 5 -->
                                                    <div class="accordion-item shadow-sm border-0 mb-3 rounded-3">
                                                        <h2 class="accordion-header">
                                                            <button
                                                                class="accordion-button collapsed fw-bold text-dark d-flex align-items-center no-arrow"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseFive" aria-expanded="false"
                                                                aria-controls="collapseFive">
                                                                <span class="toggle-icon me-2">+</span>
                                                                Are your chauffeurs professionally trained?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFive" class="accordion-collapse collapse"
                                                            data-bs-parent="#faqAccordion">
                                                            <div class="accordion-body text-secondary">
                                                                Our vetting process includes extensive background
                                                                checks, driving record
                                                                verification, and professional interviews to ensure the
                                                                highest safety
                                                                standards.
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <?php include 'inc/footer.php'; ?>

                            <!-- Remove Bootstrap arrow -->
                            <style>
                            .accordion-button::after {
                                display: none !important;
                            }
                            </style>

                            <!-- JS for plus/minus toggle -->
                            <script>
                            document.querySelectorAll('.accordion-button').forEach(button => {
                                const icon = button.querySelector('.toggle-icon');

                                button.addEventListener('click', () => {
                                    document.querySelectorAll('.toggle-icon').forEach(i => i
                                        .textContent = '+');
                                    setTimeout(() => {
                                        if (!button.classList.contains('collapsed')) {
                                            icon.textContent = '−';
                                        }
                                    }, 150);
                                });
                            });
                            </script>

</body>

</html>