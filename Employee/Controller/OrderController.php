<?php
session_start();
require_once("../Model/OrderModel.php");

if (isset($_POST['place_order'])) {

    $order_id = $model->create($_SESSION['emp_id'], $_POST['total']);

    foreach ($_SESSION['cart'] as $item) {
        $model->addItem($order_id, $item['id'], $item['qty']);
    }

    unset($_SESSION['cart']);
    header("Location: ../View/html/invoice.php?id=".$order_id);
}
