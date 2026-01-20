<?php
    session_start();
    $_SESSION["isLogin"]=false;
    session_unset();
    session_destroy();
    header("Location: ../../../Index.php");
?>