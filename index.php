<?php

include('inc/conn.php');
require_once('inc/fns.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ride Well | Home</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="dist/css/bootstrap.min.css" />
    <script src="dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>

<body>

    <?php include('inc/header.php'); ?>

    <section class="pt-5 mt-5 home-abt">
        <div class="container">
            <div class="row">
                <div class="col-md-5 d-flex justify-content-center align-items-center">
                    <img src="images/Rectangle 8.jpg" class="img-fluid" />
                </div>
                <div class="col-md-7">
                    <div class="container hi">
                        <div class="card shadow-sm border-0 rounded-4 p-md-5 bg-white">
                            <h3 class="text-uppercase mb-2">
                                About Ridewell GLOBAL SERVICES <span><i class="bi bi-car-front-fill me-1"></i></span>
                            </h3>
                            <h2 class="fw-bold mb-4">
                                Connecting You with Reliable, <br class="d-none d-md-block" />
                                Professional Drivers Anytime, Anywhere.
                            </h2>

                            <p class="text-muted mb-5">
                                We understand that every
                                client has unique needs. That’s why we offer a wide range of
                                professionally trained chauffeurs and drivers, carefully
                                matched to your requirements. Whether you need a discreet
                                chauffeur for a business meeting or a SPY Police driver for
                                added security, <strong>Ridewell Global Services</strong> has you covered.
                            </p>

                            <div class="row gy-4">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="me-3 text-primary fs-3">
                                            <i class="bi bi-car-front-fill"></i>
                                        </div>
                                        <div>
                                            <h5 class="fw-semibold mb-1">
                                                Reliable Drivers, Anytime
                                            </h5>
                                            <p class="text-muted mb-0">
                                                Our drivers are carefully vetted and trained to
                                                provide you with a safe and professional driving
                                                experience every time.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="me-3 text-primary fs-3">
                                            <i class="bi bi-file-earmark-text-fill"></i>
                                        </div>
                                        <div>
                                            <h5 class="fw-semibold mb-1">
                                                Simple &amp; Fast Booking
                                            </h5>
                                            <p class="text-muted mb-0">
                                                Book a driver in just a few clicks through our
                                                easy-to-use online form — no stress, no delays.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="me-3 text-primary fs-3">
                                            <i class="bi bi-headset"></i>
                                        </div>
                                        <div>
                                            <h5 class="fw-semibold mb-1">Easy Customer Support</h5>
                                            <p class="text-muted mb-0">
                                                We respond quickly to your requests, keeping you
                                                updated from booking to driver assignment.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 button">
                                <a href="about">
                                    <button>Explore more</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero-bg mt-5 pt-5">
        <div class="container pb-5">
            <div class="d-flex gap-3 justify-content-center align-items-center discdidiover">
                <div class="text-primary fs-3">
                    <i class="bi bi-car-front-fill"></i>
                </div>
                <h3>DISCOVER OUR SERVICES</h3>
                <div class=" text-primary fs-3">
                    <i class="bi bi-car-front-fill"></i>
                </div>
            </div>
            <div class="text-center mnm">
                <h3>
                    Your Trusted Partner for Hassle-Free <br />
                    Transportation
                </h3>
            </div>

            <div class="row top">
                <div class="col-md-3">
                    <div class="image-card">
                        <img src="images/service1.png" alt="Service Description" /> 
                        
                        <div class="image-overlay">
                            <h4>Personal Drivers</h4>
                            <p>Our personal drivers are screened drivers for commuting, errands, and reliable family transportation.
                            </p>
                            <div class="mt-3 button">
                                <a href="book-a-driver">
                                    <button>Book Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image-card">
                        <img src="images/service2.png" class="img-fluid" /> 
                        
                        <div class="image-overlay">
                            <h4>Executive Drivers</h4>
                            <p>Executive drivers offer superior discretion and expert knowledge for high-net-worth clients.</p>
                            <div class="mt-3 button">
                                <a href="book-a-driver">
                                    <button>Book Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image-card">
                        <img src="images/service3.png" class="img-fluid" /> 
                        
                        <div class="image-overlay">
                            <h4>Corporate Drivers</h4>
                            <p>We provide reliable, full-time drivers for companies needing support for their fleet or management staff.</p>
                            <div class="mt-3 button">
                                <a href="book-a-driver">
                                    <button>Book Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image-card">
                        <img src="images/service4.png" class="img-fluid" /> 
                        
                        <div class="image-overlay">
                            <h4>Spy Police Drivers</h4>
                            <p>For clients requiring enhanced security, our Spy Police Drivers are trained professionals.</p>
                            <div class="mt-3 button">
                                <a href="book-a-driver">
                                    <button>Book Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-4">
                    <div class="image-card">
                        <img src="images/service5.png" alt="Service Description" /> 
                        
                        <div class="image-overlay">
                            <h4>Corporate Chauffeurs</h4>
                            <p>Our corporate chauffeurs are polished, punctual, and professionally trained in executive etiquette.</p>
                            <div class="mt-3 button">
                                <a href="book-a-driver">
                                    <button>Book Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-md-4">
                    <div class="image-card">
                        <img src="images/service6.png" alt="Service Description" /> 
                        
                        <div class="image-overlay">
                            <h4>Corporate Chauffeurs</h4>
                            <p>Our corporate chauffeurs are polished, punctual, and professionally trained in executive etiquette.</p>
                            <div class="mt-3 button">
                                <a href="book-a-driver">
                                    <button>Book Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <section class="pt-5 mt-5 home-abt_">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="container hi">
                        <div class="card shadow-sm border-0 rounded-4 p-md-5 bg-white">
                            <h3 class="text-uppercase mb-2">
                                Why choose RIDEWELL GLOBAL SERVICES <span><i class="bi bi-car-front-fill me-1"></i></span>
                            </h3>
                            <h2 class="fw-bold mb-4">
                                Connecting You with Reliable, <br class="d-none d-md-block" />
                                Professional Drivers Anytime, Anywhere.
                            </h2>

                            <p class="text-muted mb-5">
                                We understand that every
                                client has unique needs. That’s why we offer a wide range of
                                professionally trained chauffeurs and drivers, carefully
                                matched to your requirements. Whether you need a discreet
                                chauffeur for a business meeting or a SPY Police driver for
                                added security, <strong>Ridewell Global Services</strong> has you covered.
                            </p>

                            <div class="row gy-4">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="me-3 text-primary fs-3">
                                            <i class="bi bi-check"></i>
                                        </div>
                                        <div>
                                            <h5 class="fw-semibold mb-1">Verified and trained drivers.</h5>
                                            <p class="text-muted mb-0">
                                                All chauffeurs and drivers undergo background checks
                                                and training. Clients must wear seatbelts at all times
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="me-3 text-primary fs-3">
                                            <i class="bi bi-check"></i>
                                        </div>
                                        <div>
                                            <h5 class="fw-semibold mb-1">
                                                Premium customer service.
                                            </h5>
                                            <p class="text-muted mb-0">
                                                Ridewell chauffeurs/drivers are trained to maintain
                                                professionalism and discretion.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="me-3 text-primary fs-3">
                                            <i class="bi bi-check"></i>
                                        </div>
                                        <div>
                                            <h5 class="fw-semibold mb-1">
                                                Flexible, on-demand solutions.
                                            </h5>
                                            <p class="text-muted mb-0">
                                                Refunds, where applicable, will be processed within
                                                5–7 business days to the original payment method.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="me-3 text-primary fs-3">
                                            <i class="bi bi-check"></i>
                                        </div>
                                        <div>
                                            <h5 class="fw-semibold mb-1">Strong focus on safety and confidentiality.</h5>
                                            <p class="text-muted mb-0">
                                                We respond quickly to your requests, keeping you
                                                updated from booking to driver assignment.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="me-3 text-primary fs-3">
                                            <i class="bi bi-check"></i>
                                        </div>
                                        <div>
                                            <h5 class="fw-semibold mb-1">Scalable services for individuals and businesses.</h5>
                                            <p class="text-muted mb-0">
                                                We respond quickly to your requests, keeping you
                                                updated from booking to driver assignment.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5  d-flex justify-content-center align-items-center">
                    <img src="images/Rectangle 18.jpg" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5 pt-5">
        <div class="join-team">
            <div class="container join-team-content">
                <h3>Join Our Team of Professional Drivers</h3>
                <p>
                    Apply today and become part of a trusted network of skilled drivers
                    <br />
                    dedicated to safety, reliability, and excellent service.
                </p>
                <div class="d-flex gap-3 justify-content-center align-items-center join-team-buttons">
                    <div class="button">
                        <a href="vacancy">
                            <button>Apply for a Driver</button>
                        </a>
                    </div>
                    <div class="button2">
                        <a href="book-a-driver">
                            <button>Book a Driver</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 mt-5 testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-4 hi">
                    <h3>TESTIMONIAL <span><i class="bi bi-car-front-fill"></i></span></h3>
                    <h2>Trusted by Clients Across the City</h2>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <div class="pic ">
                                <div class="pic_nav">
                                    <div class="pic_nav-img">
                                        <img src="images/Ellipse8.png" class="img-fluid" />
                                    </div>
                                    <div class="pic_nav-id">
                                        Saheed from Ikeja <br />
                                    </div>
                                </div>
                                <p>
                                    Ridewell made hiring a professional driver effortless! Smooth booking, punctual, courteous, and skilled drivers - what more could you ask for? Highly recommend!
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="pic">
                                <div class="pic_nav">
                                    <div class="pic_nav-img">
                                        <img src="images/Ellipse10.png" class="img-fluid" />
                                    </div>
                                    <div class="pic_nav-id">
                                        Chinedu from Mushin<br />
                                    </div>
                                </div>
                                <p>
                                    Exceptional experience with Ridewell! The booking process was easy, and my driver was on time, professional, and courteous. I'll be using them again!
                                </p>
                                <br>
                            </div>
                        </div>
                        <!-- <div class="col-md-6 mt-2">
                            <div class="pic">
                                <div class="pic_nav">
                                    <div class="pic_nav-img">
                                        <img src="images/Ellipse10.png" class="img-fluid" />
                                    </div>
                                    <div class="pic_nav-id">
                                        Adaobi<br />
                                    </div>
                                </div>
                                <p>
                                    Ridewell truly delivers! From booking to drop-off, everything was seamless. My driver was skilled, friendly, and punctual. Five stars!
                                     <br> <br>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="pic">
                                <div class="pic_nav">
                                    <div class="pic_nav-img">
                                        <img src="images/Ellipse11.png" class="img-fluid" />
                                    </div>
                                    <div class="pic_nav-id">
                                        Tunde<br />
                                    </div>
                                </div>
                                <p>
                                    Ridewell's service is top-notch! The driver was courteous, professional, and arrived right on time. Booking was easy, and I'd definitely use them again.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="pic">
                                <div class="pic_nav">
                                    <div class="pic_nav-img">
                                        <img src="images/Ellipse8.png" class="img-fluid" />
                                    </div>
                                    <div class="pic_nav-id">
                                        John<br />
                                    </div>
                                </div>
                                <p>
                                    I'm impressed with Ridewell! Their drivers are courteous, skilled, and punctual. The booking process was smooth, and I had a great experience overall. Highly recommend!
                                </p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="core-bg py-5 mt-5"> 
        <div class="container hi">
            <div class="d-flex gap-3 align-items-center discdidiover">
                <h3 class="text-white">OUR PRICING CATEGORIES</h3>
                    <i class="bi bi-car-front-fill text-secondary fs-3"></i>
                </div>
                <div class=" mnm">
                <h2>
                    Choose the Right Package for Your Journey
                </h2>
            </div>

            <div class="container py-5">
      <div class="row g-4">
        <!-- Corporate Drivers -->
        <div class="col-md-3 text-dark">
          <div class="pricing-card">
            <h5>Corporate Drivers</h5>
            <div class="price-main">₦3,000<span>/per hour</span></div>
            <a href="book-a-driver">
                <button class="btn-primary-custom w-100">
                    Corporate Drivers
                </button>
            </a>
            <div class="plan-option">
              <i class="bi bi-check-circle-fill"></i> ₦20,000<span
                >/per day</span
              >
              <span class="badge-custom">Around lagos</span>
            </div>
            <div class="plan-option">
              <i class="bi bi-check-circle-fill"></i> ₦40,000<span
                >/per day</span
              >
              <span class="badge-custom">Outside lagos</span>
            </div>
          </div>
        </div>

        <!-- Personal Drivers -->
        <div class="col-md-3 text-dark">
          <div class="pricing-card">
            <h5>Personal Drivers</h5>
            <div class="price-main">₦3,000<span>/per hour</span></div>
            <a href="book-a-driver">
                <button class="btn-primary-custom w-100">
                    Personal Drivers
                </button>
            </a>
            <div class="plan-option">
              <i class="bi bi-check-circle-fill"></i> ₦20,000<span
                >/per day</span
              >
              <span class="badge-custom">Around lagos</span>
            </div>
            <div class="plan-option">
              <i class="bi bi-check-circle-fill"></i> ₦40,000<span
                >/per day</span
              >
              <span class="badge-custom">Outside lagos</span>
            </div>
          </div>
        </div>

        <!-- Executive/VIP Drivers -->
        <div class="col-md-3 text-dark">
          <div class="pricing-card">
            <h5>Executive/VIP Drivers</h5>
            <div class="price-main">₦4,000<span>/per hour</span></div>
            <a href="book-a-driver">
                <button class="btn-primary-custom w-100">
                    Executive/VIP Drivers
                </button>
            </a>
            <div class="plan-option">
              <i class="bi bi-check-circle-fill"></i> ₦30,000<span
                >/per day</span
              >
              <span class="badge-custom">Around lagos</span>
            </div>
            <div class="plan-option">
              <i class="bi bi-check-circle-fill"></i> ₦50,000<span
                >/per day</span
              >
              <span class="badge-custom">Outside lagos</span>
            </div>
          </div>
        </div>

        <!-- Spy Police Drivers -->
        <div class="col-md-3 text-dark">
          <div class="pricing-card">
            <h5>Spy Police Drivers</h5>
            <div class="price-main">₦4,000<span>/per hour</span></div>
            <a href="book-a-driver">
                <button class="btn-primary-custom w-100">
                    Get spy police plan
                </button>
            </a>
            <div class="plan-option">
              <i class="bi bi-check-circle-fill"></i> ₦30,000<span
                >/per day</span
              >
              <span class="badge-custom">Around lagos</span>
            </div>
            <div class="plan-option">
              <i class="bi bi-check-circle-fill"></i> ₦50,000<span
                >/per day</span
              >
              <span class="badge-custom">Outside lagos</span>
            </div>
          </div>
        </div>
      </div>
    </div>
        </div>
    </section>

    <!-- <section class="pt-5 mt-5">
        <div class="container">
            <div class="news-text hi">
                <h3>LASTEST NEWS / BLOG <span><i class="bi bi-car-front-fill"></i></span></h3>
                <h2>Road Stories, Safety Tips & Industry Trends</h2>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <img src="images/blogpics.png" class="img-fluid" />
                    <div class="home_blog-left-d_and_t2">
                        <div class="home_blog-left-d_t2">
                            <span><i class="bi bi-chat-left-fill"></i></span>
                            <div class="text">Leave a comment</div>
                        </div>
                        <div class="home_blog-left-d_t2">
                            <span><i class="bi bi-person-fill"></i></span>
                            <div class="text">Kelvin duke</div>
                        </div>
                    </div>
                    <div class="txt">
                        <h3>
                            We believe safe driving is smart driving stay informed with
                            confidence.
                        </h3>
                        <hr />
                        <p>
                            Discover the newest road safety practices, technology updates,
                            and driving tips to keep you and your passengers secure.
                        </p>
                        <a href="#">Read More>></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="images/blogpics2.png" class="img-fluid" />
                    <div class="home_blog-left-d_and_t2">
                        <div class="home_blog-left-d_t2">
                            <span><i class="bi bi-chat-left-fill"></i></span>
                            <div class="text">Leave a comment</div>
                        </div>
                        <div class="home_blog-left-d_t2">
                            <span><i class="bi bi-person-fill"></i></span>
                            <div class="text">Kelvin duke</div>
                        </div>
                    </div>
                    <div class="txt">
                        <h3>
                            Fueling the Future: Oil & Gas Trends Impacting Transportation in
                            Nigeria
                        </h3>
                        <hr />
                        <p>
                            The oil and gas industry plays a crucial role in shaping
                            Nigeria’s transportation sector — and that includes driver
                            services like ridewell
                        </p>
                        <a href="#">Read More>></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="images/blogpics3.png" class="img-fluid" />
                    <div class="home_blog-left-d_and_t2">
                        <div class="home_blog-left-d_t2">
                            <span><i class="bi bi-chat-left-fill"></i></span>
                            <div class="text">Leave a comment</div>
                        </div>
                        <div class="home_blog-left-d_t2">
                            <span><i class="bi bi-person-fill"></i></span>
                            <div class="text">Kelvin duke</div>
                        </div>
                    </div>
                    <div class="txt">
                        <h3>
                            Industrial Driving Trends Shaping the Future of Transportation
                        </h3>
                        <hr />
                        <p>
                            The driver services industry is rapidly evolving with
                            technology, safety regulations, and customer expectations
                            leading the way.
                        </p>
                        <a href="#">Read More>></a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section class="pt-5 mt-5">
        <div class="container trust-bg">
            <div class="trust-head">TRUSTED BY PARTNERS</div>
            <div class="trust-car">
                <marquee behavior="" direction="">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/trusted_partners.png" class="img-fluid" />
                        </div>
                        <div class="col-md-3">
                            <img src="images/trusted_partners.png" class="img-fluid" />
                        </div>
                        <div class="col-md-3">
                            <img src="images/trusted_partners.png" class="img-fluid" />
                        </div>
                        <div class="col-md-3">
                            <img src="images/trusted_partners.png" class="img-fluid" />
                        </div>
                    </div>
                </marquee>
            </div>
        </div>
    </section> -->

    <?php include 'inc/footer.php'; ?>
</body>

</html>