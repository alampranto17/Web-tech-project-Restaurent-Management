<?php

require_once "../Model/mydb.php";

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['reserve'])){
    $date = trim($_POST['date'] ?? '');
    $time = trim($_POST['time'] ?? '');
    $persons = intval($_POST['persons'] ?? 0);
    $payment = intval($_POST['payment'] ?? 0);

    // Server-side validation
    $dateValid = DateTime::createFromFormat('Y-m-d', $date);
    $timeValid = DateTime::createFromFormat('H:i', $time);

    if(!$date || !$time || !$dateValid || $dateValid->format('Y-m-d') !== $date || !$timeValid || $persons <= 0){
        echo "<script>alert('Error: Invalid input. Please check your entries.'); window.history.back();</script>";
        exit();
    }

    if($payment < 0){
        echo "<script>alert('Error: Invalid payment amount.'); window.history.back();</script>";
        exit();
    }

    if(addReservation($date, $time, $persons, $payment)){
        echo "<script>alert('Reservation confirmed successfully!'); 
        window.location.href='../View/html/dashboard.php';</script>";
    } else {
        echo "<script>alert('Error: Could not save reservation. Please try again.'); 
        window.history.back();</script>";
    }
} else {
    echo "Invalid request!";
}

?>
