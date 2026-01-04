<?php
session_start();

if (isset($_POST['add'])) {
    $_SESSION['cart'][] = [
        'id' => $_POST['menu_id'],
        'qty' => $_POST['qty']
    ];
    header("Location: ../View/html/cart.php");
}
