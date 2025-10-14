<?php
include('inc/conn.php');
require_once('inc/fns.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/autoload.php';  



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstname       = htmlspecialchars($_POST["firstname"]);
    $lastname        = htmlspecialchars($_POST["lastname"]);
    $email           = htmlspecialchars($_POST["email"]);
    $phone           = htmlspecialchars($_POST["phone"]);
    $address_1       = htmlspecialchars($_POST["address_1"]);
    $address_2       = htmlspecialchars($_POST["address_2"]);
    $state           = htmlspecialchars($_POST["state"]);
    $local_gov       = htmlspecialchars($_POST["local_gov"]);
    $eligible        = htmlspecialchars($_POST["yesNoOption"] ?? "");
    $additional_info = htmlspecialchars($_POST["additional_info"]);
    $license_no      = htmlspecialchars($_POST["license_no"]);
    $expiry_date     = htmlspecialchars($_POST["expiry_date"]);
    $dob             = htmlspecialchars($_POST["dob"]);
    $agree           = htmlspecialchars($_POST["agree"] ?? "");

    // ---------- File Upload ----------
    $upload_lice = "";
    if (isset($_FILES["upload_lice"]) && $_FILES["upload_lice"]["error"] == 0) {
        $target_dir = "uploads/licenses/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $file_name   = time() . "_" . basename($_FILES["upload_lice"]["name"]);
        $target_file = $target_dir . $file_name;
        if (move_uploaded_file($_FILES["upload_lice"]["tmp_name"], $target_file)) {
            $upload_lice = $target_file;
        }
    }

    // ---------- Validation ----------
    if (empty($firstname) || empty($lastname) || empty($email) || empty($phone) ||
        empty($address_1) || empty($state) || empty($local_gov) ||
        empty($license_no) || empty($expiry_date) || empty($dob)) {
        $msg = 'error';
        $comment = 'All required fields must be filled';
        include('vacancy.php');
        exit;
    }

    if (empty($eligible)) {
        $msg = 'error';
        $comment = 'Please select Yes or No for eligibility.';
        include('vacancy.php');
        exit;
    }

    if ($_FILES['upload_lice']['error'] == UPLOAD_ERR_NO_FILE) {
        $msg = 'error';
        $comment = 'Please upload your driver’s license.';
        include('vacancy.php');
        exit;
    }

    if (empty($agree)) {
        $msg = 'error';
        $comment = 'You must agree to the Terms & Conditions';
        include('vacancy.php');
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $msg = 'error';
        $comment = 'Please enter a valid email';
        include('vacancy.php');
        exit;
    }

    if (strlen($phone) != 11 || !ctype_digit($phone)) {
        $msg = 'error';
        $comment = 'Please enter a valid GSM number';
        include('vacancy.php');
        exit;
    }

    // ---------- Insert ----------
    $query = "INSERT INTO drivers 
        (firstname, lastname, email, phone, address_1, address_2, state, local_gov, eligible, additional_info, license_no, expiry_date, dob, upload_lice, agree)
        VALUES 
        ('$firstname', '$lastname', '$email', '$phone', '$address_1', '$address_2', '$state', '$local_gov', '$eligible', '$additional_info', '$license_no', '$expiry_date', '$dob', '$upload_lice', '$agree')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        // ✅ Clear variables after success
        $msg = 'success';
        $comment = 'Driver successfully registered';

        //send email to admin
        $to = admin_email();

        $subject = "New Driver Vacancy Application - " . site_name();

        $body = "A new driver has applied for a vacancy. Here are the details:\n\n" .
                "Name: $firstname $lastname<br>" .
                "Email: $email<br>" .
                "Phone: $phone<br>" .
                "Address 1: $address_1<br>" .
                "Address 2: $address_2<br>" .
                "State: $state<br>" .
                "Local Government: $local_gov<br>" .
                "Eligible to work in Nigeria: $eligible<br>" .
                "Additional Info: $additional_info<br>" .
                "License No: $license_no<br>" .
                "Expiry Date: $expiry_date<br>" .
                "Date of Birth: $dob<br>" .
                "<a href='".hosturl()."/".$target_file."'>Download attachment</a><br>";

            // ✅ Modern PHPMailer usage
   $mail = new PHPMailer(true);

    // SMTP Settings
    // $mail->IsSMTP();    
    // $mail->Port = 465;
    // $mail->SMTPAuth = true;               
    // //sendgrid
    //  $mail->Username='aledoysolutions231@gmail.com';
    // $mail->Password = 'jhah axwo ykxl pbmx';
    // $mail->Host='smtp.gmail.com';
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
    // $mail->From = 'aledoysolutions231@gmail.com';
    // $mail->FromName = "RIDEWELL NG";

    // Email Headers
    $mail->setFrom('notification@ridewellng.com', 'RideWellNG');
    $mail->addAddress("$to");

    // Content
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = $subject;
    $mail->Body    = $body;

    // Optional Debugging
    // $mail->SMTPDebug = 2; 
    // $mail->Debugoutput = 'html';

    $mail->send();


        $firstname = $lastname = $email = $phone = $address_1 = $address_2 = 
        $state = $local_gov = $eligible = $additional_info = $license_no = 
        $expiry_date = $dob = $upload_lice = $agree = "";


        include('vacancy.php');
        exit;
    } else {
        $msg = 'error';
        $comment = 'Database error: ' . mysqli_error($conn);
        include('vacancy.php');
        exit;
    }
} else {
    header("Location: vacancy.php");
    exit;
}