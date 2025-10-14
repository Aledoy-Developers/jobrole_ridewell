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
.navbar-nav .dropdown:hover > .dropdown-menu {
    display: block;
    margin-top: 0; /* optional: aligns it properly */
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

    <div class="">
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
                                        Mobility</a>
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