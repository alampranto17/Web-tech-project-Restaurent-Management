<?php
// session_start();
// if (!isset($_SESSION['emp_id'])) {
//     header("Location: login.php");
//     exit;
// }

include "../../Controller/php/MenuController.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>

<div class="topbar">
    <h2>Food Menu</h2>
    <span>Welcome, <?php echo $_SESSION['emp_name']; ?></span>
</div>

<div class="nav-buttons">
    <a href="dashboard.php">Dashboard</a>
    <a href="cart.php">Cart</a>
      <a href="">Logout</a>
</div>


<form method="post" action="../../Controller/php/CartController.php">

<table>
    <tr>
        <th>Select</th>
        <th>ID</th>
        <th>Food Name</th>
        <th>Category</th>
        <th>Price (BDT)</th>
        <th>Available</th>
        <th>Qty</th>
    </tr>

    <?php if (!empty($menus)) { ?>
        <?php foreach ($menus as $food) { ?>
        <tr>
     
            <td>
                <input type="checkbox" name="menu_id[]" value="<?php echo $food['menu_id']; ?>">
            </td>

            <td><?php echo $food['menu_id']; ?></td>
            <td><?php echo $food['item_name']; ?></td>
            <td><?php echo $food['category']; ?></td>
            <td><?php echo $food['price']; ?></td>
            <td><?php echo $food['quantity']; ?></td>

          
            <td>
                <input type="number"
                       name="qty[<?php echo $food['menu_id']; ?>]"
                       value="1"
                       min="1"
                       max="<?php echo $food['quantity']; ?>">
            </td>
        </tr>
        <?php } ?>
    <?php } else { ?>
        <tr>
            <td colspan="7">No menu items found</td>
        </tr>
    <?php } ?>
</table>

<br>
<button type="submit" name="add_to_cart"
        style="display:block; margin:20px auto; padding:10px 25px;">Add to Cart</button>


</form>

</body>
</html>
