<?php

    $myemail = "srebraham@hotmail.com";
    $mypass ="bless";

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $rem = $_POST['remember'];
        if($email == $myemail && $password == $mypass){
            if(isset($_POST['remember'])){
                setcookie('email',$email, time()+(60*60*7));
                setcookie('password',$password, time()+(60*60*7));
                    
            }
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('location:Welcome.php');
            
        }else{
            echo "email or password is invalid. <br> click here <a href = 'login.php'> to try again</a>";

        }
    }else{
        header("location:login.php");
    }
?>