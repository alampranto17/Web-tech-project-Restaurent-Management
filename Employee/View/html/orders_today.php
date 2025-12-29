<?php
require_once("../../Model/OrderModel.php");
$orders = $model->todayOrders();
?>

<h2>Today’s Orders</h2>

<table border="1">
<tr><th>Order ID</th><th>Total</th><th>Time</th></tr>

<?php while($o = $orders->fetch_assoc()) { ?>
<tr>
  <td><?= $o['id'] ?></td>
  <td><?= $o['total'] ?></td>
  <td><?= $o['created_at'] ?></td>
</tr>
<?php } ?>
</table>
