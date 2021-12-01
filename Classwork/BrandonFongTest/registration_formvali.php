<?php
    session_start();
    if(isset($_POST['submit'])){
        $_SESSION['id']=$_POST["id"];
        $_SESSION['fn']=$_POST["fn"];
        $_SESSION['ln']=$_POST["ln"];
        $_SESSION['gender']=$_POST["gender"];
        $_SESSION['email']=$_POST["email"];
        $_SESSION['fav_language']=$_POST["fav_language"];
        $_SESSION['year']=$_POST['year'];
        $_SESSION['cell']=$_POST['cell'];
    }


    $file = fopen("demographics.txt", "a");
    fwrite($file,$_SESSION['id']);
    fwrite($file,$_SESSION['fn']);
    fwrite($file,$_SESSION['ln']);
    fwrite($file,$_SESSION['Gender']);
    fwrite($file,$_SESSION['year']);
    session_decode(fputs($file,  4096) );
    fclose($file);
    $file = fopen("contact.txt", "a");
    fwrite($file,$_SESSION['ID']);
    fwrite($file,$_SESSION['cell']);
    fwrite($file,$_SESSION['email']);
    session_decode(fputs($file,  4096) );
    fclose($file);
    $file = fopen("study.txt", "a");
    fwrite($file,$_SESSION['ID']);
    fwrite($file,$_SESSION['fav_language']);
    session_decode(fputs($file,  4096) );
    fclose($file);
?>