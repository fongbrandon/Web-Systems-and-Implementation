<?php
    session_start ();
    if(isset($_POST['next'])){
        /*$_SESSION['title'] = $_POST['title'];
        $_SESSION['author'] = $_POST['author'];
        $_SESSION['year_pub'] = $_POST['year_pub'];
        $_SESSION['book_cover'] = $_POST['book_cover'];*/
        $_SESSION['ISBN'] =$_POST['ISBN'];  
        $_SESSION['callnum'] =$_POST['callnum'];
        $_SESSION['subarea'] =$_POST['subarea'];
        $_SESSION['copies'] =$_POST['copies'];
        echo "check1";
    }
    echo "check2";
?>

<html>
    <head>
        <title>Display</title>
    </head>
    <body>
    <?php
        $myfile = fopen("HSbookdata.txt", "w") or die("Unable to open file!");
        $txt = $_SESSION['title'];
        fwrite($myfile, $txt);
        $txt = $_SESSION['author'];;
        fwrite($myfile, $txt);
        $txt = $_SESSION['year_pub'];
        fwrite($myfile, $txt);
        $txt = $_SESSION['book_cover'];
        fwrite($myfile, $txt);
        $txt = $_SESSION['ISBN'];
        fwrite($myfile, $txt);
        $txt = $_SESSION['callnum'];;
        fwrite($myfile, $txt);
        $txt = $_SESSION['subarea'];
        fwrite($myfile, $txt);
        $txt = $_SESSION['copies'];
        fwrite($myfile, $txt);
        $txt = $_SESSION['book_cover'];
        fwrite($myfile, $txt);
        fclose($myfile);
    ?>
        <form method="POST" action="HSbookdata.txt">
            <table align="center">
                <tr><td><h4>Here is what you have entered.</h4><br/></td></tr>
                <tr><td><p>Title: <?php echo $_SESSION['title']; ?> </p></td></tr>
                <tr><td><p>Author: <?php echo $_SESSION['author']; ?></p></td></tr>
                <tr><td><p>Year Published: <?php echo $_SESSION['year_pub'];?></p></td></tr>
                <tr><td><p>Image: <?php echo $_SESSION['book_cover'];?></p></td></tr>
                <tr><td><p>ISBN: <?php echo $_SESSION['ISBN'];?></p></td></tr>
                <tr><td><p>Call Number: <?php echo $_SESSION['callnum']; ?> </p></td></tr>
                <tr><td><p>Subject Area: <?php echo $_SESSION['subarea']; ?></p></td></tr>
                <tr><td><p>Number of Copies: <?php echo $_SESSION['copies'];?></p></td></tr>
                <tr><td><p>Image: <?php echo $_SESSION['book_cover'];?></p></td></tr>
                <tr><td><input type ='submit' name='submit' value="Save"></td></tr>
            </table>
        </form>
    </body>
</html>