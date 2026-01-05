<?php
session_start();
include "../../Model/mydb.php";

/* Initialize cart */
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

/* ADD TO CART */
if (isset($_POST['add_to_cart'])) {

    if (!isset($_POST['menu_id'])) {
        header("Location: ../../View/html/menu.php");
        exit;
    }

    foreach ($_POST['menu_id'] as $menu_id) {

        $qty = $_POST['qty'][$menu_id];

        // get food info from DB
        $food = getAllFoods($menu_id);

        if (!$food) {
            continue;
        }

        // add or update cart
        if (isset($_SESSION['cart'][$menu_id])) {
            $_SESSION['cart'][$menu_id]['qty'] += $qty;
        } else {
            $_SESSION['cart'][$menu_id] = [
                'menu_id' => $food['menu_id'],
                'name'    => $food['item_name'],
                'price'   => $food['price'],
                'qty'     => $qty
            ];
        }
    }

    // redirect to cart page
    header("Location: ../../View/html/cart.php");
    exit;
}
