<?php
    session_start();
    session_destroy();
    echo"You were successfully logged out";
    echo"Click here to <a href='login.php'>login again</a>";

?>