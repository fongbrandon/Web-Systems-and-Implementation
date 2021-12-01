<?php
    session_start ();
    if(isset($_POST['next'])){
        $_SESSION['title'] =$_POST['title'];  
        $_SESSION['author'] =$_POST['author'];
        $_SESSION['year_pub'] =$_POST['year_pub'];
        $_SESSION['book_cover'] =$_POST['book_cover'];
        $_SESSION['isbn'] =$_POST['isbn'];  
        $_SESSION['callnum'] =$_POST['callnum'];
        $_SESSION['subarea'] =$_POST['subarea'];
        $_SESSION['copies'] =$_POST['copies'];
  }
?>
<html>
    <body>
        <form method="POST" action="SocialMediaAct.php">
            <h4>Here is what you have entered.</h4><br/>
            <p>Title: <?php echo $_SESSION['title']; ?> </p><br/>
            <p>Author: <?php echo $_SESSION['author']; ?></p><br/>
            <p>Year Published: <?php echo $_SESSION['year_pub'];?></p><br/>
            <p>Book Cover: <?php echo $_SESSION['book_cover'];?></p><br/> <br/>
            <p>ISBN: <?php echo $_SESSION['isbn'];?></p><br/>
            <p>Call Number: <?php echo $_SESSION['callnum'];?></p><br/>
            <p>Subject Area: <?php echo $_SESSION['subarea'];?></p><br/>
            <p>Number of Copies: <?php echo $_SESSION['copies'];?></p><br/>
    </form>>
    </body>
</html>