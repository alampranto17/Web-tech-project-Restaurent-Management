<?php
// session_start();

// $isLoggedIn= $_SESSION["isLogin"]?? false;
// if(!$isLoggedIn){
//     header("Location: ../../../Index.php");
//     }
    
include "../../Model/mydb.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reserve Table</title>

    <!-- Existing Customer CSS -->
    <link rel="stylesheet" href="../CSS/index.css">

    <!-- Reservation Page CSS -->
    <link rel="stylesheet" href="../CSS/reservation.css">

    <link rel="shortcut icon" href="../Assests/ODUJEJ0.jpg" type="image/x-icon">
</head>
<body>

<!-- ===== NAVBAR ===== -->
<header>
    <section class="Nav">
        <div class="left-nav">
            <img src="../Assest/ODUJEJ0.jpg" alt="Logo">
            <h1>ECO Food</h1>
        </div>

        <div class="right-nav">
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="menu.php">Menu</a></li>
            </ul>
        </div>
    </section>
</header>

<!-- ===== RESERVATION FORM ===== -->
<main class="reservation-container">

    <h2>Table Reservation</h2>

    <form method="post" action="../../Controller/ReservationController.php">

        <div class="form-group">
            <label>Reservation Date</label>
            <input type="date" name="date" required>
        </div>

        <div class="form-group">
            <label>Reservation Time</label>
            <input type="time" name="time" required>
        </div>

        <div class="form-group">
            <label>Number of Persons</label>
            <input type="number" name="persons" min="1" max="20" required>
        </div>

        <div class="form-group">
            <label>Advance Payment (BDT)</label>
            <input type="number" name="payment" value="200" readonly>
        </div>

        <button type="submit" name="reserve" class="btn-submit">
            Confirm Reservation
        </button>

    </form>

</main>

<!-- ===== FOOTER ===== -->
<footer class="footer">
    <div class="footer-bottom">
        <p>&copy; 2025 ECO Food. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
