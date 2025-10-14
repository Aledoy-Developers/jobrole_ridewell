<?php


function drivers_list(){

    global $conn;
    $query = "SELECT * FROM driver_price ORDER BY type ASC";
    $result = mysqli_query($conn, $query);
    $drivers = '';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . htmlspecialchars($row['type']) . '">' . htmlspecialchars($row['type']) . '</option>';
    }

}


function get_pricing($service_type, $duration, $period, $location) {
    global $conn;
     $query = "SELECT price_per_hour, price_per_day, price_outside_lagos FROM driver_price WHERE type = '$service_type' LIMIT 1";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 0) {
        return 0; // Service type not found
    }
    $row = mysqli_fetch_assoc($result);
    if($location != 'Lagos'){
        return $row['price_outside_lagos'];
    }
    else
    {
        if ($period == 'hour') {
            return $row['price_per_hour'] * intval($duration);
        } elseif ($period == 'day') {
            return $row['price_per_day'] * intval($duration);
        }
    }
    return 0; // Invalid period
}

function admin_email() {
    return 'info@ridewellng.com';
    // return 'emmanueligbinazaka3@gmail.com';
}

function site_name() {
    return 'Ridewell NG';
}

function hosturl() {
    if($_SERVER['HTTP_HOST'] == 'ridewellng.com'){
        return $_SERVER['HTTP_HOST'];
    }
    else{
        return $_SERVER['HTTP_HOST'].'/ridewell';
    }
    
}

?>