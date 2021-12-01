<?php
    require_once "DBConnect.php";
    $name_error = $email_error = $password_error = $mobile_error = $cpassword_error =" ";
    
    if(isset($_SESSION['user_id'])!="") {
        header("Location: dashboard.php");
    }
    
    if (isset($_POST['signup'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']); 



        if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
        $name_error = "Name must contain only alphabets and space";
        }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $email_error = "Please Enter Valid Email ID";
        }
        if(strlen($password) < 6) {
        $password_error = "Password must be minimum of 6 characters";
        }       
        if(strlen($mobile) < 10) {
        $mobile_error = "Mobile number must be minimum of 10 characters";
        }
        if($password != $cpassword) {
        $cpassword_error = "Password and Confirm Password doesn't match";
        }
        $sql= "INSERT INTO users(name, email, mobile_number ,password) VALUES('" . $name . "', '" . $email . "', '" . $mobile . "', '" . md5($password) . "')";
 
        if(mysqli_query($conn,$sql) {
            header("location: login.php");
            exit();
        } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
?>

 

<html>
    <body>
        <h1>Login Form in PHP with Validation</h1>
        <p>Please fill all fields in this form</p>
        <form method="post" action="dashboard.php">
            <table>
                <tr><label>Name</label></tr>
                <tr><input name="name" type="text" id="name"></tr></br> </br>
                <tr><label>E-mail</label></tr>
                <tr><input name="email" type="text" id="email"></tr>
                <tr><label>Mobile</label></tr>
                <tr><input name="mobile" type="text" id="mobile"></tr>
                <tr><label>Password</label></tr>
                <tr><input name="Password" type="password" id="password"></tr>
                <tr><label>Confirm Password</label></tr>
                <tr><input name="Confirm_Password" type="password" id="mobile"></tr>
                <tr><input type="submit" value="Select"></tr>
            </table>
        </form>
    </body>
</html>