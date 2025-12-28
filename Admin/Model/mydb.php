<?php
function connection()
{
    $db_host="localhost";
    $db_user="root";
    $db_pass="";
    $db_name="restaurant_management";

    $connection = new mysqli($db_host,$db_user,$db_pass,$db_name);
    if($connection->connect_error){
        $_SESSION["connnectionError"]=$connection->connect_error;

    }
    else{
        $_SESSION["connectionSuccess"]="Successful";
    }
    return $connection ;
}

function signup(){
    $con=connection();
    $sql="SELECT * FROM users";
    $users=[];
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $users[] = $row;
        }
    }
    mysqli_close($con);
    return $users;
}

?>