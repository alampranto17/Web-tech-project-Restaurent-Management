<?php
session_start();

$isLoggedIn= $_SESSION["isLogin"]?? false;
if(!$isLoggedIn){
    header("Location: ../../../Index.php");
    }
    
include "../../Model/mydb.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/menu.css">
</head>
<body>

<div class="menu-header">
    <h1>Food Menu</h1>
    <span class="user-info">Welcome, <?php echo htmlspecialchars($_SESSION['user_email'] ?? 'Customer'); ?></span>
</div>

<div class="nav-buttons">
    <a href="dashboard.php">Dashboard</a>
    <a href="reserve_table.php">Make Reservation</a>
    <a href="logout.php">Logout</a>
</div>

<!-- SEARCH  -->
<div style="text-align:center; margin:15px 0;">
    <input type="text"
           id="searchInput"
           placeholder="Search food"
           onkeyup="searchFood()"
           style="padding:6px; width:250px;">
</div>

<div class="menu-container">
    <table>
        <thead>
            <tr>
                <th>Food ID</th>
                <th>Food Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Available Qty</th>
            </tr>
        </thead>

        <!-- AJAX -->
        <tbody id="menuBody">
        <?php
        $foods = getAllFoods();

        if (is_array($foods) && count($foods) > 0) {
            foreach ($foods as $row) {
        ?>
            <tr>
                <td><?php echo htmlspecialchars($row['menu_id']); ?></td>
                <td><?php echo htmlspecialchars($row['item_name']); ?></td>
                <td><?php echo htmlspecialchars($row['category']); ?></td>
                <td><?php echo htmlspecialchars($row['price']); ?></td>
                <td><?php echo htmlspecialchars($row['quantity']); ?></td>
            </tr>
        <?php
            }
        } else {
            echo '<tr><td colspan="5" style="padding:20px; text-align:center;">No menu items available</td></tr>';
        }
        ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="../../Controller/js/MenuSearch.js"></script>

</body>
</html>
