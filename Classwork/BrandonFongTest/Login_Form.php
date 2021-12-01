<?php
    session_start();
?>
<html>
    <body>
        <form method="POST" action = "login_validation.php">
            <h1>Login Form</h1>
            <p>Email id</p>
            <input type='email' name='email' required>
            <p>Password</p>
            <input type='password' name='password' required>
            <input type = "submit" name = "submit" value = "Submit"> 
        </form>
    </body>
</html>