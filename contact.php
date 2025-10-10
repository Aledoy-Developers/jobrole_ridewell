<?php
    include('inc/conn.php');
    require_once('inc/fns.php');
    include('inc/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ride Well | Contact</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="dist/css/bootstrap.min.css" />
    <script src="dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>

<body>


    <?php include 'inc/single-header.php'; ?>

    <section class="">
        <div class="container hi">
            <h3> GET IN TOUCH WITH US <span><i class="bi bi-car-front-fill me-3"></i></span></h3>
            <h2>Have questions or need a driver fast? <br> Reach out to our team.</h2>
        </div>
    </section>


    <section class="mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center align-items-start flex-column">
                    <div class="d-flex flex-column gap-5">
                        <div class="contact-box">
                            <div class="icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="text">
                                <span>Contact</span>
                                07025001539, 08036764455
                            </div>
                        </div>
                        <div class="contact-box">
                            <div class="icon">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div class="text">
                                <span>Email</span>
                                Info@ridewellng.com
                            </div>
                        </div>
                        <div class="contact-box">
                            <div class="icon">
                                <i class="bi-geo-alt-fill"></i>
                            </div>
                            <div class="text">
                                <span>Address</span>
                                3rd Floor Wing A, AVM Complex, Ologolo Lekki Lagos
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <form class="form" action="proc_contact" method="post">
                        <?php if ($msg == 'success') {  ?>
                        <div class="alert alert-success">Message Sent</div>
                        <?php } ?>

                        <?php if ($msg == 'error') {  ?>
                        <div class="alert alert-danger"><?= $comment ?></div>
                        <?php } ?>
                        <div class="my-2">
                            <label>Full name</label>
                            <input type="text" name="fullname" class="form-control mt-2" placeholder="Enter your name">
                        </div>
                        <div class="my-2">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control mt-2" placeholder="Enter your email">
                        </div>
                        <div class="my-2">
                            <label>Phone Number</label>
                            <input type="number" name="phone" class="form-control mt-2" placeholder="Enter your number">
                        </div>
                        <div class="my-2">
                            <label>Message</label>
                            <textarea class="form-control mt-2" name="message" placeholder="Enter a message"></textarea>
                        </div>
                        <div class="col-md-12 mt-5 button">
                            <button>Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include 'inc/footer.php'; ?>

</body>

</html>