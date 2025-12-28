<?php
include "../../Model/mydb.php";
session_start();
$email=$_POST["email"];
$password=$_POST['password'];

$errors=[];
$values=[];

if(!$email){
    $errors['email']="Email field is required";
}

if(!$password){
    $errors['password']="Password field is required";
}

if(count($errors)>0){
    if($errors['email']){
        $_SESSION["emailErr"]=$errors['email'];
    }
    if($errors["password"]){
        $_SESSION["passwordErr"]=$errors["password"];
    }

    header("Location: ../../View/html/login.php");
    exit();

}
else {
    $users = signup();
    $loginSuccess = false;
    
    if(!empty($users)){
        foreach ($users as $user) {
            if($user['email'] == $email){
                if($user['password'] == $password){
                    $_SESSION["isLogIn"] = true;
                    $_SESSION["user_email"] = $email;
                    $loginSuccess = true;
                    header("Location: ../../View/html/Dashboard.php");
                    exit();
                }
            }
        }
    }
    
    if(!$loginSuccess){
        $_SESSION["loginErr"] = "Invalid email or password";
        header("Location: ../../View/html/login.php");
        exit();
    }
}






?>