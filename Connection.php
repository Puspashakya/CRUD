<?php
    
    $con = mysqli_connect('localhost','root','','user_db_online-store');

    if(mysqli_connect_error()) {
        echo "Cannot connect to the database";
        exit();
    }
    else 
    {
        //echo "connecteed";
    }
    

?>