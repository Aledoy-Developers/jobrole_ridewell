<?php
include('inc/conn.php');
require_once('inc/fns.php');

if (!isset($_GET['id'])) {
    header("Location: book-a-driver.php");
    exit;
}

$id = intval($_GET['id']);
$query = "SELECT * FROM bookings WHERE id = $id LIMIT 1";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 0) {
    echo "Booking not found.";
    exit;
}

$booking = mysqli_fetch_assoc($result);

// Example price list
$price = get_pricing($booking['service_type'], $booking['duration'], $booking['period'], $booking['state']);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Booking Summary</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <style>
    body {
        background: #f8f9fa;
    }

    .summary-card {
        max-width: 600px;
        margin: 50px auto;
        border-radius: 15px;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
    }

    .summary-card h2 {
        font-weight: bold;
    }

    .summary-item p {
        margin: 8px 0;
        font-size: 1rem;
    }

    .price {
        font-size: 1.5rem;
        font-weight: bold;
        color: #08399f;
    }

    .btn-custom {
        min-width: 140px;
        background-color: #08399f;
    }

    .btn-custom5 {
        min-width: 140px;
        background-color: gray;
    }
    </style>
</head>

<body>
    <div class="container text-center">
        <div class="card summary-card p-4">
            <h2 class="mb-4">Booking Summary</h2>
            <div class="summary-item text-start">
                <p><strong>Name:</strong> <?= $booking['firstname'] . " " . $booking['lastname'] ?></p>
                <p><strong>Email:</strong> <?= $booking['email'] ?></p>
                <p><strong>Phone:</strong> <?= $booking['phone'] ?></p>
                <p><strong>Service Type:</strong> <?= ucfirst(str_replace('-', ' ', $booking['service_type'])) ?></p>
                <p><strong>Date & Time:</strong> <?= $booking['datetime'] ?></p>
                <p><strong>Duration:</strong> <?= $booking['duration'] . " " . $booking['period'] ?></p>
                <p><strong>Pick-up Location:</strong> <?= $booking['location'] ?></p>
                <p><strong>State:</strong> <?= $booking['state'] ?></p>
                <p><strong>Heard About Us:</strong> <?= $booking['aboutus'] ?></p>
                <p><strong>Additional Info:</strong> <?= $booking['additional_info'] ?></p>
            </div>
            <hr>
            <h4 class="price">Price: ₦<?= number_format($price) ?></h4>

            <div class="mt-4 d-flex justify-content-center gap-3">
                <a href="book-a-driver.php" class="btn btn-secondary btn-custom5">← Go Back</a>
                <button onclick="payWithPaystack()" class="btn text-white btn-custom"> Pay Now</button>
            </div>
        </div>
    </div>

    <script src="https://js.paystack.co/v1/inline.js"></script>


    <script>
    function payWithPaystack() {
        let handler = PaystackPop.setup({
            key: 'pk_test_59e6e667d3990cda6c6a6849eb0c8c303cc333fd', // Aledoy Test your public key
            // key: 'pk_test_59e6e667d3990cda6c6a6849eb0c8c303cc333fd', //Live Key
            email: '<?= $booking['email'] ?>',
            amount: <?= $price ?> * 100, // Amount in kobo (₦5000)
            currency: 'NGN',
            ref: 'REF' + Math.floor((Math.random() * 1000000000) + 1), // Unique reference
            callback: function(response) {
                alert('Payment complete! Reference: ' + response.reference);
                location.href = 'payment-success.php?ref=' + response.reference +
                    '&id=<?= $booking['id'] ?>';
                // You can verify the payment on your server here
            },
            onClose: function() {
                alert('Transaction was not completed, window closed.');
            }
        });
        handler.openIframe(); // Open Paystack payment modal
    }
    </script>


</body>

</html>