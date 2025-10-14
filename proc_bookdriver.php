<?php
include('inc/conn.php');
require_once('inc/fns.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/autoload.php';  


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname       = htmlspecialchars($_POST["firstname"]);
    $lastname        = htmlspecialchars($_POST["lastname"]);
    $email           = htmlspecialchars($_POST["email"]);
    $phone           = htmlspecialchars($_POST["phone"]);
    $service_type    = htmlspecialchars($_POST["service_type"]);
    $datetime        = htmlspecialchars($_POST["datetime"]);
    $duration        = htmlspecialchars($_POST["duration"]);
    $period          = htmlspecialchars($_POST["period"]);
    $location        = htmlspecialchars($_POST["location"]);
    $aboutus         = htmlspecialchars($_POST["aboutus"]);
    $agree           = htmlspecialchars($_POST["agree"] ?? "");
    $state           = htmlspecialchars($_POST["state"] ?? "");
    $additional_info = htmlspecialchars($_POST["additional_info"]);

    // ====== Validation ======
    if (empty($firstname) || empty($lastname) || empty($email) || empty($phone) ||
        empty($service_type) || empty($datetime) || empty($duration) || empty($period) || empty($location)|| empty($state)) {
        $msg = 'error';
        $comment = 'All fields are required';
        include('book-a-driver.php');
        exit;
    }

    if (empty($agree)) {
        $msg = 'error';
        $comment = 'Click the checkbox to agree with the terms and conditions';
        include('book-a-driver.php');
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $msg = 'error';
        $comment = 'Please enter a valid email';
        include('book-a-driver.php');
        exit;
    }

    if (strlen($phone) != 11 || !ctype_digit($phone)) {
        $msg = 'error';
        $comment = 'Please enter a valid GSM number';
        include('book-a-driver.php');
        exit;
    }

    // ====== Insert into database ======
    $query = "INSERT INTO bookings 
        (firstname, lastname, email, phone, service_type, datetime, duration, `period`, location, aboutus, state, additional_info) 
        VALUES 
        ('$firstname', '$lastname', '$email', '$phone', '$service_type', '$datetime', '$duration', '$period', '$location', '$aboutus', '$state', '$additional_info')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        // ✅ Clear variables after success
        $msg = 'success';
        $comment = 'Message Sent';

        //send email to admin
        $to = admin_email();

        $subject = "New Request for a Driver  - " . site_name();

        $body = "A user has booked a Driver. Here are the details:<br>" .
                "Firstname: $firstname $lastname<br>" .
                "Email: $email<br>" .
                "Phone Number: $phone<br>" .
                "Driver type: $service_type<br>" .
                "Date and Time: $datetime<br>" .
                "Duration: $duration<br>" .
                "Period: $period<br>" .
                "Location: $location<br>" .
                "How did you hear About Us: $aboutus<br>" .
                "State: $state<br>" .
                "Additional Information: $additional_info<br>"; 

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

    if ($result) {
        // Get last inserted booking id
        $booking_id = mysqli_insert_id($conn);
        // Redirect to summary page
        header("Location: driver-summary.php?id=" . $booking_id);
        exit;
    } else {
        $msg = 'error';
        $comment = 'Database error: ' . mysqli_error($conn);
        include('book-a-driver.php');
        exit;
    }
} else {
    header("Location: book-a-driver.php");
    exit;
}

}
// if (isset($_POST['submit'])) {

// }