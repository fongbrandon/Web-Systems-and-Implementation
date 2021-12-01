<?php
    include_once 'DBConnect.php';
    $records = mysqli_query($conn,"SELECT * FROM user"); // fetch data from database
    while($data = mysqli_fetch_array($records))
    {   
        echo nl2br("\nUser Name encrypt\n");
        echo $data['UserName'];
        echo nl2br("\nPassword encrypt\n");
        echo $data['Password'];
        echo nl2br("\nUser decrypt\n");
        echo $data['userencrypt'];
        echo nl2br("\nPassword decrypt\n");
        echo $data['passencrypt'];
        
    }
    mysqli_close($conn); // Close connection
    /*
    $sql="SELECT UserName from user";
    echo "UserName decrypt ",$sql;
    $sql="SELECT userencrypt from user";
    echo "UserName encrpt ",$sql;
    $sql="SELECT Password from user";
    echo "Password decrypt ",$sql;
    $sql="SELECT passencrypt from user";
    echo "Password encrypt ",$sql;
    */
?>