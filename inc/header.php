<section>
    <style>
    /* Define colors once */
    :root {
        --primary-blue: #003a8d;
        --darker-blue: #00285a;
    }

    /* ------------------------------------------------------------- */
    /* GLOBAL HOVER STYLES */
    /* ------------------------------------------------------------- */

    /* Top Bar Links Hover (Email/Phone) */
    .top-bar a {
        color: inherit;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    /* 🔥 FIX: Top bar links should hover to blue/darker blue */
    .top-bar a:hover {
        color: var(--primary-blue);
    }

    /* Social Icons Hover */
    .social-icons a {
        color: inherit;
        transition: color 0.3s ease;
    }

    .social-icons a:hover {
        color: var(--primary-blue);
    }

    /* Main Navigation Links Hover */
    .navbar-nav .nav-link {
        color: #333;
        transition: color 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
        color: var(--primary-blue);
    }

    /* Book a Driver/Book Now Button Hover */
    .button button {
        background-color: var(--primary-blue);
        color: white;
        border: 1px solid var(--primary-blue);
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    .button button:hover {
        background-color: var(--darker-blue);
        border-color: var(--darker-blue);
    }

    /* ------------------------------------------------------------- */
    /* DROPDOWN BUTTON STYLES (REQUIRED FOR DRIVERS/SERVICES MENUS) */
    /* ------------------------------------------------------------- */

    /* 1. Style the Dropdown Container to be wider and padding adjusted */
    .driver-dropdown {
        /* Set a minimum width to fit the button style */
        min-width: 250px;
        padding: 10px;
    }

    /* 2. Style the individual Dropdown Items to look like the blue-bordered buttons */
    .custom-dropdown-btn {
        /* Default State (White Background, Blue Border/Text) */
        background-color: white !important;
        color: var(--primary-blue) !important;
        border: 2px solid var(--primary-blue) !important;
        border-radius: 10px !important;

        /* Spacing and Size */
        margin-bottom: 8px;
        padding: 12px 16px !important;
        text-align: center;
        font-size: 1rem;
        font-weight: 500;

        display: block;
    }

    /* 3. Style the Hover/Active State (Solid Blue Fill) */
    .custom-dropdown-btn:hover,
    .custom-dropdown-btn:focus,
    .custom-dropdown-btn:active {
        background-color: var(--primary-blue) !important;
        color: white !important;
        border-color: var(--primary-blue) !important;
    }

    /* Ensure the li wrapper doesn't interfere with the spacing */
    .driver-dropdown li {
        padding: 0;
        margin: 0;
    }

    /* Show dropdown on hover */
    .navbar-nav .dropdown:hover>.dropdown-menu {
        display: block;
        margin-top: 0;
        /* optional: aligns it properly */
    }

    /* ------------------------------------------------------------- */
    /* VIDEO BACKGROUND STYLES (NEW) */
    /* ------------------------------------------------------------- */
    
    /* 🔥 FIX 1: Ensure top bar is on top and has a white background (if it's not transparent) */
    .top-bar {

        position: relative; 
        z-index: 10; 
        background-color: #0a3d91; /* Keep white for the top bar as requested by the original layout */
        color: white; /* Reset color so text is visible (black/dark) */
    }


    /* Main wrapper to contain the video and content */
    .video-background-wrap {
        position: relative;
        width: 100%;
        /* 🔥 FIX 2: Prevents horizontal/vertical scrollbars caused by the full-screen video */
        overflow: hidden; 
        /* Set min-height to ensure the section doesn't collapse before content loads */
        min-height: 700px; 
    }

    /* Style the video element to be fullscreen and centered within its container */
    #hero-video {
        position: absolute;
        top: 50%;
        left: 50%;
        /* Use transform to center the video */
        transform: translate(-50%, -50%); 
        /* Ensures the video covers the entire container */
        min-width: 100%;
        min-height: 100%; 
        width: auto;
        height: auto;
        z-index: 1; /* Keep the video behind the content and overlay */
        object-fit: cover; /* Ensures video scales nicely without stretching */
    }

    /* The overlay div holds all your existing content and the dark gradient */
    .video-content-overlay {
        position: relative;
        z-index: 5; /* Puts content above the video */
        
        /* 🔥 FIX 3: Removed padding-top, letting the top-bar naturally sit above the video content */
        /* padding-top: 45px; - Removed this rule */
        
        /* Recreates your previous gradient overlay to darken the video */
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6));
    }

    /* Old .navbar-bg CSS rules adjusted for content within the overlay */

    .banner-text h2 {
        color: #fff !important;
        font-weight: 700;
        font-style: Bold;
        font-size: 50px;
        line-height: 63px;
        text-align: center;
    }

    .banner-text {
        margin-top: 115px;
        margin-bottom: 99px;
    }
    </style>

    <div class="top-bar py-2">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-left">
                
                <div class="d-flex flex-column flex-sm-row align-items-start gap-2 gap-md-5">
                    <div class="mb-1 mb-sm-0">
                        <i class="bi bi-envelope-fill"></i>
                        Info@ridewellng.com
                    </div>
                    <div class="mb-1 mb-sm-0">
                        <i class="bi bi-telephone-fill"></i>
                        07025001539, 08036764455
                    </div>
                    <div class="text-center text-sm-start">
                        <i class="bi bi-geo-alt-fill"></i>
                        3rd Floor Wing A, AVM Complex, Ologolo Lekki Lagos.
                    </div>
                </div>

                <div class="social-icons d-flex align-items-center mt-2 mt-md-0">
                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                    <a href="#"><i class="fa fa-whatsapp"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                    <a href="https://www.instagram.com/ridewellglobalservices/" target="blank_"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="video-background-wrap">

        <video playsinline="true" autoplay="autoplay" muted="muted" loop="loop" id="hero-video">
            <source src="video.mp4" type="video/mp4"> 
            Your browser does not support the video tag.
        </video>

        <div class="video-content-overlay">
            
            <div class="container">
                <nav class="container navbar navbar-expand-md hm navbar-light bg-white">
                    <a class="navbar-brand" href="./">
                        <img src="images/logo.jpg" class="img-fluid" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarWithDropdown" aria-controls="navbarWithDropdown" aria-expanded="false"
                        aria-label="Toggle navigation" style="
                        border: none;
                        box-shadow: none;
                        outline: none;
                        background: transparent;
                      ">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarWithDropdown">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="./">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about">ABOUT</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="servicesDropdownLink" role="button">
                                    SERVICES
                                </a>
                                <ul class="dropdown-menu driver-dropdown" aria-labelledby="servicesDropdownLink">
                                    <li>
                                        <a href="on-demand?cat=Services" class="dropdown-item custom-dropdown-btn">On-Demand
                                            Drivers</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item custom-dropdown-btn"
                                            href="fleet-management?cat=Services">Fleet
                                            Management</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item custom-dropdown-btn"
                                            href="corporate-mobility?cat=Services">Corporate
                                            Mobility</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item custom-dropdown-btn"
                                            href="executive-chauffeur?cat=Services">Executive
                                            Chauffeur</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item custom-dropdown-btn"
                                            href="secure-driving-solution?cat=Services">Secure
                                            Driving Solution</a>
                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    DRIVERS
                                </a>
                                <ul class="dropdown-menu driver-dropdown" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <a class="dropdown-item ropdown-item custom-dropdown-btn"
                                            href="personal-driver?cat=Drivers">Personal Drivers</a>
                                    </li>
                                    <li>
                                        <a href="executive-drivers?cat=Drivers"
                                            class="dropdown-item custom-dropdown-btn">Executive
                                            Drivers</a>
                                    </li>
                                    <li>
                                        <a href="corporate-drivers?cat=Drivers"
                                            class="dropdown-item custom-dropdown-btn">Corporate
                                            Drivers</a>
                                    </li>
                                    <li>
                                        <a href="spy-police-driver?cat=Drivers"
                                            class="dropdown-item custom-dropdown-btn">Spy Police
                                            Drivers</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="vacancy">APPLY</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact">CONTACT</a>
                            </li>
                        </ul>
                        <div class="ms-auto button">
                            <a href="book-a-driver">
                                <button>Book a Driver</button>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="container">
                <div class="banner-text text-white">
                    <h2>
                        Your No 1 Trusted Partner for <br />
                        Professional Drivers...
                    </h2>
                </div>

                <form action="book-a-driver" method="post" style="padding-bottom: 69px" class="container my-5">
                    <div class="bg-white rounded-4 shadow-sm p-5">
                        <h2 class="mb-4">Find Your Next Driver With Us</h2>
                        <div class="row align-items-end">
                            <div class="col-12 col-md-4 mb-3 mb-md-0">
                                <label for="serviceType" class="form-label visually-hidden">Driver type</label>
                                <select name="service_type" class="form-control mt-2">
                                    <option disabled selected>Select</option>
                                    <?php drivers_list(); ?>
                                </select>
                            </div>
                            <div class="col-12 col-md-3 mb-3 mb-md-0">
                                <label for="date" class="form-label visually-hidden">Date</label>
                                <input name="datetime" type="date" style="outline: none" class="form-control" id="date"
                                    placeholder="Date" />
                            </div>
                            <div class="col-12 col-md-3 mb-3 mb-md-0">
                                <label for="pickupLocation" class="form-label visually-hidden">Pick-up location</label>
                                <input name="location" type="text" class="form-control" id="pickupLocation"
                                    placeholder="Pick-up location" />
                            </div>
                            <div class="col-12 col-md-2 w-0 button">
                                <input type="submit" name="home_btn" value="Book now" class="hom_btn">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>

<script>
    $('.navbar-nav .dropdown').on('mouseenter', function() {
        var dropdown = $(this).find('.dropdown-menu');
        $(this).addClass('show');
        dropdown.addClass('show');
    }).on('mouseleave', function() {
        var dropdown = $(this).find('.dropdown-menu');
        $(this).removeClass('show');
        dropdown.removeClass('show');
    });
</script>