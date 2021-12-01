<?php
    session_start();
    $_SESSION['email']=$_POST["email"];
    $myemail = "yourname@utech.edu.jm";
    $mypass ="CIT4034";

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        if($email == $myemail && $password == $mypass){
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('location:registrationform.php');
            
        }else{
            echo "email or password is invalid. <br> click here <a href = 'Login_Form.php'> to try again</a>";

        }
    }else{
        header("location:Login_Form.php");
    }
?>