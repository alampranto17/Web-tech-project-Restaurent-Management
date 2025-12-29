<?php
session_start();
require_once("../Model/EmployeeModel.php");



if (isset($_POST['login'])) {
    $res = $model->login($_POST['email'], $_POST['password']);

    if ($res->num_rows > 0) {
        $emp = $res->fetch_assoc();
        $_SESSION['emp_id'] = $emp['id'];
        $_SESSION['emp_name'] = $emp['name'];
        header("Location: ../View/html/dashboard.php");
    } else {
        echo "Invalid Login";
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: ../View/html/login.php");
}
