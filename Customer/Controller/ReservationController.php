<?php

include "../Model/mydb.php";

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['reserve'])){
    
    $date = $_POST['date'] ?? '';
    $time = $_POST['time'] ?? '';
    $persons = $_POST['persons'] ?? '';
    $payment = $_POST['payment'] ?? '';
    
    // Validate inputs
    if(empty($date) || empty($time) || empty($persons) || empty($payment)){
        echo "Error: All fields are required!";
        exit();
    }
    
    // Insert reservation into database
    if(addReservation($date, $time, $persons, $payment)){
        echo "<script>alert('Reservation confirmed successfully!'); window.location.href='../View/html/dashboard.php';</script>";
    } else {
        echo "<script>alert('Error: Could not save reservation. Please try again.'); window.history.back();</script>";
    }
} else {
    echo "Invalid request!";
}

?>
