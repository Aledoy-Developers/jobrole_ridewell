<?php
  include('inc/conn.php');  
  include('inc/config.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ride Well | Vacancy</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="dist/css/bootstrap.min.css" />
    <script src="dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    />
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
  </head>
  <body>

  <?php include 'inc/single-header.php'; ?>

    <section class="">
      <div class="container hi mb-5">
        <h3>JOIN OUR TEAM OF PROFESSIONAL DRIVERS <span><i class="bi bi-car-front-fill"></i></span></h3>
        <h2>Be Part Of A Trusted Network Delivering Reliable Driving Services.</h2>
      </div>
    </section>
    <form action="proc_vacancy" method="post" enctype="multipart/form-data" class="container">
      <h4>Driver's Information</h4>
      <div class="row">
        <h2 class="mb-4">Send Us a Message</h2>

        <?php if ($msg == 'success') { ?>
          <div class="alert alert-success"><?= $comment ?></div>
        <?php } ?>

        <?php if ($msg == 'error') { ?>
          <div class="alert alert-danger"><?= $comment ?></div>
        <?php } ?>

        <!-- First name -->
        <div class="col-md-6 d-flex flex-column my-2">
          <label>First name</label>
          <input type="text" name="firstname" class="form5 mt-2" 
                placeholder="Enter firstname" value="<?= htmlspecialchars($firstname ?? '') ?>">
        </div>

        <!-- Last name -->
        <div class="col-md-6 d-flex flex-column my-2">
          <label>Last name</label>
          <input type="text" name="lastname" class="form5 mt-2" 
                placeholder="Enter lastname" value="<?= htmlspecialchars($lastname ?? '') ?>">
        </div>

        <!-- Email -->
        <div class="col-md-6 d-flex flex-column my-2">
          <label>Email</label>
          <input type="text" name="email" class="form5 mt-2" 
                placeholder="Enter email" value="<?= htmlspecialchars($email ?? '') ?>">
        </div>

        <!-- Phone -->
        <div class="col-md-6 d-flex flex-column my-2">
          <label>Phone</label>
          <input type="text" name="phone" class="form5 mt-2" 
                placeholder="Enter phone" value="<?= htmlspecialchars($phone ?? '') ?>">
        </div>

        <!-- Address 1 -->
        <div class="col-md-6 d-flex flex-column my-2">
          <label>Address 1</label>
          <input type="text" name="address_1" class="form5 mt-2" 
                placeholder="Enter Address 1" value="<?= htmlspecialchars($address_1 ?? '') ?>">
        </div>

        <!-- Address 2 -->
        <div class="col-md-6 d-flex flex-column my-2">
          <label>Address 2</label>
          <input type="text" name="address_2" class="form5 mt-2" 
                placeholder="Enter Address 2" value="<?= htmlspecialchars($address_2 ?? '') ?>">
        </div>

        <!-- State -->
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

        <!-- Local government -->
        <div class="col-md-6 d-flex flex-column my-2">
          <label>Local government area (LGA)</label>
          <input type="text" name="local_gov" class="form5 mt-2" 
                placeholder="Enter local government area" value="<?= htmlspecialchars($local_gov ?? '') ?>">
        </div>

        <!-- Yes/No -->
        <div class="col-md-6 d-flex flex-column my-2">
          <label>Are you eligible to work anywhere in Nigeria?</label>
          <div class="d-flex gap-2 mt-3 flex-column">

            <div class="form-check">
              <input class="form-check-input" type="radio" name="yesNoOption" id="yesOption" value="yes"
                    <?= (isset($yesNoOption) && $yesNoOption == "yes") ? "checked" : "" ?>>
              <label class="form-check-label" for="yesOption">Yes</label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="yesNoOption" id="noOption" value="no"
                    <?= (isset($yesNoOption) && $yesNoOption == "no") ? "checked" : "" ?>>
              <label class="form-check-label" for="noOption">No</label>
            </div>

          </div>
        </div>


        <!-- Additional Info -->
        <div class="col-md-6 d-flex flex-column my-2">
          <label>Additional Information</label>
          <textarea name="additional_info" class="form5"><?= htmlspecialchars($additional_info ?? '') ?></textarea>
        </div>

        <!-- License number -->
        <div class="col-md-6 d-flex flex-column my-2">
          <label>License number</label>
          <input type="text" name="license_no" class="form5 mt-2" 
                placeholder="Enter license" value="<?= htmlspecialchars($license_no ?? '') ?>">
        </div>

        <!-- Expiry -->
        <div class="col-md-6 d-flex flex-column my-2">
          <label>Expiry date</label>
          <input type="date" name="expiry_date" class="form5 mt-2" 
                value="<?= htmlspecialchars($expiry_date ?? '') ?>">
        </div>

        <!-- DOB -->
        <div class="col-md-6 d-flex flex-column my-2">
          <label>Date of birth</label>
          <input type="date" name="dob" class="form5 mt-2" 
                value="<?= htmlspecialchars($dob ?? '') ?>">
        </div>

        <!-- File upload (can’t auto fill for security reasons) -->
        <div class="col-md-6 d-flex flex-column my-2">
          <label>Upload License (JPEG, PNG, PDF)</label>
          <input type="file" name="upload_lice" class="form5 mt-2">
        </div>

        <!-- Terms -->
        <div class="col-md-6 d-flex flex-column mt-1">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="agree" id="agree" value="yes"
                  <?= isset($agree) && $agree=="yes" ? "checked" : "" ?>>
            <label class="form-check-label" for="agree">
                By clicking this box, I confirm that I have read, understood, and agree to be bound by the
                <strong><a href="terms_driver.php" target="blank_"class="text-decoration-none text-dark">Terms & Condition</a></strong> and
                Privacy Policy of this service
            </label>
                </div>
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

