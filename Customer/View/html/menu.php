<?php
//session_start();
//if (!isset($_SESSION['cust_id'])) {
    //header("Location: login.php");
//}

require_once("../../Model/MenuModel.php");
$model = new MenuModel();
$menu = $model->getMenu();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Food Menu</title>

    <!-- Customer CSS -->
    <link rel="stylesheet" href="../CSS/index.css">

    <!-- Optional: reuse employee style table look -->
    <link rel="stylesheet" href="../CSS/style.css">

    <link rel="shortcut icon" href="../Assests/logo.png" type="image/x-icon">
</head>

<body>

<!-- ===== NAVBAR ===== -->
<header>
    <section class="Nav">
        <div class="left-nav">
            <img src="../Assests/logo.png" alt="Logo">
            <h1>ECO Food</h1>
        </div>

        <div class="right-nav">
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="reserve_table.php">Reserve Table</a></li>
                <li><a href="../../Controller/CustomerController.php?logout=1">Logout</a></li>
            </ul>
        </div>
    </section>
</header>

<!-- ===== MENU CONTENT ===== -->
<main style="padding:40px;">

    <h2 style="text-align:center; margin-bottom:20px;">
        Our Menu
    </h2>

    <table>
        <tr>
            <th>Food Name</th>
            <th>Category</th>
            <th>Price (BDT)</th>
        </tr>

        <?php while ($row = $menu->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['category']; ?></td>
            <td><?php echo $row['price']; ?></td>
        </tr>
        <?php } ?>
    </table>

</main>

<!-- ===== FOOTER ===== -->
<footer class="footer">
    <div class="footer-bottom">
        <p>&copy; 2025 ECO Food. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
