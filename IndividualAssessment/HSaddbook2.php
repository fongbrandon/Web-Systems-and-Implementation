<?php
    session_start();
    if(isset($_POST['next'])){
        $_SESSION['title'] = $_POST['title'];
        $_SESSION['author'] = $_POST['author'];
        $_SESSION['year_pub'] = $_POST['year_pub'];
        $_SESSION['book_cover'] = $_POST['book_cover'];
        
    }else{
        echo "check2";
    }
    /*if(isset($_POST['next'])){
        $_SESSION['title'] =$_POST['title'];  
        $_SESSION['author'] =$_POST['author'];
        $_SESSION['year_pub'] =$_POST['year_pub'];
        $_SESSION['img'] =$_POST['img'];
        echo"check1";
        
        if(empty($_POST['title'])||(empty($_POST['author'])||
          (empty($_POST['year_pub'])||(empty($_POST['book_cover'])){

          }
    }else{
        echo "check";
    }*/
    /*$isbn = $callnum=$subarea="";
    $copies=0;

    $isbnerr = $callnumerr =$subareaerr="";
    $copieserr=0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST["isbn"])){
            $isbnerr="ISBN is requiered";
        }else{
                $isbn = test_input($_POST["isbn"]);
            }
        if(empty($_POST["callnum"])){
            $callnumerr="Call Number is requiered";
        }else{
            $callnum = test_input($_POST["callnum"]);
        }
        if(empty($_POST["subarea"])){
            $subareaerr="Subject Area is requiered";
        }else{
            $subarea = test_input($_POST["subarea"]);
        }
        if(empty($_POST["copies"])){
            $copieserr="Number of Copies is requiered";
        }else{
                $copies = test_input($_POST["copies"]);
            }
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }*/
        /*$enterbutton= $_POST['submit'];*/
        /*$ISBNlength= strlen($isbn);
        if (isset($enterbutton)){
            if ($ISBNlength = 17){
                $output= "<br><redtext> Invalid ISBN. ISBN must be at least 17 characters</redtext>";
        }
        
    }*/
    echo "<a href = 'HSLogout.php'>LOG OUT</a>";
?>
<!--
<html>
    <head>
        <style>
            table, th, td {
                border: 1px solid black;
            }
            th{
                background-color: #FFFF00;
            }
            td{
                background-color:#FF0000;
            }
            table{
                background-color: #6698FB;
                text-align: center;
            }
            body {
                /*background-image: url("bgpic.png");*/
                background-color: #cccccc;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <form method="POST" action="HSdisplay.php" >
            <table cellpadding='5' cellspacing='5' id="pg" align="center" border="0">
                <tr><td style="background-color: #04AA6D"><h1>Library system</h1></td></tr>
                <tr><th>ISBN</th></tr>
                <tr><td colspan="2" align="center">
                    <input type='text' name='isbn' placeholder="978-3-16-148410-0" pattern="[0-9]{3}-[0-9]{1}-[0-9]{2}-[0-9]{6}-[0-9]{1}"required>
                </td></tr>
                <tr><th>Call Number</th></tr>
                <tr><td colspan="2" align="center">
                    <input type='text' name='callnum' placeholder="ML410.B1.M67 2000" required>
                </td></tr>
                <tr><th>Subject Area</th></tr>
                <tr><td colspan="2" align="center">
                    <input type='text' name='subarea' placeholder="Text" required>
                </td></tr>
                <tr><th>Number of Copies</th></tr>
                <tr><td colspan="2" align="center">
                    <input type='number' name='copies' placeholder="0" required>
                </td></tr>
                <tr><td colspan="2" align="center" style="background-color: #0055FF">
                    <input type ='submit' name='submit' value="Submit">
                    <input type ='reset' name='next' value="Reset"></td> </tr>
            </table>
        </form>
    </body>
</html>-->
<html>
    <head>
        <title>Libary</title>
        <style>
            table, th, td {
                border: 2px solid black;
            }
            th{
                background-color: #FFFF00;
            }
            td{
                background-color:#FF0000;
            }
            table{
                /*background-color: #6698FB;*/
                text-align: center;
            }
            body {
                /*background-image: url("bgpic.png");*/
                text-align: center;
            }
                
            input[type=number]{
                width:7rem;
            }
        </style>
    </head>
    <body>
        <div>
            <form method="POST" action="HSdisplay2.php">
                <table align="center">
                    <tr><td>Welcome admin</td></tr>
                    <tr><th>ISBN</th></tr>
                    <tr><td colspan="2" align="center">
                    <input type="text" name='ISBN' placeholder="978-3-16-148410-0" pattern="[0-9]{3}-[0-9]{1}-[0-9]{2}-[0-9]{6}-[0-9]{1}" required></td></tr>
                    <tr><th >Call Number</th></tr>
                    <tr><td colspan="2" align="center">
                        <input type="text" name='callnum' placeholder="ML410.B1.M67 2000" required></td></tr>
                    <tr><th>Subject Area</th></tr>
                    <tr><td colspan="2" align="center">
                        <input type="text" name='subarea' placeholder="Text" required></td></tr>
                    <tr><th>Number of Copies</th></tr>
                    <tr><td colspan="2" align="center">
                        <input type='number' name='copies' placeholder="0" required></td></tr>
                    <tr><td colspan="2" align="center">
                        <input type ='submit' name='next' value="NEXT">
                        <input type ='reset' name='reset' value="RESET"></td> </tr>
                    </td></tr>
                </table>
            </form>
        </div>
    </body>
</html>