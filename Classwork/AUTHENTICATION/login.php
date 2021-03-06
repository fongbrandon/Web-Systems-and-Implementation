<?php
    session_start();
    require_once "DBConnect.php";
    if(isset($_SESSION['user_id'])!="") {
        header("Location: dashboard.php");
    }
    
    if (isset($_POST['login'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $email_error = "Please Enter Valid Email ID";
        }
        if(strlen($password) < 6) {
            $password_error = "Password must be minimum of 6 characters";
        }  
        
        $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '" . 
        $email. "' and pass = '" . md5($password). "'");
        
        if(!empty($result)){
            if ($row = mysqli_fetch_array($result)) {
                $_SESSION['user_id'] = $row['uid'];
                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_email'] = $row['email'];
                $_SESSION['user_mobile'] = $row['mobile'];
                header("Location: dashboard.php");
            } 
        }else {
        $error_message = "Incorrect Email or Password!!!";
        }
    }

?>

<html>
    <body>
        <h1>Login Form in PHP with Validation</h1>
        <p>Please fill all fields in this form</p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <table>
                <tr><label>Email</label></tr>
                <tr><input name="email" type="text" id="email"></tr></br> </br>
                <tr><label>Password</label></tr>
                <tr><input name="password" type="password" id="password"></tr>
                <tr><input type="submit" value="Select"></tr>
            </table>
        </form>
    </body>
</html>