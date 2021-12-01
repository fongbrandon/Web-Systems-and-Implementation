<?php
 
session_start();
if(isset($_SESSION['user_login_id'])) {
session_destroy();
unset($_SESSION['user_id']);
unset($_SESSION['user_name']);
unset($_SESSION['user_email']);
unset($_SESSION['user_mobile']);
header("Location: login.php");
} else {
header("Location: login.php");
}
?>
<p>You are logged out.</p>
<a href="login.php">Login</a>