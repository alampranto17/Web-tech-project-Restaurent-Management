<?php
session_start();
include "../../Model/mydb.php";
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$role = $_POST["role"];

$hasError = false;

if(empty($name) || empty($email) || empty($password) || empty($role)){

    $hasError = true;
}

if($hasError){
    $_SESSION["Message"]="Fail to Add User";
    echo " Error";
    header("Location: ../../View/html/AddNewUser.php");
}
else {
    $result = signup($name,$email,$password,$role);
    if($result === true){
        $_SESSION["Message"]="Successfully Add User";
        header("Location: ../../View/html/Dashboard.php");
    } else {
        $_SESSION["Message"]="Failed to Add User";
        echo "<script>alert('Failed to add user. Please try again.'); window.location.href='../../View/html/AddNewUser.php';</script>";
    }
}

?>