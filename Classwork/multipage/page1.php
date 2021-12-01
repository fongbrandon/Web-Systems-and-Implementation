<?php
    session_start();
    if(isset($_POST['next'])){
        $_SESSION['fullname'] =$_POST['fullname'];
        $_SESSION['email'] =$_POST['email'];
        $_SESSION['contact'] = $_POST['contact'];
    }
?>
<html>
    <head>
        <title>Log In Multipage Form </title>
        <style type ="text/css">
            .backcolour{
                /*align-content: center;*/
                background-color: grey;
                width: 300px;
            }
        </style>
    </head>
    <body style="background-color:blue">
        <div class="backcolour">
            <form method="POST" action="page2.php" >
                <table>
                    <tr><td><h1>PHP Multi Page Form</h1></td></tr>
                    <tr><th>Full Name</th></tr>
                    <tr><td colspan="2" align="center"><input type='text' name='fullname' placeholder="Ex-James Anderson" required></td></tr>
                    <tr><th>Email</th></tr>
                    <tr><td colspan="2" align="center"><input type='text' name='email' placeholder="Ex-anderson@gmail.com" required></td></tr>
                    <tr><th>Contact</th></tr>
                    <tr><td colspan="2" align="center"><input type='number' name='contact' placeholder="10-digit-number" required></td></tr>
                    <tr><th>Password</th></tr>
                    <tr><td colspan="2" align="center"><input type='password' name='password' placeholder="****" required></td></tr>
                    <tr><th>Re-ennter Password</th></tr>
                    <tr><td colspan="2" align="center"><input type='password' name='password1' placeholder="****" required></td></tr>
                    <tr><td colspan="2" align="center"><input type ='submit' name='submit' value="Submit"></td> 
                        <td><input type ='reset' name='next' value="Reset"></td> </tr>
                </table>
            </form>
        </div>
    </body>
</html>