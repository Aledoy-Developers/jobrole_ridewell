<?php

    include('inc/conn.php');
    require_once('inc/fns.php');
    include('inc/config.php'); 

if($_POST['home_btn'])
{
    $location = $_POST['location'];
    $datetime = $_POST['datetime'];
    $service_type = $_POST['service_type'];
}

if($_GET['type'])
{
    $service_type = $_GET['type'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ride Well | Book a Driver</title>
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
        <div class="container hi mb-4">
            <h3>BOOK A PROFESSIONAL DRIVER IN MINUTES <span><i class="bi bi-car-front-fill me-3"></i></span></h3>
            <h2>Reliable, experienced drivers at your service.</h2>
        </div>
    </section>

    <form action="proc_bookdriver" method="post" class="container">
        <div class="row">
            <label class="mb-5">Fill the form below to get a quote</label>
            <?php if ($msg == 'success') {  ?>
            <div class="alert alert-success">Driver Booked</div>
            <?php } ?>

            <?php if ($msg == 'error') {  ?>
            <div class="alert alert-danger"><?= $comment ?></div>
            <?php } ?>
            <div class="col-md-6 d-flex flex-column my-2">
                <label>First name</label>
                <input type="text" value="<?php echo $firstname; ?>" name="firstname" class="form5 mt-2"
                    placeholder="Enter your firstname">
            </div>
            <div class="col-md-6 d-flex flex-column my-2">
                <label>Last name</label>
                <input type="text" value="<?php echo $lastname; ?>" name="lastname" class="form5 mt-2"
                    placeholder="Enter your lastname">
            </div>
            <div class="col-md-6 d-flex flex-column my-2">
                <label>Email</label>
                <input type="email" value="<?php echo $email; ?>" name="email" class="form5 mt-2"
                    placeholder="Enter your email">
            </div>
            <div class="col-md-6 d-flex flex-column my-2">
                <label>Phone</label>
                <input type="text" value="<?php echo $phone; ?>" name="phone" class="form5 mt-2"
                    placeholder="Enter your phone number">
            </div>
            <div class="col-md-6 d-flex flex-column my-2">
                <label>Service type</label>
                <!-- <input type="text" class="form5 mt-2" placeholder="NAme"> -->
                <select name="service_type" class="form5 mt-2">
                    <?php if($service_type) { ?>
                    <option selected value="<?php echo $service_type; ?>"><?php echo $service_type; ?></option>
                    <?php } ?>
                    <option disabled <?php if(empty($service_type)) echo "selected"; ?>>Select</option>
                    <?php drivers_list(); ?>
                </select>
            </div>
            <div class="col-md-6 d-flex flex-column my-2">
                <label>Date / Time</label>
                <input type="datetime-local" value="<?php echo $datetime; ?>" name="datetime" class="form5 mt-2">
            </div>

            <div class="col-md-6 d-flex flex-column my-2">
                <label>State</label>
                <select name="state" id="state" class="form5 mt-2">
                    <option disabled>Select State</option>
                    <?php 
                      $states = ["Abia","Adamawa","Akwa Ibom","Anambra","Bauchi","Bayelsa","Benue","Borno","Cross River",
                                "Delta","Ebonyi","Edo","Ekiti","Enugu","Gombe","Imo","Jigawa","Kaduna","Kano","Katsina",
                                "Kebbi","Kogi","Kwara","Lagos","Nasarawa","Niger","Ogun","Ondo","Osun","Oyo","Plateau",
                                "Rivers","Sokoto","Taraba","Yobe","Zamfara","FCT"];
                      foreach ($states as $s) {
                        $selected = ($state ?? '') == $s ? 'selected' : '';
                        echo "<option value='$s' $selected>$s</option>";
                      }
                    ?>
                </select>
            </div>

            <div class="col-md-6 d-flex flex-column my-2">
                <label>Pick-up location</label>
                <input type="text" class="form5 mt-2" value="<?php echo $location; ?>" name="location"
                    placeholder="Enter pick-up location">
            </div>

            <div class="col-md-6 d-flex flex-column my-2">
                <label>Service duration (e.g: 3 hours or days)</label>
                <!-- <input type="text" class="form5 mt-2" placeholder="NAme"> -->
                <div class="row">
                    <div class="col-md-6 d-flex flex-column">
                        <select name="duration" class="form5 mt-2">
                            <option disabled <?php if(empty($duration)) echo "selected"; ?>>Select duration</option>
                            <option value="1" <?php if($duration == "1") echo "selected"; ?>>1</option>
                            <option value="2" <?php if($duration == "2") echo "selected"; ?>>2</option>
                            <option value="3" <?php if($duration == "3") echo "selected"; ?>>3</option>
                            <option value="4" <?php if($duration == "4") echo "selected"; ?>>4</option>
                            <option value="5" <?php if($duration == "5") echo "selected"; ?>>5</option>
                            <option value="6" <?php if($duration == "6") echo "selected"; ?>>6</option>
                            <option value="7" <?php if($duration == "7") echo "selected"; ?>>7</option>
                            <option value="8" <?php if($duration == "8") echo "selected"; ?>>8</option>
                        </select>
                    </div>
                    <div class="col-md-6 d-flex flex-column ">
                        <select name="period" class="form5 mt-2">
                            <option disabled <?php if(empty($period)) echo "selected"; ?>>Select Period</option>
                            <option value="hour" <?php if($period == "hour") echo "selected"; ?>>Hour(s)</option>
                            <option value="day" <?php if($period == "day") echo "selected"; ?>>Day(s)</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column my-2">
                <label>How did you hear about us?</label>
                <select name="aboutus" class="form5 mt-2">
                    <option value="" disabled <?php if (empty($aboutus)) echo 'selected'; ?>>Please select one option
                    </option>

                    <option value="google" <?php if ($aboutus == "google") echo 'selected'; ?>>Google Search</option>

                    <option value="social" <?php if ($aboutus == "social") echo 'selected'; ?>>Social Media (Facebook,
                        Instagram, LinkedIn, etc.)</option>

                    <option value="friend" <?php if ($aboutus == "friend") echo 'selected'; ?>>Friend/Family Referral
                    </option>

                    <option value="advert" <?php if ($aboutus == "advert") echo 'selected'; ?>>Online Advertisement
                    </option>

                    <option value="radio" <?php if ($aboutus == "radio") echo 'selected'; ?>>Radio/Print Media</option>

                    <option value="event" <?php if ($aboutus == "event") echo 'selected'; ?>>Industry Event/Trade Show
                    </option>

                    <option value="other" <?php if ($aboutus == "other") echo 'selected'; ?>>Other</option>

                </select>
            </div>

            <div class="col-md-12 d-flex flex-column my-2">
                <label>Additional Information</label>
                <div class="d-flex flex-column">
                    <textarea name="additional_info" value="<?php echo $additional_info; ?>"
                        class="form5 mt-2"></textarea>
                </div>
            </div>

            <div class="col-md-6 mt-1">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="agree" id="agree" value="yes">
                    <label class="form-check-label" for="agree">
                        By clicking this box, I confirm that I have read, understood, and agree to be bound by the
                        <strong><a href="terms.php" target="blank_" class="text-decoration-none text-dark">Terms &
                                Condition</a></strong> and
                        Privacy Policy of this service
                    </label>
                </div>
            </div>

            <div class="col-md-12 mt-5 button">
                <button>Submit</button>
            </div>
        </div>
    </form>
    </section>

    <?php include 'inc/footer.php'; ?>
</body>

</html>