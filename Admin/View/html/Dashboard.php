<?php
session_start();

$isLoggedIn= $_SESSION["isLogin"]?? false;
if(!$isLoggedIn){
    header("Location: login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is a dashboard</h1>
    <h2> welcome <?php echo $_SESSION['user_email']?></h2>
    <a href="../../controller/php/logout.php"><button type="button">Logout</button></a>
</body>
</html>