<?php
    session_start();
    session_destroy();
    echo"You were successfully logged out";
    echo "</br>";
    echo"Click here to <a href='HSlogin.php'>login</a> again";

?>