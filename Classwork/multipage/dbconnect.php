<?php
    $dbserver ="localhost";
    //your username
    $user = "root";
    //your password
    $pass = "";


    try{
        //Connect to your database
        $conn = mysqli_connect($dbserver,$user,$pass);
        echo"You are connected";
    }catch(mysqli_sql_exception $e)
    {
        //if you cannot connect an error message will be displayed
        die('Could not Connect My Sql:');
        echo "You are not connected".$e;

    }

    mysqli_close($conn);
?>