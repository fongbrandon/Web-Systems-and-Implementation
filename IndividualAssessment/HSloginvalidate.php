<?php

    $myusername = "HSadmin";
    $mypass ="HSpages123";

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $rem = $_POST['remember'];
        if($username == $myusername && $password == $mypass){
            if(isset($_POST['remember'])){
                setcookie('username',$username, time()+(60*60*7));
                setcookie('password',$password, time()+(60*60*7));
                    
            }
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header('location:HSaddbook.php');
            
        }else{
            echo "username or password is invalid. <br> click here <a href = 'HSlogin.php'> to try again</a>";

        }
    }else{
        header("location:HSlogin.php");
    }
?>