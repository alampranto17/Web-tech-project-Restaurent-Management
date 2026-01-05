<?php
session_start();
$cart = $_SESSION['cart'] ?? [];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>

<div class="topbar">
    <h2>Cart</h2>
    <span>Welcome, <?php echo $_SESSION['emp_name'] ?? 'Employee'; ?></span>
</div>

<div class="nav-buttons">
    <a href="dashboard.php">Dashboard</a>
    <a href="menu.php">Menu</a>
      <a href="">Logout</a>
</div>

<h2 style="text-align:center;">Cart</h2>

<?php if (empty($cart)) { ?>
    <p style="text-align:center;">Cart is empty</p>
<?php } else { ?>

<table>
    <tr>
        <th>Food</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
        <th>Action</th>
    </tr>

    <?php
    $grand = 0;
    foreach ($cart as $item) {
        $total = $item['price'] * $item['qty'];
        $grand += $total;
    ?>
    <tr>
        <td><?php echo $item['item_name']; ?></td>
        <td><?php echo $item['price']; ?></td>
        <td><?php echo $item['qty']; ?></td>
        <td><?php echo $total; ?></td>
        <td>
            <a href="../../Controller/php/RemoveCartItem.php?id=<?php echo $item['menu_id']; ?>">
                Delete
            </a>
        </td>
    </tr>
    <?php } ?>

    <tr>
        <td colspan="3"><b>Grand Total</b></td>
        <td colspan="2"><b><?php echo $grand; ?></b></td>
    </tr>
</table>
<br>


<button type="submit"
        name="update_cart"
        style="display:block; margin:15px auto; padding:8px 20px;">
    Edit Cart
</button>


<br>
<form method="post" action="../../Controller/php/OrderController.php">
    <button type="submit"
            style="display:block; margin:20px auto; padding:10px 25px;">
        Place Order
    </button>
</form>

<?php } ?>

</body>
</html>
