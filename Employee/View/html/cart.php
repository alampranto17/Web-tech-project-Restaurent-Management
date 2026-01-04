<?php session_start(); ?>

<h2>Cart</h2>

<form method="post" action="../../Controller/php/OrderController.php">
<table border="1">
<tr><th>Menu ID</th><th>Qty</th></tr>

<?php foreach($_SESSION['cart'] as $c) { ?>
<tr>
  <td><?= $c['id'] ?></td>
  <td><?= $c['qty'] ?></td>
</tr>
<?php } ?>
</table>

<input type="number" name="total" placeholder="Total Amount">
<button name="place_order">Place Order</button>
</form>
