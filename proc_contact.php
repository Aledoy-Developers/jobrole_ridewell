<?php
include('inc/conn.php');
require_once('inc/fns.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/autoload.php';  



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullname       = htmlspecialchars($_POST["fullname"]);
    $email           = htmlspecialchars($_POST["email"]);
    $phone           = htmlspecialchars($_POST["phone"]);
    $message           = htmlspecialchars($_POST["message"]);

    // ---------- Validation ----------
    if (empty($fullname) || empty($email) || empty($phone) || empty($message)) {
        $msg = 'error';
        $comment = 'All required fields must be filled';
        include('contact.php');
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $msg = 'error';
        $comment = 'Please enter a valid email';
        include('contact.php');
        exit;
    }

    if (strlen($phone) != 11 || !ctype_digit($phone)) {
        $msg = 'error';
        $comment = 'Please enter a valid GSM number';
        include('contact.php');
        exit;
    }

    // ---------- Insert ----------
    $query = "INSERT INTO contact_form 
        (fullname, email, phone, message) 
        VALUES 
        ('$fullname', '$email', '$phone', '$message')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        // ✅ Clear variables after success
        $msg = 'success';
        $comment = 'Message Sent';

        //send email to admin
        $to = admin_email();

        $subject = "New Contact Message - " . site_name();

        $body = "A user has Contacted you. Here are the details:\n\n" .
                "Name: $fullname<br>" .
                "Email: $email<br>" .
                "Phone: $phone<br>" .
                "Message: $message<br>"; 

            // ✅ Modern PHPMailer usage
    $mail = new PHPMailer(true);

    // SMTP Settings
    $mail->IsSMTP();    
    $mail->Port = 465;
    $mail->SMTPAuth = true;               
    //sendgrid
     $mail->Username='aledoysolutions231@gmail.com';
    $mail->Password = 'jhah axwo ykxl pbmx';  //yahoo app password for noreply email 
    $mail->Host='smtp.gmail.com';
    $mail->SMTPSecure = 'ssl'; 
    $mail->From = 'aledoysolutions231@gmail.com';
    $mail->FromName = "RIDEWELL NG";

    // Email Headers
    $mail->setFrom('aledoysolutions231@gmail.com', 'RideWell NG');
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


        $firstname = $email = $phone = $message = "";


        include('contact.php');
        exit;
    } else {
        $msg = 'error';
        $comment = 'Database error: ' . mysqli_error($conn);
        include('contact.php');
        exit;
    }
} else {
    header("Location: contact.php");
    exit;
}