<?php

function connection()
{
     $db_host="localhost";
    $db_user="root";
    $db_pass="";
    $db_name="restaurant_management";

    $connection = new mysqli($db_host,$db_user,$db_pass,$db_name);
    if($connection->connect_error){
        echo "Connection Error: " . $connection->connect_error;
    }
    return $connection ;
}

function getAllFoods(){
    $con = connection();
    $sql = "SELECT * FROM menu";
    $foods = [];
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $foods[] = $row;
        }
    }
    mysqli_close($con);
    return $foods;
}

?>