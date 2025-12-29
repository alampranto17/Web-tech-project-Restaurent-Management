<?php
session_start();
require_once("../../Model/MenuModel.php");
$menu = $model->getMenu();
?>

<h2>Menu Items</h2>

<table border="1">
<tr><th>Item</th><th>Price</th><th>Action</th></tr>

<?php while($m = $menu->fetch_assoc()) { ?>
<tr>
  <td><?= $m['name'] ?></td>
  <td><?= $m['price'] ?></td>
  <td>
    <form method="post" action="../../Controller/CartController.php">
      <input type="hidden" name="menu_id" value="<?= $m['id'] ?>">
      <input type="number" name="qty" value="1">
      <button name="add">Add</button>
    </form>
  </td>
</tr>
<?php } ?>
</table>
