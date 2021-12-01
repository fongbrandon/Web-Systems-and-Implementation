<?php
    session_start();
    if(isset($_POST['next'])){
        if(empty($_POST['title'])
        || empty($_POST['author'])
        || empty($_POST['year_pub'])
        || empty($_POST['num_of_copies'])) {
            $_SESSION['error_page2'] = "* fields cannot be left empty.";
            header("location:HSaddbook2.php");            
        }else {
            $_SESSION['title'] = $_POST['title'];
            $_SESSION['author'] = $_POST['author'];
            $_SESSION['year_pub'] = $_POST['year_pub'];
            $_SESSION['img'] = $_POST['img'];
            header("location:HSaddbook.php");
        } 
    }
/*
    session_start();
    if(isset($_POST['next'])){
        $_SESSION['title'] =$_POST['title'];  
        $_SESSION['author'] =$_POST['author'];
        $_SESSION['year_pub'] =$_POST['year_pub'];
        $_SESSION['img'] =$_POST['img'];
        header("Location: HSaddbook2.php");
        /*
        if(empty($_POST['title'])||(empty($_POST['author'])||
          (empty($_POST['year_pub'])||(empty($_POST['book_cover'])){

          }
    }else{
        echo "check";
    }
*/
?>
    