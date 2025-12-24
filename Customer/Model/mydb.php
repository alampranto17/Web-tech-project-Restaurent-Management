<?php

function connection()
{
    $db_host="localhost";
    $db_user="root";
    $db_pass="";
    $db_name="resturent";

    $connection = new mysqli($db_host,$db_user,$db_pass,$db_name);
    if($connection->connect_error){

    }
    return $connection ;
}

function signup(){

}

?>