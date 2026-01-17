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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Management</title>
    <link rel="shortcut icon" href="../Assest/ODUJEJ0.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/index.css">
</head>
<body>
    <header>
        <Section class="Nav">
            <div class="left-nav">
                <img src="../Assest/ODUJEJ0.jpg" alt="My Restaurent">
                <h1>
                    ECO FOOD
                </h1>
            </div>
            <div class="right-nav">
                <ul>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
            <hr>
        </Section>
    </header>

    <main>
        <section class="hero">
            <div class="hero-content">
                <h1 class="hero-title">Welcome to EcoFood</h1>
                <p class="hero-subtitle">
                    Experience the finest organic cuisine with fresh, locally-sourced ingredients
                </p>
                <div class="hero-buttons">
                    <a href="menu.php" class="btn btn-primary">View Menu</a>
                    <a href="reserve_table.php" class="btn btn-secondary">Make Reservation</a>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer-section">
            <h3>Contact Us</h3>
            <p>Bashundhara, Dhaka-1200</p>
            <p>01xxxxxxx</p>
            <p>aabc@gmail.com</p>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 ECO Food. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
