<?php
    session_start();
    if(isset($_SESSION['user_login_id']) =="") {
    header("Location: login.php");
    }
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $mobile;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;

?>
