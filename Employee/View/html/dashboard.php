
<?php
//session_start();
//if (!isset($_SESSION['emp_id'])) header("Location: login.php");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../CSS/style.css">
</head>
<body>

<div class="topbar">
  <div class="topbar-left">
      <img src="../Assests/ODUJEJ0.jpg" alt="Logo">
      <h2>Dashboard</h2>
  </div>

  <span>Welcome, <?php echo $_SESSION['emp_name']; ?></span>
</div>

<div class="nav-buttons">
  <a href="menu.php">Menu</a>
  <a href="cart.php">Cart</a>
  <a href="orders_today.php">Today’s Orders</a>
  <a href="">Logout</a>
</div>

<div class="hero">
  <img src="../Assests/employee.png" width="300">
</div>

</body>
</html>
